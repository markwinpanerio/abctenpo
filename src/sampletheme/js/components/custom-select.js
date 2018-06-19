import $ from 'jquery';

export default function customSelect() {

  const KEY_CODE_SPACEBAR = 32;
  const KEY_CODE_ENTER = 13;
  const KEY_CODE_ARROW_UP = 38;
  const KEY_CODE_ARROW_DOWN = 40;

  class CustomSelect {
    constructor(params) {
      this.$select = params.$select;
      this.selectMarkup =
        params.selectMarkup ||
        `
        <div class="select">
          <div class="select-form-wrapper js-form-wrapper"></div>
          <div class="select-menu-wrapper js-menu-show-hide">
            <div class="select-menu js-options-wrapper">
              <div class="select-menu-option js-option"></div>
            </div>
          </div>
        </div>`;

      this.formWrapperClass = params.formWrapperClass || ".js-form-wrapper";
      this.menuShowHideClass = params.menuShowHideClass || ".js-menu-show-hide";
      this.optionsWrapperClass =
        params.optionsWrapperClass || ".js-options-wrapper";
      this.optionClass = params.optionClass || ".js-option";

      this.openClass = params.openClass || "is-open";
      this.selectedClass = params.selectedClass || "is-selected";
      this.disabledClass = params.disabledClass || "is-disabled";
      this.hoverClass = params.hoverClass || "is-hover";

      if (this.$select.length === 0) return;

      this.$selectOptions = this.$select.find("option");

      this.$main = null;
      this.$formWrapper = null;
      this.$menuShowHide = null;
      this.$optionsWrapper = null;
      this.$options = null;

      this.optionCurrentlyHovered = -1;
      this.isMenuOpen = false;

      this.createCustomSelectMarkup();
      this.initEvents();

      //we need this flag in case if all options are disabled, nextHover and prevHover doesn't infinitely loop
      this.allMenuOptionsDisabled = true;
      for (let i = 0; i < this.$options.length; i++) {
        if (this.isMenuOptionDisabled(i) === false) {
          this.allMenuOptionsDisabled = false;
          break;
        }
      }
    }

    //generates the custom select markup
    createCustomSelectMarkup() {
      //save all references
      this.$main = $(this.selectMarkup);
      this.$formWrapper = this.$main.find(this.formWrapperClass);
      this.$menuShowHide = this.$main.find(this.menuShowHideClass);
      this.$optionsWrapper = this.$main.find(this.optionsWrapperClass);
      const $option = this.$main.find(this.optionClass);

      //save option markup as template and remove on main template
      const $optionTemplate = $($option[0].outerHTML);
      $option.remove();

      //create options from select form
      this.$selectOptions.each((index, item) => {
        const $item = $(item);
        const selectedState = $item.prop("selected")
          ? " " + this.selectedClass
          : "";
        const disabledState = $item.prop("disabled")
          ? " " + this.disabledClass
          : "";

        let $newOption = $optionTemplate.clone();
        $newOption.addClass(selectedState);
        $newOption.addClass(disabledState);
        $newOption.text($item.text());

        this.$optionsWrapper.append($newOption);
      });

      //save options references
      this.$options = this.$optionsWrapper.find(this.optionClass);

      //add select template to DOM
      this.$select.after(this.$main);

      //move select form to select template
      this.$formWrapper.append(this.$select);
    }

    initEvents() {
      //mousedown on select box
      this.$select.on("mousedown", e => {
        e.preventDefault();

        if(this.isMenuOpen === false){
          this.showMenu();
        }else{
          this.hideMenu();
        }
      });

      //selecting outside select box
      $(document).on("mousedown", e => {
        if (this.$select.is(e.target)) return;
        this.hideMenu();
      });

      //hover on menu options
      this.$options.on("mouseenter", e => {
        const index = this.$options.index(e.currentTarget);
        this.hoverMenuOption(index);
      });
      this.$options.on("mouseout", e => {
        const index = this.$options.index(e.currentTarget);
        this.unHoverMenuOption(index);
      });

      //selecting menu options
      this.$options.on("mousedown", e => {
        const index = this.$options.index(e.currentTarget);
        this.selectMenuOption(index);
        this.hideMenu();
      });

      //keyboard events
      $(document).on("keydown", e => {
        //if pressing spacebar/enter while menu is open
        if (
          (e.keyCode === KEY_CODE_SPACEBAR || e.keyCode === KEY_CODE_ENTER) &&
          this.isMenuOpen
        ) {
          //prevent default select box behavior
          e.preventDefault();

          //select the hovered menu option
          this.selectMenuOption(this.optionCurrentlyHovered);
          this.hideMenu();
          return;
        }

        if (
          e.keyCode === KEY_CODE_SPACEBAR ||
          e.keyCode === KEY_CODE_ARROW_UP ||
          e.keyCode === KEY_CODE_ARROW_DOWN
        ) {
          //when select form is not the focused element, don't execute select keyboard functions
          if (!this.$select.is(document.activeElement)) return;

          //prevent default select box behavior
          e.preventDefault();

          if (!this.isMenuOpen) {
            this.showMenu();
          }

          if (e.keyCode === KEY_CODE_ARROW_UP) {
            this.hoverPrevOption();
          } else if (e.keyCode === KEY_CODE_ARROW_DOWN) {
            this.hoverNextOption();
          }
        }
      });
    }

    showMenu() {
      this.isMenuOpen = true;
      this.$menuShowHide.addClass(this.openClass);
    }

    hideMenu() {
      this.isMenuOpen = false;
      this.$menuShowHide.removeClass(this.openClass);
    }

    isMenuOptionDisabled(index) {
      return this.$options.eq(index).hasClass(this.disabledClass);
    }

    hoverMenuOption(index) {
      if (this.isMenuOptionDisabled(index)) return;

      //unhover previous option
      this.unHoverMenuOption(this.optionCurrentlyHovered);

      this.optionCurrentlyHovered = index;
      this.$options.eq(index).addClass(this.hoverClass);
    }

    hoverNextOption(fromIndex) {
      if (this.allMenuOptionsDisabled) return;

      let currentIndex = fromIndex || this.optionCurrentlyHovered;
      let nextOptionIndex = currentIndex + 1;

      if (nextOptionIndex >= this.$options.length) {
        nextOptionIndex = 0;
      }

      if (this.isMenuOptionDisabled(nextOptionIndex)) {
        this.hoverNextOption(nextOptionIndex);
        return;
      }

      this.hoverMenuOption(nextOptionIndex);
    }

    hoverPrevOption(fromIndex) {
      if (this.allMenuOptionsDisabled) return;

      let currentIndex = fromIndex || this.optionCurrentlyHovered;
      let prevOptionIndex = currentIndex - 1;
      if (prevOptionIndex < 0) {
        prevOptionIndex = this.$options.length - 1;
      }

      if (this.isMenuOptionDisabled(prevOptionIndex)) {
        this.hoverPrevOption(prevOptionIndex);
        return;
      }

      this.hoverMenuOption(prevOptionIndex);
    }

    unHoverMenuOption(index) {
      if (!this.$options.eq(index)) return;
      this.$options.eq(index).removeClass(this.hoverClass);
    }

    selectMenuOption(index) {
      if (this.isMenuOptionDisabled(index) || !this.$options.eq(index)) return;

      //select on menu options
      this.$options.removeClass(this.selectedClass);
      this.$options.eq(index).addClass(this.selectedClass);

      //select on the select form
      this.$selectOptions.eq(index).prop("selected", "selected");
    }
  }

  let $jsFormSelect = $('.js-form-select');
  //default usage
  $jsFormSelect.each(function(){
    new CustomSelect({
      $select: $(this),
      selectMarkup: `
        <div class="custom-select">
          <div class="custom-select-inner js-menu-show-hide">
            <div class="custom-select-form-wrapper js-form-wrapper">
              <div class="custom-select-arrow btn-arrow"></div>
            </div>
            <div class="custom-select-menu-wrapper">
              <div class="custom-select-menu js-options-wrapper">
                <div class="custom-select-menu-option js-option"></div>
              </div>
            </div>
          </div>
        </div>`
    });
  });

}
