import $ from 'jquery';

//transfer this ScrollLock block to a separate JS module file
//scroll lock class
const $wrapper = $("#js-wrap");
const $document = $(document);
let scrollTop = null;
class ScrollLock {
  static on() {
    scrollTop = $document.scrollTop();
    $wrapper.css({
      top: `-${scrollTop}px`,
      position: "fixed",
      width: "100%"
    });
  }

  static off() {
    $wrapper.css({
      top: "",
      position: "",
      width: ""
    });

    if (scrollTop) {
      $document.scrollTop(scrollTop);
    }

    scrollTop = null;
  }
}

//popup class
class Popup {
  constructor(params) {
    this.$popup = params.$popup;
    this.ACTIVE_CLASS = params.activeClass;
    this.TOP_ALIGNED_CLASS = params.topAlignedClass;

    if (!this.$popup) return;
    if (!this.ACTIVE_CLASS) this.ACTIVE_CLASS = "is-active";
    if (!this.TOP_ALIGNED_CLASS) this.TOP_ALIGNED_CLASS = "is-top-aligned";

    this.$contentWrapper = this.$popup.find(".js-content-wrapper");
    this.$closeButtons = this.$popup.find(".js-close");
    this.$content = this.$popup.find(".js-content");

    //close events
    this.$popup.click(e => {
      if (this.$contentWrapper.is(e.target)) this.hide();
    });
    this.$closeButtons.click(() => {
      this.hide();
    });
  }

  show() {
    this.$popup.removeClass(this.ACTIVE_CLASS).addClass(this.ACTIVE_CLASS);
    ScrollLock.on(); //this class should already have access to ScrollLock class

    this.checkContentAlignment();
  }

  hide() {
    this.$popup.removeClass(this.ACTIVE_CLASS);
    ScrollLock.off(); //this class should already have access to ScrollLock class
  }

  checkContentAlignment() {
    if (this.$content.outerHeight() > this.$popup.outerHeight()) {
      this.$popup
        .removeClass(this.TOP_ALIGNED_CLASS)
        .addClass(this.TOP_ALIGNED_CLASS);
    } else {
      this.$popup.removeClass(this.TOP_ALIGNED_CLASS);
    }
  }
}

//to use: instantiate popup class
const popup = new Popup({
  $popup: $("#js-modal")
});

//use popup.show() to open popup
const $openButton = $(".js-open-button");
$openButton.on("click", () => {
  popup.show();
  // alert('yea!');
});
