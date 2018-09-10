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

  <!-- new modules -->
  <div class="l-container">
    <div class="tokyo">
      <div class="module">
         <div class="module-wrap">
           <?php
            $owner_array = array(
                            array(
                              'image'         => 'tokyo/owner/owner-img1.png',
                              'name'          => 'シェフXさん',
                              'links'         => array('一話をみる'),
                              'status_button' => array(
                                                    'status_icon' => './svg/tokyo/step1-icon',
                                                    'status_text' => '物件探し中'
                                                 ),
                              'details_list'  => array(
                                                  array(
                                                    'label' => '開業予定',
                                                    'text'  => 'できるだけ早く'
                                                  ),
                                                  array(
                                                    'label' => '業態',
                                                    'text'  => 'フレンチとイタリアンベースに和を用いた全て自
                                                                家製創作料理のモダンお任せコースの店'
                                                  ),
                                                  array(
                                                    'label' => 'エリア',
                                                    'text'  => '西麻布'
                                                  ),
                                                  array(
                                                    'label' => 'コメント',
                                                    'text'  => '目標は、「お客様の好みのワインを見つけるお手伝いが出来るお店を作りたい‼」です。'
                                                  )
                                                 )
                            ),
                            array(
                              'image'         => 'tokyo/owner/owner-img2.png',
                              'name'          => '宮崎 龍太さん',
                              'links'         => array('一話をみる', '最新話をみる'),
                              'status_button' => array(
                                                    'status_icon' => './svg/tokyo/step5-icon',
                                                    'status_text' => '運用中'
                                                 ),
                              'details_list'  => array(
                                                  array(
                                                    'label' => '開業予定',
                                                    'text'  => '良い物件に出会えればすぐに'
                                                  ),
                                                  array(
                                                    'label' => '業態',
                                                    'text'  => 'スペインバル'
                                                  ),
                                                  array(
                                                    'label' => 'エリア',
                                                    'text'  => '蒲田駅－川崎－横浜'
                                                  ),
                                                  array(
                                                    'label' => 'コメント',
                                                    'text'  => '「自分のつくりたいものをつくりたい！」と思い独立を決意し、2017年8月から本格的に物件探しを'
                                                  )
                                                 )
                            )
                           );
            importTemplate('modules/owner', array('owner_array' => $owner_array)); ?>
         </div>
       </div>

       <?php importTemplate('modules/tokyo/more-button', array('link' => '#', 'text' => '開業者をもっとみる')); ?>
       <?php importTemplate('modules/tokyo/section-description', array('description' => '人周辺施設、商店街や通勤・通学など人の流れ同エリア内で飲食需要を見出すための他の飲食店、 オフィス街や住宅街といったエリア固有の特性など、「街の情報」をご紹介いたします。')); ?>

       <!-- page-preview -->
       <div class="page-preview">
        <div class="page-preview-inner">
          <?php
           $preview_array = array(
                             array(
                               'image'   => 'tokyo/preview-img1.jpg',
                               'content' => '居抜き開業を成功させたオーナーに、成功の秘訣や開店までの裏話などを伺います。',
                               'links'   => array(
                                              'text'          => '開業者インタビュー',
                                              'icon_modifier' => 'links-icon-preview',
                                              'text_modifier' => 'links-text-preview'
                                            )
                             ),
                             array (
                               'image'   => 'tokyo/preview-img1.jpg',
                               'content' => '居抜き開業を成功させたオーナーに、成功の秘訣や開店までの裏話などを伺います。',
                               'links'   => array(
                                              'text'          => '開業者インタビュー',
                                              'icon_modifier' => 'links-icon-preview',
                                              'text_modifier' => 'links-text-preview'
                                            )
                             ),
                             array (
                               'image'   => 'tokyo/preview-img1.jpg',
                               'content' => '居抜き開業を成功させたオーナーに、成功の秘訣や開店までの裏話などを伺います。',
                               'links'   => array(
                                              'text'          => '開業者インタビュー',
                                              'icon_modifier' => 'links-icon-preview',
                                              'text_modifier' => 'links-text-preview'
                                            )
                             )
                            );

           importTemplate('modules/tokyo/page-preview', array( 'preview_array' => $preview_array ) ); ?>
        </div>
      </div>
      <!-- page-preview -->

    </div>
  </div>
  <!-- end new modules -->

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




<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
