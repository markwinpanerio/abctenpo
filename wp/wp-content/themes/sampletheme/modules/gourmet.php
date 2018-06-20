<?php foreach ($gourmetItem as $gourmet): ?>
  <section class="gourmet-item">
    <div class="gourmet-image">
      <span class="gourmet-image-icon"><img src="<?php echo $gourmet['badgeUrl']?>" alt=""></span>
      <img src="<?php echo $gourmet['imgUrl']?>" alt="">
      <a class="gourmet-transition" href="<?php echo $gourmet['linkTransition']?>"><img src="<?php echo $gourmet['iconUrl']?>" alt=""></a>
    </div>
    <h3 class="gourmet-title"><?php echo $gourmet['title']?></h3>

    <?php echo ($gourmet['subtitle'])? '<span class="gourmet-subtitle">'. $gourmet['subtitle'].'</span>' : ''; ?>
    <?php echo ($gourmet['copy'])? '<p class="gourmet-copy">' . $gourmet['copy'].'</p>' : ''; ?>
    <?php echo ($gourmet['link'])? '<a class="gourmet-button" href="' . $gourmet['link'] .'">'. $gourmet['linkText'].'</a>' : ''; ?>

  </section>
<?php endforeach; ?>
