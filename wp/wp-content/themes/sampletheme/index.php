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
                              'links'         => array(
                                                  array(
                                                    'text' => '一話をみる',
                                                    'link' => '#',
                                                  ),
                                                 ),
                              'status_button' => array(
                                                    'status_icon' => './svg/tokyo/step1-icon',
                                                    'status_text' => '物件探し中',
                                                    'status_link' => '#'
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
                              'links'         => array(
                                                  array(
                                                    'text' => '一話をみる',
                                                    'link' => '#'
                                                  ),
                                                  array(
                                                    'text' => '最新話をみる',
                                                    'link' => '#'
                                                  ),
                                                 ),
                              'status_button' => array(
                                                    'status_icon' => './svg/tokyo/step5-icon',
                                                    'status_text' => '運用中',
                                                    'status_link' => '#'
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
            importTemplate('modules/tokyo/owner', array('owner_array' => $owner_array)); ?>
         </div>
       </div>

       <?php importTemplate('modules/tokyo/button', array('link' => '#', 'text' => '開業者をもっとみる')); ?>
       <?php importTemplate('modules/tokyo/section-description', array('description' => '人周辺施設、商店街や通勤・通学など人の流れ同エリア内で飲食需要を見出すための他の飲食店、 オフィス街や住宅街といったエリア固有の特性など、「街の情報」をご紹介いたします。')); ?>

       <!-- page-preview -->
       <div class="page-preview">
        <div class="page-preview-inner">
          <?php
           $preview_array = array(
                             array(
                               'image'        => 'tokyo/preview-img1.jpg',
                               'content'      => '居抜き開業を成功させたオーナーに、成功の秘訣や開店までの裏話などを伺います。',
                               'preview_link' => '#',
                               'links'        => array(
                                                'text'          => '開業者インタビュー',
                                                'icon_modifier' => 'links-icon-preview',
                                                'text_modifier' => 'links-text-preview'
                                              )
                             ),
                             array (
                               'image'        => 'tokyo/preview-img1.jpg',
                               'content'      => '居抜き開業を成功させたオーナーに、成功の秘訣や開店までの裏話などを伺います。',
                               'preview_link' => '#',
                               'links'        => array(
                                                'text'          => '開業者インタビュー',
                                                'icon_modifier' => 'links-icon-preview',
                                                'text_modifier' => 'links-text-preview'
                                              )
                             ),
                             array (
                               'image'        => 'tokyo/preview-img1.jpg',
                               'content'      => '居抜き開業を成功させたオーナーに、成功の秘訣や開店までの裏話などを伺います。',
                               'preview_link' => '#',
                               'links'        => array(
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
      <?php
        $article_array = array(
                          array(
                            'image'   => 'tokyo/article-img.jpg',
                            'content' => '有楽町（千代田区）で居抜きで飲食店を開業するための街情報',
                            'link'    => '#'
                          ),
                          array(
                            'image'   => 'tokyo/article-img.jpg',
                            'content' => '有楽町（千代田区）で居抜きで飲食店を開業するための街情報',
                            'link'    => '#'
                          )
                         );
        importTemplate('modules/tokyo/article-preview', array( 'article_array' => $article_array ) );

        $breadcrumbs_array = array(
                              array(
                                'text'     => 'トップページ',
                                'link'     => '#'
                              ),
                              array(
                                'text'     => '飲食店開業ドキュメンタリー',
                                'link'     => '#'
                              ),
                              array(
                                'text'     => '飲食店開業ドキュメンタリー',
                                'link'     => '#',
                                'modifier' => 'is-current'
                              )
                             );

        importTemplate('modules/tokyo/breadcrumbs', array( 'breadcrumbs_array' => $breadcrumbs_array ) ); ?>
    </div>
  </div>
  <!-- end new modules -->
  </div>



</main>
<?php
get_sidebar();
get_footer();
