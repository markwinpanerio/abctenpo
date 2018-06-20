<?php foreach ($gourmetItem as $gourmet): ?>
<section class="gourmet-item">
<div class="gourmet-image">
<img src="<?php echo $gourmet['url']?>" alt="">
<a class="gourmet-transition" href="<?php echo $gourmet['linkTransition']?>"><img src="<?php echo resolve_asset_uri('images/svg/icon-transition.svg'); ?>" alt=""></a>
</div>
<h3 class="gourmet-title"><?php echo $gourmet['title']?></h3>
<span class="gourmet-subtitle"><?php echo $gourmet['subtitle']?></span>
<p class="gourmet-copy"><?php echo $gourmet['copy']?></p>
<a class="gourmet-button" href="<?php echo $gourmet['link']?>"><?php echo $gourmet['linkText']?></a>


</section>
<?php endforeach; ?>
