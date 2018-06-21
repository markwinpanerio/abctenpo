<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<main class="l-main">
  <div class="l-container l-container-main u-clear">
    <div class="l-container-content">
      <div class="map">
        <div class="map-button">
          <ul class="map-button-list">
            <li class="map-button-item">
              <a href="#js-map-part-1" class="map-button-link js-map-part-link">
                <span>横浜エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-2" class="map-button-link js-map-part-link">
                <span>川崎エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-3" class="map-button-link js-map-part-link">
                <span>湘南・鎌倉エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-4" class="map-button-link js-map-part-link">
                <span>横須賀エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-5" class="map-button-link js-map-part-link">
                <span>相模原エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-6" class="map-button-link js-map-part-link">
                <span>厚木・大和エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-7" class="map-button-link js-map-part-link">
                <span>伊勢原・平塚エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-8" class="map-button-link js-map-part-link">
                <span>湯河原・西湘エリア</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="map-box">
          <div class="map-box-image">
            <img class="map-box-base" src="<?php echo ITEM_URL; ?>assets/images/map.png" alt="">
            <img class="map-box-base map-box-base-back" src="<?php echo ITEM_URL; ?>assets/images/map-base.png" alt="">
            <img class="map-box-base map-box-base-lower" src="<?php echo ITEM_URL; ?>assets/images/map-lower.png" alt="">
          </div>
          <div class="map-parts">
            <div class="map-parts-img js-map-parts" id="js-map-part-1">
              <?php importTemplate('./svg/map-parts/1'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-2">
              <?php importTemplate('./svg/map-parts/2'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-3">
              <?php importTemplate('./svg/map-parts/3'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-4">
              <?php importTemplate('./svg/map-parts/4'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-5">
              <?php importTemplate('./svg/map-parts/5'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-6">
              <?php importTemplate('./svg/map-parts/6'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-7">
              <?php importTemplate('./svg/map-parts/7'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-8">
              <?php importTemplate('./svg/map-parts/8'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-9">
              <?php importTemplate('./svg/map-parts/9'); ?>
            </div>
          </div>
        </div>
      </div>
      <section class="listing">
        <ul class="listing-list">
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="<?php echo resolve_asset_uri('images/listing-img.jpg'); ?>" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="<?php echo resolve_asset_uri('images/listing-img.jpg'); ?>" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="<?php echo resolve_asset_uri('images/listing-img.jpg'); ?>" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
        </ul>
        <a href="#" class="listing-button">もっと見る</a>
      </section>
      <div class="virtual">
        <h2 class="virtual-title">3Dバーチャル内覧可能物件</h2>

        <div class="virtual-top">
          <div class="virtual-left virtual-top-item">
            <div class="virtual-left-inner">
              <img src="<?php echo resolve_asset_uri('images/virtual-left-img.jpg' ); ?>" alt="">
            </div>
          </div>
          <div class="virtual-right virtual-top-item">
            <h3 class="virtual-right-heading">3Dバーチャル内覧とは？</h3>
            <p class="virtual-right-copy">店舗の中を360°見渡せる、3Dバーチャル内覧です。<br>圧倒的な臨場感を味わえるように床やキッチンの質感<br>まで忠実に再現。<br>まるでその物件に居るような体験ができます。 </p>
          </div>
        </div>
      </div>
      <section class="listing">
        <ul class="listing-list">
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="<?php echo resolve_asset_uri('images/listing-img.jpg'); ?>" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="<?php echo resolve_asset_uri('images/listing-img.jpg'); ?>" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="<?php echo resolve_asset_uri('images/listing-img.jpg'); ?>" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">

                </p>
              </article>
            </a>
          </li>
        </ul>
        <a href="#" class="listing-button">もっと見る</a>
      </section>





      <!-- start of listing section -->
      <section class="listing">
        <?php importTemplate('modules/listing-list', array(
          'listingItems' => array(
            'listingItem1' => array(
              'link' => 'javascript:;',
              'name' => '横浜',
              'favorite' => 'お気に入り',
              'image'   => '',
              'copy'   => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業',
              'price'   => '282,400円',
              'details'   => 'JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施'
            ),
            'listingItem2' => array(
              'link' => 'javascript:;',
              'name' => '横浜',
              'favorite' => 'お気に入り',
              'image'   => 'listing-img.jpg',
              'copy'   => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業',
              'price'   => '282,400円',
              'details'   => 'JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施'
            ),
            'listingItem3' => array(
              'link' => 'javascript:;',
              'name' => '横浜',
              'favorite' => 'お気に入り',
              'image'   => 'listing-img.jpg',
              'copy'   => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業',
              'price'   => '282,400円',
              'details'   => 'JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施'
            )
          )
        )); ?>
      </section>
      <!-- end of listing section -->

    </div>
    <div class="l-container-sidebar">
      <?php importPart('sidebar'); ?>
    </div>
  </div>

</main>

<!-- start of breadcrumbs section -->
<?php importTemplate('modules/breadcrumbs', array(
  'breadModifier' => '',
  'breadItems' => array(
    'breadItem1' => array(
      'link' => 'javascript:;',
      'link-modifier' => '',
      'text' => '居抜き物件・居抜き店舗の居抜きABC店舗'
    ),
    'breadItem2' => array(
      'link' => '',
      'link-modifier' => 'is-active',
      'text' => '検索条件に合致する物件一覧'
      )
    )
  )); ?>
<!-- end of breadcrumbs section -->

<!-- start of message section -->
<?php importTemplate('modules/message', array(
  'messageItems' => array(
    'messageItem' => array(
      'copy' => '会員登録ですべての3D内覧が<br>ご覧いただけます。',
      'small-link-text' => 'ログインはこちら',
      'small-link' => 'javascript:;',
      'big-link-text' => '会員登録(無料・１分)をお願いします',
      'big-link' => 'javascript:;',
      )
    )
  )); ?>
<!-- end of message section -->

<?php importTemplate('modules/menu'); ?>
<?php importTemplate('modules/hero'); ?>

<!-- start gourmet -->

<div class="gourmet l-container">
 <h2 class="heading-section">横浜エリアのグルメ・レストラン情報</h2>
 <div class="gourmet-container">

   <?php
   $gourmetList = array(
     'gourmetItem' => array(
       'gourmetItem1' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img1.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',
         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
       ),
       'gourmetItem2' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img2.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',
         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
       ),
       'gourmetItem3' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img3.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',
         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
       ),
       'gourmetItem4' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img4.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',
         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
       ),
     )
   )
    ?>

  <?php importTemplate('modules/gourmet',$gourmetList);?>
  <a class="button button-gray button-caret" href="#">もっと見る</a>
 </div>
</div>

<!-- end gourmet -->

<!-- start street spot -->

<div class="gourmet l-container">
 <h2 class="heading-section">横浜エリア街スポット</h2>
 <div class="gourmet-container">

   <?php
   $streetSpot = array(
     'gourmetItem' => array(
       'gourmetItem1' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot1.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => '横浜ワールドポーターズ',
       ),
       'gourmetItem2' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot2.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => '横浜中華街',
       ),
       'gourmetItem3' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot3.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => 'パシフィコ横浜 (横浜国際平和会議場)',
       ),
       'gourmetItem4' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot4.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),
         'iconModifier' => 'icon-white',
         'linkTransition' => '#',
         'title' => '横浜赤レンガ倉庫',
       ),
     )
   )
    ?>

  <?php importTemplate('modules/gourmet',$streetSpot);?>
  <a class="button button-gray button-caret" href="#">もっと見る</a>
 </div>
</div>

<!-- end street spot -->

<?php importTemplate('modules/eyecatch-image'); ?>
<div class="l-container">
  <?php importTemplate('modules/eyecatch-image', array(
    'images' => array(
      'item_1' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-1.jpg')
      ),
      'item_2' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-2.jpg')
      ),
      'item_3' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-3.jpg')
      ),
      'item_4' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-4.jpg')
      ),
      'item_5' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-5.jpg')
      ),
      'item_6' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-6.jpg')
      ),
      'item_7' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-1.jpg')
      ),
      'item_8' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-2.jpg')
      ),
      'item_9' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-3.jpg')
      ),
      'item_10' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-4.jpg')
      ),
      'item_11' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-5.jpg')
      ),
      'item_12' => array(
        'img'   => resolve_image_uri('slide-image/dummy-image-6.jpg')
      )
    )
  )); ?>
</div>
<?php importTemplate('modules/exhibition'); ?>
<?php importTemplate('modules/property-info'); ?>
<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
