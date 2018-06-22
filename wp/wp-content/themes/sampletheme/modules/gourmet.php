<?php foreach ($gourmetItem as $gourmet): ?>
  <?php 
    if (isset($gourmet['data-lat'])) {
      $data_lat = $gourmet['data-lat'];
    } else {
      $data_lat = '';
    }

    if (isset($gourmet['data-lng'])) {
      $data_lng = $gourmet['data-lng'];
    } else {
      $data_lng = '';
    }

    if (isset($gourmet['imgUrl'])) {
      $imgUrl = $gourmet['imgUrl'];
    } else {
      $imgUrl = resolve_asset_uri('images/listing-noimage.jpg');
    }

    if (isset($gourmet['data-img-main'])) {
      $imgMain = $gourmet['data-img-main'];
    } else {
      $imgMain = resolve_asset_uri('images/listing-noimage.jpg');
    }

    if (isset($gourmet['js-hook'])) {
      $mapHookItem = $gourmet['js-hook'];
    } else {
      $mapHookItem = '';
    }

    if (isset($gourmet['data-title'])) {
      $title = $gourmet['data-title'];
    } else {
      $title = '';
    }

    if (isset($gourmet['data-desc'])) {
      $desc = $gourmet['data-desc'];
    } else {
      $desc = '';
    }

    if (isset($gourmet['data-map-icon'])) {
      $mapIcon = $gourmet['data-map-icon'];
    } else {
      $mapIcon = '';
    }

    if (isset($gourmet['data-map-icon-active-state'])) {
      $mapIconActiveState = $gourmet['data-map-icon-active-state'];
    } else {
      $mapIconActiveState = '';
    }

  ?>
  <section class="gourmet-item <?php echo $mapHookItem; ?>" 
    data-lat="<?php echo $data_lat; ?>" 
    data-lng="<?php echo $data_lng; ?>" 
    data-img="<?php echo $imgUrl; ?>" 
    data-img-main="<?php echo $imgMain; ?>" 
    data-title="<?php echo $title; ?>" 
    data-desc="<?php echo $desc; ?>" 
    data-map-icon="<?php echo $mapIcon; ?>"
    data-map-icon="<?php echo $mapIconActiveState; ?>">
    <div class="gourmet-image">
      <a class="gourmet-link" href="#">

        <?php if (isset($gourmet['badgeUrl'])):?>
          <span class="gourmet-image-icon"><img src="<?php echo $gourmet['badgeUrl']?>" alt=""></span>
        <?php endif; ?>

        <?php if (isset($gourmet['imgUrl'])):?>
          <img src="<?php echo $gourmet['imgUrl'] ?>" alt="">
        <?php else: ?>
          <img src="<?php echo resolve_asset_uri('images/listing-noimage.jpg') ?>" alt="">
        <?php endif; ?>

        <?php if (isset($gourmet['iconModifier'])):?>
          <span class="gourmet-transition <?php echo $gourmet['iconModifier'] ?>"> <?php importTemplate('./svg/icon-blank'); ?></span>
        <?php endif; ?>

      </a>
    </div>
    <h3 class="gourmet-title"><?php echo $gourmet['title']?></h3>

    <?php if (isset($gourmet['subtitle'])):?>
      <span class="gourmet-subtitle"> <?php echo $gourmet['subtitle']; ?></span>
    <?php endif; ?>

    <?php if (isset($gourmet['copy'])):?>
      <p class="gourmet-copy"><?php echo $gourmet['copy']; ?></p>
    <?php endif; ?>

    <?php if (isset($gourmet['link']) && isset($gourmet['linkText'])):?>
      <a class="gourmet-button" href="<?php echo $gourmet['link'] ?>"><?php echo $gourmet['linkText'] ?></a>
    <?php endif; ?>


  </section>
<?php endforeach; ?>
