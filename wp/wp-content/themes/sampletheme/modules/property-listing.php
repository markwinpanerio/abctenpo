<?php

  $module = 'property-listing';

?>
<div class="property-listing l-container">

 <h2 class="property-listing-title heading-section">横浜エリアの居抜き物件一覧</h2>
 <section class="property-listing-section">

  <?php foreach ($items as $item) : ?>
   <article class="property-listing-article">
     <h3 class="property-listing-heading"><?php echo $item['heading']; ?></h3>
     <div class="property-listing-info u-clear">
       <div class="property-listing-image">
         <div class="property-listing-image-wrap">
           <img class="property-listing-image-inner" src="<?php echo resolve_asset_uri('images/'.$item['image']); ?>" alt="">
         </div>
         <div class="property-listing-image-badge">
           <span class="property-listing-image-icon"><?php importTemplate('./svg/star-noactive'); ?></span>
         </div>
       </div>
       <div class="property-listing-detail">
         <table class="property-listing-detail-table">
           <?php foreach ($item['details'] as $detail) : ?>
             <tr class="property-listing-detail-row">
               <?php foreach ($detail['columns'] as $column) :
                 if($column['column-modifier'] !='') {
                   $cmodifier = ' ' .$module.'-'.$column['column-modifier'];
                 }
               ?>
                <td class="property-listing-detail-column<?php echo $cmodifier; ?>"><?php echo $column['column']; ?></td>
              <?php endforeach; ?>
             </tr>
           <?php endforeach; ?>
         </table>

         <div class="property-listing-tag">
           <?php foreach ($item['tags'] as $tag) : ?>
             <span><?php echo $tag['tag']; ?></span>
           <?php endforeach; ?>
         </div>
       </div>
     </div>
     <?php importTemplate('modules/property-figures', array(
       'figures' => array(
         array(
           'columns' => array(
             array('column' => '階層', 'column-modifier' => ''),
             array('column' => '1階', 'column-modifier' => '')
           )
         ),
         array(
           'columns' => array(
             array('column' => '賃料', 'column-modifier' => ''),
             array('column' => '<span class="property-listing-figures-amount">45.6</span>万円', 'column-modifier' => '')
           )
         ),
         array(
           'columns' => array(
             array('column' => '総額', 'column-modifier' => ''),
             array('column' => '542.2万円', 'column-modifier' => '')
           )
         ),
         array(
           'columns' => array(
             array('column' => '面積', 'column-modifier' => ''),
             array('column' => '17.81坪58.87㎡', 'column-modifier' => '')
           )
         ),
         array(
           'columns' => array(
             array('column' => '詳細', 'column-modifier' => ''),
             array('column' => '詳細をみる', 'column-modifier' => 'column-blue')
           )
         )
       )
     )); ?>

     <?php importTemplate('modules/property-recommendation', array(
       'modifier' => 'none',
       'image' => 'property-listing-logo.png',
       'listing' => 'ABC店舗からのおすすめポイントを紹介します！',
       'recommends' => array(
         array('recommend' => '新築物件を建設中！小伝馬町駅から駅徒歩６分！'),
         array('recommend' => 'オフィス街でランチの需要が高いエリアです！テキストがはいります...'),
         array('recommend' => '最終募集！残り時間わずか！！テキストがはいります。')
       )
     )); ?>
   </article>
 <?php endforeach; ?>






















   <article class="property-listing-article">
     <h3 class="property-listing-heading">餃子や焼肉、グルメばかりの地図「幡ヶ谷」は住みやすさから渋<br>谷区で人気！</h3>
     <div class="property-listing-info">
       <div class="property-listing-image">
         <img src="<?php echo resolve_asset_uri('images/property-listing-img.jpg'); ?>" alt="">
       </div>
       <div class="property-listing-detail">
         <table class="property-listing-detail-table">
           <tr class="property-listing-detail-row">
             <td class="property-listing-detail-column">アクセス</td>
             <td class="property-listing-detail-column">都営大江戸線 渋谷駅 徒歩2分 東京メトロ丸の内線 青山駅 徒歩2分</td>
           </tr>
           <tr class="property-listing-detail-row">
             <td class="property-listing-detail-column">業態</td>
             <td class="property-listing-detail-column">居酒屋,和食,ダイニングバー</td>
           </tr>
         </table>

         <div class="property-listing-tag">
           <span>居抜き</span>
           <span>造作無償</span>
           <span>内覧会</span>
           <span>3Dバーチャル内覧</span>
         </div>
       </div>
     </div>
     <div class="property-listing-figures">
       <table class="property-listing-figures-table">
         <tr class="property-listing-figures-row">
           <td class="property-listing-figures-column">階層</td>
           <td class="property-listing-figures-column">賃料</td>
           <td class="property-listing-figures-column">総額</td>
           <td class="property-listing-figures-column">面積</td>
           <td class="property-listing-figures-column">詳細</td>
         </tr>
         <tr class="property-listing-figures-row">
           <td class="property-listing-figures-column">1階</td>
           <td class="property-listing-figures-column">45.6万円</td>
           <td class="property-listing-figures-column">542.2万円</td>
           <td class="property-listing-figures-column">17.81坪58.87㎡</td>
           <td class="property-listing-figures-column">詳細をみる</td>
         </tr>
       </table>
     </div>

   </article>



 </section>
</div>
