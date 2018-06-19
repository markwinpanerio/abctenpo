<section class="search-property">
  <div class="l-container">
    <div class="search-property-wrapper">
      <h2 class="search-property-title">物件を検索する</h2>
      <div class="search-property-form">
        <form class="form u-clear" method="post" action="/">
          <div class="form-wrap form-left">
            <h3 class="form-group-title">賃料検索</h3>
            <div class="form-group form-select-wrap">
              <select class="form-input form-select js-form-select" name="search-rent-from">
                <option>0000万円</option>
                <option>10000万円</option>
                <option>50000万円</option>
                <option>100000万円</option>
                <option>500000万円</option>
                <option>1000000万円</option>
              </select>
            </div>
            <div class="form-sep flex flex-align-center">
              <span>~</span>
            </div>
            <div class="form-group form-select-wrap">
              <select class="form-input form-select js-form-select" name="search-rent-to">
                <option>0000万円</option>
                <option>10000万円</option>
                <option>50000万円</option>
                <option>100000万円</option>
                <option>500000万円</option>
                <option>1000000万円</option>
              </select>
            </div>
          </div>
          <div class="form-wrap form-right">
            <h3 class="form-group-title">総額検索</h3>
            <div class="form-group form-select-wrap">
              <select class="form-input form-select js-form-select" name="total-price-from">
                <option>0000万円</option>
                <option>10000万円</option>
                <option>50000万円</option>
                <option>100000万円</option>
                <option>500000万円</option>
                <option>1000000万円</option>
              </select>
            </div>
            <div class="form-sep flex flex-align-center">
              <span>~</span>
            </div>
            <div class="form-group form-select-wrap">
              <select class="form-input form-select js-form-select" name="total-price-to">
                <option>0000万円</option>
                <option>10000万円</option>
                <option>50000万円</option>
                <option>100000万円</option>
                <option>500000万円</option>
                <option>1000000万円</option>
              </select>
            </div>
          </div>
          <div class="form-wrap form-submit">
            <button class="btn form-btn" type="submit">この条件で検索する</button>
          </div>
        </form>
      </div>

      <!-- Link List Module Start -->
      <?php
        $links = array(
          'link_list' => array(
            'list_item_1' => array(
              'title' => 'お問い合わせ',
              'link' => '/'
            ),
            'list_item_2' => array(
              'title' => '個別で内覧依頼する',
              'link' => '/'
            ),
            'list_item_3' => array(
              'title' => 'お気に入りに追加する',
              'link' => '/'
            ),
          )
        );
      ?>
      <?php importTemplate('modules/link-list', $links); ?>
      <!-- Link List Module End -->

    </div>
  </div>
</section>
