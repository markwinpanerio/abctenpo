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
  <div class="common-header l-common-header l-container">
    <a class="logo" href="">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 321.574 70">
        <defs>
          <style>
            .cls-1 {
              fill: #292c2e;
              font-size: 21.973px;
              font-family: YuGo-Bold, YuGothic;
              font-weight: 700;
            }
          </style>
        </defs>
        <g id="head-logo" transform="translate(-284 -29)">
          <text id="居抜き物件ならABC店舗" class="cls-1" transform="translate(360.574 49.158)"><tspan x="0" y="0">居抜き物件ならABC店舗</tspan></text>
          <image id="abc-tenpo" width="244" height="40" transform="translate(360 59)" xlink:href="data:image/png;base64,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"/>
          <image id="abc-logo" width="60" height="62" transform="translate(284 29)" xlink:href="data:image/png;base64,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"/>
        </g>
      </svg>
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
      <div class="login-button-content">
        <svg class="header-button-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1934 2800" width="1934" height="2800">
          <style>
            tspan { white-space:pre }
          </style>
          <g class="svg-color-login">
            <path d="M1490.95 1551.16C1343.67 1658.59 1162.27 1722.04 966.03 1722.04C770.25 1722.04 589.25 1658.9 442.17 1551.93C240.15 1664.37 102.67 1880.21 102.67 2126.63L61 2689C61 2716.5 83.5 2739 111 2739L1823.5 2739C1851 2739 1873.5 2716.5 1873.5 2689L1831.83 2126.63C1831.83 1879.65 1693.73 1663.38 1490.95 1551.16ZM1564 658.62C1564 988.2 1296.83 1255.38 967.25 1255.38C637.67 1255.38 370.5 988.2 370.5 658.62C370.5 329.04 637.67 61.87 967.25 61.87C1296.83 61.87 1564 329.04 1564 658.62Z" />
          </g>
        </svg>
        <p class="header-button-text text-white">会員登録・ログイン</p>
      </div>
    </a>
  </div>
</div>

<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
