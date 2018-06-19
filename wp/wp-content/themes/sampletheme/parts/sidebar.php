<aside class="sidebar">
 <section class="sidebar-box">
  <h2 class="sidebar-heading">条件から探す</h2>

  <?php
    $sidebarListTop = array(
      'sidebarLinkList' => array(
        'sidebarList1' => array(
          'title' => '新着物件から探す',
          'link' => '#',
          'modifier' => '',
        ),
        'sidebarList2' => array(
          'title' => '会員限定物件から探す',
          'link' => '#',
          'modifier' => '',
        ),
        'sidebarList3' => array(
          'title' => '造作無償から探す',
          'link' => '#',
          'modifier' => '',
        ),
        'sidebarList4' => array(
          'title' => '内覧会から探す',
          'link' => '#',
          'modifier' => '',
        ),
        'sidebarList5' => array(
          'title' => '内覧会から探す',
          'link' => '#',
          'modifier' => '',
        ),
        'sidebarList6' => array(
          'title' => '内覧会から探す',
          'link' => '#',
          'modifier' => '',   
        ),
      )
    )
    ?>


  <?php importTemplate('modules/sidebar-link',$sidebarListTop);?>
 </section>

  <section class="sidebar-box">
  <h2 class="sidebar-heading">条件から探す</h2>

<?php

$sidebarListBottom = array(
  'sidebarLinkList' => array(
    'sidebarList1' => array(
      'title' => 'ラーメン',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList2' => array(
      'title' => '韓国料理',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList3' => array(
      'title' => 'カレー',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList4' => array(
      'title' => 'クラブ・スナック',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList5' => array(
      'title' => '居酒屋',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList6' => array(
      'title' => '焼き肉',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList7' => array(
      'title' => '多国籍',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList8' => array(
      'title' => 'ダイニングバー',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList9' => array(
      'title' => 'イタリアン・フレンチ',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList10' => array(
      'title' => 'うどん・そば',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList11' => array(
      'title' => 'BAR',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList12' => array(
      'title' => '中華',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList13' => array(
      'title' => '和食',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList14' => array(
      'title' => 'カフェ',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList15' => array(
      'title' => 'デリバリー',
      'link' => '#',
      'modifier' => '',
    ),
    'sidebarList16' => array(
      'title' => '洋食・レストラン',
      'link' => '#',
      'modifier' => '',
    ),
  )
)
?>

  <?php importTemplate('modules/sidebar-link',$sidebarListBottom);?>

 </section>
</aside>
