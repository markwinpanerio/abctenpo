<?php $module = 'property-recommendation'; ?>
<div class="property-recommendation<?php echo ($modifier !='' ? ' '.$module.'-'.$modifier : ''); ?>">
   <div class="property-listing-logo">
     <img src="<?php echo resolve_asset_uri('images/'.$image); ?>" alt="">
   </div>
   <div class="property-listing-recommended">
     <p class="property-listing-copy"><?php echo $copy; ?></p>
     <ul class="property-listing-list">
       <?php foreach ($recommends as $recommend) : ?>
         <li class="property-listing-item"><?php echo $recommend['recommend']; ?></li>
      <?php endforeach; ?>
     </ul>
   </div>
 </div>
