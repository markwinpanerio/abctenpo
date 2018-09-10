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


<?php importTemplate('modules/property-listing', array(
  'items' => array(
    array(
      'heading' => '餃子や焼肉、グルメばかりの地図「幡ヶ谷」は住みやすさから渋<br class="u-sp-hidden">谷区で人気！',
      'image' => 'property-listing-img.jpg',
      'details' => array(
        array(
          'columns' => array(
            array(
              'column' => 'アクセス',
              'column-modifier' => ''
            ),
            array(
              'column' => '<span class="u-sp-hidden">都営大江戸線 渋谷駅 徒歩2分 東京メトロ丸の内線 青山駅 徒歩2分</span> <span class="u-pc-hidden">青山駅 徒歩2分</span>',
              'column-modifier' => ''
            )
          )
        ),
        array(
          'columns' => array(
            array(
              'column' => '業態',
              'column-modifier' => ''
            ),
            array(
              'column' => '<span class="u-sp-hidden">居酒屋,和食,ダイニングバー</span> <span class="u-pc-hidden">居酒屋</span>',
              'column-modifier' => 'column-blue'
            )
          )
        )
      ),
      'tags' => array(
        array('tag' => '居抜き'),
        array('tag' => '造作無償'),
        array('tag' => '内覧会'),
        array('tag' => '3Dバーチャル内覧')
      )
    )
  )
)); ?>





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
<div class="tokyo">
  <div class="common-header l-common-header">
    <a class="logo" href="">
      <svg class="logo-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 464 494" width="464" height="494">
        <style>
          tspan { white-space:pre }
          .shp0 { fill: none;stroke: #ffffff;stroke-linecap:round;stroke-linejoin:round;stroke-width: 3 } 
          .shp1 { fill: #5ba3d7 } 
          .shp2 { fill: #ffc734 } 
        </style>
        <g>
          <path id="Path 1" class="shp0" d="M437.37 467.09L386.19 467.09L435.44 122.23C436.11 116.51 431.31 113.97 426.98 113.91C423.83 113.91 418.69 114.68 411.42 118.26C340.15 153.21 272.89 221.07 211.25 319.57C204.4 330.41 197.68 341.96 190.56 354.09C165.2 397.38 136.43 446.39 103.45 464.31C84.85 474.38 64.91 475.44 48.85 467.23C33.26 459.25 23.62 443.53 22.32 424.01C20.71 399.53 37.78 388.88 45.2 385.46C50.73 382.9 56.59 381.45 62.36 381.05C67.74 380.69 71.72 382.98 71.8 386.95C71.8 387.79 71.84 388.58 71.92 389.32C72.69 395.34 76.4 400.32 82.09 402.97C90 406.68 99.72 404.12 104.75 397.06C108.98 391.06 109.43 381.87 101.02 374.76C84.72 361.11 58.93 358.88 36.82 369.17C14.19 379.7 1.68 400.62 3.26 425.13C5.02 451.04 18.32 472.14 39.8 483.19C61.8 494.47 88.44 493.26 112.92 480.02C150.5 459.58 179.32 410.44 207.18 362.94C212.96 353.14 218.42 343.86 223.82 335C226.19 341.71 230.35 347.64 236.17 352.44C249.58 363.43 268.79 365.38 282.96 357.25C292.38 351.79 294.12 345.71 293.9 341.54C293.63 336.69 290.56 332.46 285.64 330.16C280.09 327.65 273.29 328.23 268.19 331.67C265.92 333.27 264.13 335.5 262.99 338.22C261.8 341.1 260.14 344.02 253.94 341.92C252.03 341.1 250.28 340.03 248.65 338.72C243.24 334.31 240.47 328.05 240.57 320.58C240.58 313.15 241.97 308 245.14 301.91C264.57 273.26 284.5 247.69 304.86 225.28C328.65 200.11 348.87 216.6 347.39 227.82L313.58 467.09L259.89 467.09C256.13 467.09 252.77 469.95 252.33 473.47L252.03 476.17C251.68 479.65 254.39 482.61 258.09 482.61L435.64 482.61C439.31 482.61 442.71 479.73 443.12 476.21L443.41 473.49C443.8 469.96 441.1 467.09 437.37 467.09ZM402.14 100.36L460.75 97.92L418.86 61.54L430.41 6.39L383.57 36.11L340.4 2.12L353.25 56.71L304 83.45L358.25 92.97L376.21 159.6L402.14 100.36Z" />
          <path id="Path 2" class="shp1" d="M437.37,467.09h-51.17l49.24,-344.86c0.68,-5.72 -4.13,-8.26 -8.46,-8.32c-3.15,0 -8.28,0.77 -15.56,4.35c-71.26,34.95 -138.53,102.81 -200.17,201.31c-6.85,10.83 -13.57,22.39 -20.69,34.51c-25.36,43.3 -54.13,92.3 -87.1,110.23c-18.6,10.07 -38.54,11.13 -54.6,2.92c-15.59,-7.98 -25.24,-23.7 -26.54,-43.21c-1.61,-24.48 15.47,-35.13 22.88,-38.56c5.53,-2.55 11.39,-4 17.16,-4.41c5.39,-0.36 9.36,1.93 9.44,5.9c0,0.85 0.04,1.63 0.12,2.37c0.77,6.02 4.48,11 10.17,13.65c7.92,3.71 17.63,1.15 22.66,-5.92c4.23,-6 4.68,-15.18 -3.73,-22.29c-16.29,-13.65 -42.08,-15.88 -64.2,-5.6c-22.62,10.53 -35.14,31.45 -33.56,55.96c1.76,25.91 15.06,47.01 36.55,58.07c22,11.27 48.64,10.07 73.11,-3.18c37.58,-20.44 66.41,-69.57 94.26,-117.07c5.78,-9.8 11.24,-19.08 16.65,-27.95c2.36,6.71 6.53,12.65 12.35,17.44c13.4,11 32.62,12.95 46.79,4.81c9.42,-5.45 11.15,-11.54 10.94,-15.7c-0.27,-4.85 -3.34,-9.08 -8.27,-11.38c-5.55,-2.52 -12.35,-1.93 -17.45,1.51c-2.27,1.6 -4.06,3.83 -5.2,6.55c-1.2,2.88 -2.85,5.8 -9.05,3.7c-1.91,-0.82 -3.67,-1.89 -5.3,-3.2c-5.4,-4.41 -8.18,-10.67 -8.08,-18.14c0.02,-7.43 1.4,-12.58 4.58,-18.67c19.42,-28.65 39.36,-54.23 59.71,-76.63c23.79,-25.17 44.02,-8.68 42.54,2.54l-33.82,239.27h-53.69c-3.76,0 -7.12,2.86 -7.55,6.38l-0.3,2.7c-0.35,3.48 2.36,6.44 6.06,6.44h177.55c3.68,0 7.07,-2.88 7.48,-6.4l0.29,-2.72c0.4,-3.52 -2.3,-6.4 -6.04,-6.4z" />
          <path id="Path 3" class="shp2" d="M402.14,100.36l58.61,-2.44l-41.89,-36.38l11.55,-55.15l-46.85,29.72l-43.16,-33.99l12.85,54.59l-49.25,26.74l54.25,9.52l17.96,66.63z" />
        </g>
      </svg>
      <div class="logo-right">
        <p class="logo-top">居抜き物件ならABC店舗</p>
        
        <svg class="logo-bottom"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 660 112" width="660" height="112">
          <style>
            tspan { white-space:pre }
          </style>
          <g>
            <path d="M36.59 44.95C36.59 42.99 36.22 41.36 35.49 40.01C34.8 38.66 33.46 37.97 31.54 37.97C28.67 37.97 25.83 39.69 23.07 42.99C20.35 46.36 18.16 50.46 16.46 55.23C14.75 59.95 13.92 63.99 13.92 67.24C13.92 71.97 15.38 74.31 18.31 74.31C20.38 74.31 22.5 73.36 24.62 71.49C26.81 69.57 28.8 67.09 30.64 63.92C32.56 60.66 34.02 57.35 34.99 54.05C36.05 50.7 36.59 47.63 36.59 44.95ZM58.33 68.19C57.2 70.51 55.93 72.53 54.55 74.52C53.16 76.41 51.6 78.05 49.87 79.56C48.18 80.94 46.5 82.04 44.71 82.77C42.99 83.52 41.21 83.9 39.35 83.9C35.25 83.9 32.6 82.62 31.5 80.19C30.35 77.68 29.78 74.8 29.78 71.37C26.61 75.04 23.58 78.05 20.55 80.42C17.51 82.74 14.02 83.9 10.17 83.9C7.86 83.9 5.96 83.24 4.45 81.97C2.96 80.69 1.84 79.05 1.06 76.86C0.38 74.76 0 72.46 0 70.01C0 64.74 1.35 59.22 4.05 53.34C6.73 47.54 10.35 42.61 15 38.7C19.62 34.67 24.55 32.74 29.85 32.74C32.34 32.74 34.26 33.19 35.67 34.17C37.06 35.12 38.01 36.23 38.53 37.48C39.08 38.66 39.5 40.01 39.9 41.49L42.07 34.17L54.95 34.17L44.1 69.78C43.32 72.34 42.93 73.9 42.93 74.48C42.93 74.91 43.1 75.34 43.41 75.7C43.76 76.09 44.16 76.24 44.58 76.24C47.09 76.24 49.8 73.54 52.69 68.19L58.33 68.19ZM129.76 49.93C129.76 47.09 129.05 44.74 127.76 42.97C126.43 41.14 124.47 40.27 121.88 40.27C115.44 40.27 110.17 45.01 105.99 54.5C104.65 57.67 103.55 60.87 102.79 64.12C102.06 67.33 101.68 69.57 101.68 70.79C101.68 73.13 102.39 75.08 103.81 76.61C105.21 78.17 107.22 79.01 109.81 79.01C114.05 79.01 117.65 77.31 120.67 73.94C123.69 70.59 125.96 66.58 127.44 61.92C128.98 57.37 129.76 53.34 129.76 49.93ZM144.09 49.72C144.09 53.81 143.15 57.85 141.36 61.86C139.57 65.81 137.01 69.56 133.66 72.89C130.35 76.32 126.56 79.01 122.29 80.94C118.05 82.91 113.59 83.87 108.91 83.87C102.52 83.87 97.69 82.27 94.22 79.18C90.75 75.9 89.02 72.23 89.02 67.92C89.02 65.3 89.75 61.62 91.18 56.79L103.99 15.05C104.44 13.37 104.67 12.3 104.67 11.74C104.67 10.37 104.04 9.49 102.79 9.09C101.6 8.69 99.95 8.48 97.9 8.48L96.19 8.48L97.9 3.11C107.16 3.11 113.85 2.65 117.93 1.72L121.88 1.72L109.81 40.97C110.34 40.51 111.29 39.77 112.64 38.62C114.01 37.52 115.29 36.58 116.54 35.81C117.71 35.09 119.39 34.37 121.48 33.72C123.6 33.06 125.89 32.74 128.35 32.74C131.21 32.74 133.79 33.4 136.17 34.64C138.58 35.93 140.48 37.86 141.93 40.42C143.39 42.93 144.09 46.04 144.09 49.72ZM220.01 44.95C220.01 47.31 219.27 49.28 217.88 50.87C216.53 52.46 214.73 53.26 212.45 53.26C210.78 53.26 209.4 52.82 208.39 51.82C207.35 50.93 206.83 49.73 206.83 48.21C206.83 47.43 206.96 46.36 207.33 45.16C207.66 44.13 207.83 43.13 207.83 42.31C207.83 40.48 207.24 39.21 205.99 38.62C204.8 37.97 203.58 37.67 202.4 37.67C198.99 37.67 195.8 39.45 192.84 43.21C189.89 46.94 187.57 51.32 185.84 56.35C184.07 61.34 183.23 65.51 183.23 68.71C183.23 72.23 184.05 74.55 185.72 75.45C187.45 76.45 189.21 76.93 190.95 76.93C194.48 76.93 197.7 75.99 200.54 74.11C203.42 72.23 205.86 70.08 207.83 67.57L214.14 67.57C211.39 71.8 207.49 75.51 202.56 78.88C197.54 82.18 191.97 83.9 185.88 83.9C180.45 83.9 176.27 82.49 173.32 79.87C170.37 77.17 168.91 73.54 168.91 68.92C168.91 63.51 170.44 57.99 173.55 52.27C176.66 46.6 180.95 41.94 186.47 38.29C191.99 34.58 198.11 32.74 204.82 32.74C207.25 32.74 209.4 33.06 211.26 33.72C213.09 34.37 214.71 35.29 216 36.41C217.34 37.63 218.32 38.91 219.01 40.35C219.6 41.86 220.01 43.38 220.01 44.95ZM328.68 34.41L327.05 39.8L315.41 39.8L306.63 68.6C305.96 70.62 305.65 72.18 305.65 73.09C305.65 73.93 305.86 74.65 306.43 75.34C306.99 75.99 307.69 76.33 308.53 76.33C310.73 76.33 312.72 75.27 314.45 73.08C316.18 70.86 317.67 68.47 319.04 65.89L324.52 65.89C322.33 70.75 319.91 74.52 317.13 77.2C314.41 79.91 311.87 81.69 309.47 82.59C307.05 83.45 304.88 83.9 302.87 83.9C299.55 83.9 296.95 82.91 295.05 80.94C293.2 79.05 292.29 76.45 292.29 73.15C292.29 71 292.82 67.98 294.03 64.16L301.59 39.8L290.72 39.8L292.38 34.41L303.23 34.41L308.63 16.62L322.51 16.62L317.13 34.41L328.68 34.41ZM390.52 42.2C390.52 40.93 390.09 39.73 389.19 38.66C388.29 37.63 387.05 37.03 385.54 37.03C382.8 37.03 380.28 37.97 378.01 39.9C375.72 41.75 373.8 43.96 372.26 46.56C370.74 49.07 369.45 51.73 368.46 54.41C367.46 57.05 366.86 58.68 366.61 59.26C374.53 57.91 380.46 55.7 384.49 52.55C388.54 49.39 390.52 45.94 390.52 42.2ZM402.81 42.41C402.81 44 402.36 45.83 401.37 47.95C400.42 49.97 398.61 52.23 396.06 54.58C393.41 56.88 389.77 58.94 384.94 60.66C380.15 62.48 374.09 63.75 366.86 64.37L365.43 64.5C365.14 66.06 364.98 67.5 364.98 68.85C364.98 71.73 365.66 73.81 367.05 75.04C368.46 76.32 370.41 76.93 373.07 76.93C378.91 76.93 384.51 73.81 389.81 67.48L395.99 67.48C393.61 71.2 389.93 74.82 385.02 78.47C380.15 82.08 374.33 83.86 367.61 83.86C362.91 83.86 358.93 82.62 355.61 80.15C352.27 77.61 350.62 73.93 350.62 69.09C350.62 63.13 352.27 57.37 355.59 51.66C358.93 46.11 363.41 41.49 369.1 37.97C374.84 34.47 381.05 32.74 387.78 32.74C393.17 32.74 397.06 33.61 399.38 35.48C401.66 37.27 402.81 39.58 402.81 42.41ZM493.79 66.92C492.7 69 491.21 71.2 489.29 73.65C487.35 76.13 484.96 78.32 482.07 80.19C479.18 82.08 476.1 82.96 472.78 82.96C469.92 82.96 467.67 82.35 465.99 80.9C464.27 79.55 463.46 77.6 463.46 75.34C463.46 73.58 463.96 71.15 464.96 68.07L469.21 54.05C470.36 50.17 470.98 47.59 470.98 46.15C470.98 45.29 470.73 44.54 470.23 43.79C469.7 43.1 468.95 42.76 468 42.76C465.92 42.76 463.33 44.54 460.3 48.08C457.31 51.6 454.2 56.4 451.08 62.37C447.95 68.47 445.23 75.04 442.93 82.17L429.07 82.17L439.61 48C440.55 44.61 441.01 42.61 441.01 42.1C441.01 41.58 440.9 41.14 440.67 40.66C440.41 40.18 439.99 39.93 439.33 39.93C437.83 39.93 436.37 40.87 434.99 42.76C433.57 44.65 432.4 46.77 431.42 49.02L426.56 49.02C428.01 44.84 430.31 41.14 433.38 37.76C436.41 34.41 440.32 32.75 445.09 32.75C448.17 32.75 450.34 33.55 451.88 35.2C453.38 36.82 454.14 38.58 454.14 40.38C454.14 41.37 453.92 42.93 453.47 44.97C453.05 47.09 452.57 48.97 452.02 50.74L450 56.77C454.82 49.35 459.34 43.47 463.57 39.17C467.82 34.88 472.52 32.75 477.71 32.75C480.68 32.75 482.87 33.57 484.23 35.27C485.61 37.03 486.28 38.94 486.28 40.96C486.28 42.2 485.84 44.54 484.88 48L478.76 68.3C478.06 70.83 477.71 72.62 477.71 73.58C477.71 74.03 477.82 74.37 478.08 74.76C478.34 75.1 478.64 75.21 479.11 75.21C480.18 75.21 481.58 74.48 483.27 73C484.96 71.41 486.51 69.37 487.94 66.92L493.79 66.92ZM566.13 48.66C566.13 46.26 565.52 44.07 564.23 42.2C563 40.27 561.15 39.32 558.87 39.32C556.15 39.32 553.55 40.51 551.06 42.85C548.62 45.29 546.43 48.26 544.55 51.98C543.32 54.3 542.28 56.64 541.55 58.98C540.74 61.35 540.08 63.5 539.66 65.55C539.24 67.48 539 69.09 539 70.34C539 72.83 539.79 75 541.3 76.82C542.8 78.65 544.84 79.55 547.38 79.55C551.02 79.55 554.3 77.79 557.18 74.27C560.04 70.75 562.26 66.5 563.83 61.61C565.37 56.71 566.13 52.39 566.13 48.66ZM580.5 50.05C580.5 54.16 579.71 58.23 578.17 62.3C576.56 66.3 574.38 69.97 571.56 73.17C568.72 76.45 565.37 79.05 561.53 80.94C557.73 82.91 553.65 83.86 549.41 83.86C545.96 83.86 543.3 83.28 541.29 82.18C539.24 81.07 537.41 79.55 535.8 77.6L529.57 98.02C529.05 99.85 528.72 100.99 528.72 101.57C528.72 102.89 529.45 103.75 530.82 104.19C532.14 104.66 534.3 104.89 537.22 104.89L540.08 104.89L538.56 110L501.65 110L503.22 104.89L505.48 104.89C508.15 104.89 510.05 104.68 511.32 104.27C512.51 103.93 513.46 103.18 514.04 102.15C514.64 101.09 515.42 99.1 516.32 96.07L531.5 46.35C532.05 44.65 532.31 43.27 532.31 42.2C532.31 41.49 532.14 40.96 531.8 40.42C531.43 39.93 530.99 39.69 530.47 39.69C529.45 39.69 528.26 40.35 526.81 41.71C525.42 43.1 523.93 45.66 522.42 49.22L516.8 49.22C517.87 46.77 519 44.43 520.27 42.2C521.53 40.01 523.49 37.87 526.07 35.81C528.71 33.79 531.8 32.75 535.44 32.75C542 32.75 545.27 36.08 545.27 42.61C551.42 36.08 557.73 32.75 564.2 32.75C568.38 32.75 571.6 33.72 574.05 35.7C576.56 37.69 578.17 39.97 579.13 42.61C580.02 45.25 580.5 47.74 580.5 50.05ZM645.58 49.22C645.58 45.66 644.81 42.76 643.31 40.72C641.76 38.66 639.49 37.65 636.51 37.65C633.56 37.65 630.96 38.7 628.67 40.93C626.37 43.06 624.52 45.82 622.99 49.07C621.48 52.39 620.31 55.68 619.56 58.98C618.74 62.37 618.37 65.19 618.37 67.57C618.37 70.96 619.11 73.69 620.59 75.79C622.15 77.89 624.32 79.01 627.04 79.01C630.12 79.01 632.83 77.89 635.19 75.75C637.56 73.6 639.56 70.94 641.11 67.68C642.59 64.37 643.78 61.02 644.5 57.61C645.23 54.26 645.58 51.45 645.58 49.22ZM659.44 53.27C659.44 57.16 658.66 60.94 657.12 64.65C655.57 68.3 653.34 71.65 650.43 74.55C647.52 77.44 644.12 79.76 640.25 81.39C636.34 83.07 632.08 83.86 627.4 83.86C622.88 83.86 618.83 82.96 615.4 81.22C611.94 79.46 609.26 76.95 607.34 73.79C605.44 70.55 604.49 66.92 604.49 62.82C604.49 57.59 605.9 52.67 608.77 47.99C611.68 43.34 615.59 39.65 620.54 36.9C625.54 34.09 630.89 32.75 636.63 32.75C641.42 32.75 645.52 33.68 648.99 35.54C652.44 37.45 655.02 39.97 656.78 43.1C658.51 46.26 659.44 49.62 659.44 53.27ZM266.36 59.63L240.87 59.63L242.61 54.3L267.95 54.3L266.36 59.63Z" />
          </g>
        </svg>
      </div>
    </a>
    <a class="header-button" href="">
      <svg class="header-button-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 154 156" width="154" height="156">
        <style>
          tspan { white-space:pre }
        </style>
        <g class="svg-color-search">
          <path d="M93.16 94.06C75.81 111.41 47.58 111.41 30.22 94.06C12.87 76.71 12.87 48.48 30.22 31.12C47.58 13.77 75.81 13.77 93.16 31.12C110.51 48.48 110.51 76.71 93.16 94.06ZM105.33 18.95C81.26 -5.11 42.11 -5.11 18.05 18.95C-6.02 43.02 -6.02 82.17 18.05 106.23C39.31 127.49 72.33 129.97 96.33 113.67L133.26 150.59C137.8 155.14 145.16 155.14 149.69 150.59C154.23 146.05 154.23 138.7 149.69 134.16L112.77 97.24C129.06 73.23 126.58 40.2 105.33 18.95Z" />
        </g>
      </svg>
      <p class="header-button-text">物件を探す</p>
    </a>
    <a class="header-button" href="">
      <svg class="header-button-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1068 850" width="1068" height="850">
        <style>
          tspan { white-space:pre }
        </style>
        <g class="svg-color-information">
          <path d="M978.36 691.37C978.36 730.65 946.17 762.46 906.69 762.28C781.54 761.51 657.93 752.31 534.33 743.11C410.73 752.31 287.12 761.51 161.97 762.28C122.5 762.46 90.3 730.65 90.3 691.37L90.3 159.18C90.3 147.11 93.17 136 98.55 126.03C110.43 103.41 134.38 88.09 161.97 88.28C287.12 89.04 410.54 98.05 534.34 107.44C658.13 98.05 781.55 89.04 906.69 88.28C934.29 88.09 958.24 103.41 970.12 126.03C975.49 136 978.36 147.11 978.36 159.18L978.36 691.37L978.36 691.37ZM1032.79 14.69C1025.89 10.67 1018.22 7.79 1009.98 6.26C1001.93 4.92 993.31 3.39 983.34 2.04C980.09 1.46 976.64 1.28 973.38 1.09C825.43 -1.79 679.79 8.94 534.33 19.86C388.87 8.94 243.23 -1.79 95.28 1.09C92.02 1.28 88.57 1.46 85.32 2.04C75.35 3.39 66.73 4.92 58.68 6.26C50.44 7.79 42.77 10.67 35.87 14.69C14.79 27.15 1 50.34 1 76.01L1 111.66L1 743.11L1 774.54C1 808.66 25.15 838.16 58.68 844.11C66.73 845.64 75.35 846.98 85.32 848.52C88.57 849.09 92.02 849.28 95.28 849.48C243.23 852.54 388.87 841.61 534.33 830.69C679.79 841.61 825.43 852.54 973.38 849.48C976.63 849.28 980.08 849.09 983.34 848.52C993.31 846.98 1001.93 845.64 1009.98 844.11C1043.51 838.16 1067.67 808.66 1067.67 774.54L1067.67 743.11L1067.67 111.66L1067.67 76.01C1067.67 50.34 1053.86 27.15 1032.79 14.69ZM186.12 266.86L185.79 266.86L185.79 300.19L432.53 300.19L432.53 266.86L186.87 266.86L186.12 266.86ZM186.12 408.64L185.79 408.64L185.79 441.97L432.53 441.97L432.53 408.64L186.87 408.64L186.12 408.64ZM186.12 550.41L185.79 550.41L185.79 583.75L432.53 583.75L432.53 550.41L186.87 550.41L186.12 550.41ZM636.47 266.86L636.14 266.86L636.14 300.19L882.88 300.19L882.88 266.86L637.22 266.86L636.47 266.86ZM636.47 408.64L636.14 408.64L636.14 441.97L882.88 441.97L882.88 408.64L637.22 408.64L636.47 408.64ZM636.47 550.41L636.14 550.41L636.14 583.75L882.88 583.75L882.88 550.41L637.22 550.41L636.47 550.41ZM522.17 139.04L521.83 139.04L521.83 711.56L546.83 711.56L546.83 139.04L522.24 139.04L522.17 139.04Z" />
        </g>
      </svg>
      <p class="header-button-text">お役立ち情報を知る</p>
    </a>

    <a class="header-button login-button" href="">
      <svg class="header-button-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1934 2800" width="1934" height="2800">
        <style>
          tspan { white-space:pre }
        </style>
        <g class="svg-color-login">
          <path d="M1490.95 1551.16C1343.67 1658.59 1162.27 1722.04 966.03 1722.04C770.25 1722.04 589.25 1658.9 442.17 1551.93C240.15 1664.37 102.67 1880.21 102.67 2126.63L61 2689C61 2716.5 83.5 2739 111 2739L1823.5 2739C1851 2739 1873.5 2716.5 1873.5 2689L1831.83 2126.63C1831.83 1879.65 1693.73 1663.38 1490.95 1551.16ZM1564 658.62C1564 988.2 1296.83 1255.38 967.25 1255.38C637.67 1255.38 370.5 988.2 370.5 658.62C370.5 329.04 637.67 61.87 967.25 61.87C1296.83 61.87 1564 329.04 1564 658.62Z" />
        </g>
      </svg>
      <p class="header-button-text text-white">会員登録・ログイン</p>
    </a>

  </div>
</div>

<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
