<?php foreach ($gourmetItem as $gourmet): ?>
  <section class="gourmet-item">
    <div class="gourmet-image">
      <a class="gourmet-link" href="#">
        <span class="gourmet-image-icon"><img src="<?php echo $gourmet['badgeUrl']?>" alt=""></span>
        <?php echo ($gourmet['imgUrl'])? '<img src="'. $gourmet['imgUrl'] .'" alt="">' : '<img src="'. resolve_asset_uri('images/listing-noimage.jpg').'" alt="">'; ?>
        <span class="gourmet-transition '. <?php echo $gourmet['iconModifier'] ?> .'"> <?php importTemplate('./svg/icon-blank'); ?> </span>
      </a>
    </div>
    <h3 class="gourmet-title"><?php echo $gourmet['title']?></h3>

    <?php echo ($gourmet['subtitle'])? '<span class="gourmet-subtitle">'. $gourmet['subtitle'].'</span>' : ''; ?>
    <?php echo ($gourmet['copy'])? '<p class="gourmet-copy">' . $gourmet['copy'].'</p>' : ''; ?>
    <?php echo ($gourmet['link'])? '<a class="gourmet-button" href="' . $gourmet['link'] .'">'. $gourmet['linkText'].'</a>' : ''; ?>

  </section>
<?php endforeach; ?>
