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
 </section>
</div>
