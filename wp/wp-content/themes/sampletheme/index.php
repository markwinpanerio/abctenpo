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
              <a href="#" data-target="#js-map-part-1" class="map-button-link js-map-part-link">
                <span>横浜エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-2" class="map-button-link js-map-part-link">
                <span>川崎エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-3" class="map-button-link js-map-part-link">
                <span>湘南・鎌倉エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-4" class="map-button-link js-map-part-link">
                <span>横須賀エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-5" class="map-button-link js-map-part-link">
                <span>相模原エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-6" class="map-button-link js-map-part-link">
                <span>厚木・大和エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-7" class="map-button-link js-map-part-link">
                <span>伊勢原・平塚エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#" data-target="#js-map-part-8" class="map-button-link js-map-part-link">
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

      <!-- start of listing section -->
      <section class="listing">
        <?php importTemplate('modules/listing-list', array(
          'listingItems' => array(
            array(
              'link'      => 'javascript:;',
              'name'      => '横浜',
              'favorite'  => 'お気に入り',
              'image'     => '',
              'copy'      => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業',
              'price'     => '282,400円',
              'details'   => 'JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施'
            ),
            array(
              'link'      => 'javascript:;',
              'name'      => '横浜',
              'favorite'  => 'お気に入り',
              'image'     => 'listing-img.jpg',
              'copy'      => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業',
              'price'     => '282,400円',
              'details'   => 'JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施'
            ),
            array(
              'link'      => 'javascript:;',
              'name' => '横浜',
              'favorite'  => 'お気に入り',
              'image'     => 'listing-img.jpg',
              'copy'      => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業1階路面、視認性よく看板範囲広め木目調落ち着いた内装、和食業',
              'price'     => '282,400円',
              'details'   => 'JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施'
            )
          )
        )); ?>
      </section>
      <!-- end of listing section -->

      <!-- start of virtual section -->
      <?php importTemplate('modules/virtual', array(
        'modifier'        => 'first',
        'iframeUrl'       => 'https://www.google.com/maps/embed?pb=!4v1529635463336!6m8!1m7!1sCAoSLEFGMVFpcE01ZDh2b1pHTm9YbWNucVR4NkxORnJ2aGgxNFI4dlBRU2VWTDhf!2m2!1d10.31923621547137!2d123.9030895481028!3f314.19658539695394!4f0.28764085743584644!5f0.7820865974627469',
        'heading'         => '3Dバーチャル内覧とは？',
        'leftCopy'        => 'ドラッグやスワイプで360°ご覧いただけます',
        'rightCopy'       => '店舗の中を360℃見渡せる、3Dバーチャル内覧です。<br>圧倒的な臨場感を味わえる、床やキッチンの質感<br class="u-sp-hidden">まで忠実に再現。<br>まるでその物件に居るような体験ができます。 ',
        'svgIcon'         => 'svg/mouse.svg',
        'buttonText'      => '',
        'buttonLink'      => 'javascript',
        'buttonTarget'    => '_blank',
        'svgButtonIcon'   => 'svg/pdf.svg'
      )); ?>
      <!-- end of virtual section -->

    </div>
    <div class="l-container-sidebar">
      <?php importPart('sidebar'); ?>
    </div>
  </div>

</main>

<!-- start of virtual second section -->
<div class="l-container">
  <?php importTemplate('modules/virtual', array(
    'modifier'        => 'second',
    'iframeUrl'       => 'https://www.google.com/maps/embed?pb=!4v1529635463336!6m8!1m7!1sCAoSLEFGMVFpcE01ZDh2b1pHTm9YbWNucVR4NkxORnJ2aGgxNFI4dlBRU2VWTDhf!2m2!1d10.31923621547137!2d123.9030895481028!3f314.19658539695394!4f0.28764085743584644!5f0.7820865974627469',
    'heading'         => '店内3Dバーチャル内覧開催中',
    'leftCopy'        => 'ドラッグやスワイプで360°ご覧いただけます',
    'rightCopy'       => '店舗の中を360℃見渡せる、3Dバーチャル内覧です。<br>圧倒的な臨場感を味わえる、床やキッチンの質感まで忠実に再現。<br class="u-sp-hidden">まるでその物件に居るような体験ができます。 ',
    'svgIcon'         => 'svg/mouse.svg',
    'buttonText'      => '平面図を見る',
    'buttonLink'      => 'javascript',
    'buttonTarget'    => '_blank',
    'svgButtonIcon'   => 'svg/pdf.svg'
  )); ?>
