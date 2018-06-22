<?php foreach ($gourmetItem as $gourmet): ?>
  <section class="gourmet-item">
    <div class="gourmet-image">
<<<<<<< HEAD
      <a class="js-open-button" data-target="#js-modal" href="javascript:;">

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