</div>
<!-- end of virtual second section -->

<!-- start of become member section -->
<?php importTemplate('modules/become-member', array(
    'modifier' => '',
    'becomeMemberButtonImage' => 'bnr-member-btn.jpg',
    'becomeMemberButtonLink' => 'javascript:;',
    'becomeMemberImageAlt' => '会員登録 MEMBER REGISTRATION',
    'becomeMembers' => array(
      array(
        'image' => 'bnr-member-1.jpg',
        'alt' => '会員になると絶対に得する５つの理由,未公開物件を会員限定メルマガで配信,条件に合った物件入荷時は直接ご連絡,会員限定の先行内覧会を毎日開催中,店舗オープンを無料でマスコミに配信,開業後も様々な無料経営サポート,簡単30秒で登録完了'
      ),
      array(
        'image' => 'bnr-member-2.jpg',
        'alt' => 'ご覧いただいている物件の情報は一部です,会員登録(無料)するだけで、すべての情報をご覧いただけます。会員限定のメールマガジンでは新着物件や内覧会情報を配信中です。'
      )
    )
  )); ?>
<!-- end of become member section -->

<!-- start of breadcrumbs section -->
<?php importTemplate('modules/breadcrumbs', array(
  'modifier'          => '',
  'breadItems'        => array(
    'breadItem1'      => array(
      'link'          => 'javascript:;',
      'link-modifier' => '',
      'text' => '居抜き物件・居抜き店舗の居抜きABC店舗'
    ),
    'breadItem2'      => array(
      'link'          => '',
      'link-modifier' => 'is-active',
      'text'          => '検索条件に合致する物件一覧'
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
      'big-link' => 'javascript:;'
      )
    )
  )); ?>
<!-- end of message section -->

<?php importTemplate('modules/property'); ?>

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
         'linkTransition' => 'javascript:;',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',

         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
         'modifier' => '',
         'data-lat'=> '35.667100513545336',
         'data-lng'=> '139.81617718935013',
         'data-img-main' => resolve_asset_uri('images/gourmet-img2.jpg'),
         'data-title' => 'Estadio（エスタディオ）～spanish dining～',
         'data-desc' => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ',
         'data-map-icon' => resolve_asset_uri('images/map-pin/pin_restaurant.svg'),
         'data-map-icon-active-state' => resolve_asset_uri('images/map-pin/pin_restaurant-big.svg'),
         'js-hook' => 'js-map-item'
       ),
       'gourmetItem2' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img2.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),

         'iconModifier' => 'icon-white',
         'linkTransition' => 'javascript:;',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',

         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
         'modifier' => '',
         'data-lat'=> '35.6659377',
         'data-lng'=> '139.81599329999995',
         'data-img-main' => resolve_asset_uri('images/gourmet-img1.jpg'),
         'data-title' => 'Estadio（エスタディオ）～spanish dining～',
         'data-desc' => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ',
         'data-map-icon' => resolve_asset_uri('images/map-pin/pin_restaurant.svg'),
         'data-map-icon-active-state' => resolve_asset_uri('images/map-pin/pin_restaurant-big.svg'),
         'js-hook' => 'js-map-item'
       ),
       'gourmetItem3' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img3.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),

         'iconModifier' => 'icon-white',
         'linkTransition' => 'javascript:;',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',

         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
         'modifier' => '',
         'data-lat'=> '35.6808776',
         'data-lng'=> '139.81124920000002',
         'data-img-main' => resolve_asset_uri('images/gourmet-img4.jpg'),
         'data-title' => 'Estadio（エスタディオ',
         'data-desc' => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ1階路面、視認性よく看板範囲広め木目調落ち着いた内装、',
         'data-map-icon' => resolve_asset_uri('images/map-pin/pin_restaurant.svg'),
         'data-map-icon-active-state' => resolve_asset_uri('images/map-pin/pin_restaurant-big.svg'),
         'js-hook' => 'js-map-item'
       ),
       'gourmetItem4' => array(
         'imgUrl' => resolve_asset_uri('images/gourmet-img4.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-restaurant.svg'),

         'iconModifier' => 'icon-white',
         'linkTransition' => 'javascript:;',
         'title' => 'Estadio（エスタディオ）～spanish <br class="u-pc-hidden">dining～',

         'subtitle' => 'ワインと和ビストロ',
         'copy' => 'ＪＲ総武線飯田橋駅西口 徒歩1分 <br> 横浜市神奈川区鶴屋町2-15 CRANE YOKOHA <br>MAビル 1F',
         'linkText' => 'MAPを見る',
         'link' => '#',
         'modifier' => '',
         'data-lat'=> '35.7106248',
         'data-lng'=> '139.7084831',
         'data-img-main' => resolve_asset_uri('images/gourmet-img1.jpg'),
         'data-title' => 'Estadio（エスタディオ）～spanish dining～ Estadio（エスタディオ）～spanish dining～',
         'data-desc' => '1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ1階路面、視認性よく看板範囲広め木目調落ち着いた内装、ここにテキストが入ります。こ',
         'data-map-icon' => resolve_asset_uri('images/map-pin/pin_restaurant.svg'),
         'data-map-icon-active-state' => resolve_asset_uri('images/map-pin/pin_restaurant-big.svg'),
         'js-hook' => 'js-map-item'
       ),
     )
   )
    ?>

  <?php importTemplate('modules/gourmet',$gourmetList);?>

<!-- start button module -->
  <?php importTemplate('modules/button', array(
        'buttonModifier' => 'button-gray button-caret',
        'buttonText' => 'もっと見る',
        'buttonLink' => 'javascript:;'
    )); ?>
  <!-- end button module -->

 </div>
</div>

<!-- end gourmet -->

<?php importTemplate('modules/main-map'); ?>

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
         'linkTransition' => 'javascript:;',

         'title' => '横浜ワールドポーターズ',
         'subtitle' => '',
         'copy' => '',
         'linkText' => '',
         'link' => '',
         'modifier' => '',
       ),
       'gourmetItem2' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot2.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),

         'iconModifier' => 'icon-white',
         'linkTransition' => 'javascript:;',

         'title' => '横浜中華街',
         'subtitle' => '',
         'copy' => '',
         'linkText' => '',
         'link' => '',
         'modifier' => '',
       ),
       'gourmetItem3' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot3.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),

         'iconModifier' => 'icon-white',
         'linkTransition' => 'javascript:;',

         'title' => 'パシフィコ横浜 (横浜国際平和会議場)',
         'subtitle' => '',
         'copy' => '',
         'linkText' => '',
         'link' => '',
         'modifier' => '',
       ),
       'gourmetItem4' => array(
         'imgUrl' => resolve_asset_uri('images/street-spot4.jpg'),
         'badgeUrl' => resolve_asset_uri('images/svg/icon-spot.svg'),

         'iconModifier' => 'icon-white',
         'linkTransition' => 'javascript:;',

         'title' => '横浜赤レンガ倉庫',
         'subtitle' => '',
         'copy' => '',
         'linkText' => '',
         'link' => '',
         'modifier' => '',
       ),
     )
   )
    ?>


  <?php importTemplate('modules/gourmet',$streetSpot);?>
  <!-- start button module -->
    <?php importTemplate('modules/button', array(
          'buttonModifier' => 'button-gray button-caret',
          'buttonText' => 'もっと見る',
          'buttonLink' => 'javascript:;'
      )); ?>
    <!-- end button module -->
 </div>
</div>

<!-- start of information -->
<?php importTemplate('modules/information', array(
  'modifier'     => '',
  'image'        => 'information.jpg',
  'caption'      => 'インタビュー',
  'time'         => '2018.03.30',
  'status'       => 'NEW',
  'heading'      => '飲食店の物件、居抜きとスケルトン費用がお得な物件はど<br>っち？',
  'copy'         => 'アキバ”の愛称で親しまれる秋葉原は、日本有数の電気街です。しかし、近年ではマン<br class="u-sp-hidden">ガ・アニメ・ゲームといったオタク文化や、国民的アイドルを輩出した劇場を持つアイ<br class="u-sp-hidden">ドル文化の聖地として、さまざまな観点から世界的な注目を集めています。こちらでは<br class="u-sp-hidden">、そんな秋葉原の歴...'
)); ?>
<!-- end of information -->

<?php importTemplate('modules/modal'); ?>

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

<?php importTemplate('modules/pagination'); ?>


<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
