<div class="virtual<?php echo ($virtualModifier != '' ? ' '.$virtualModifier : ''); ?>">
  <div class="virtual-left virtual-top-item<?php echo ($virtualTopItemFirstModifier != '' ? ' '.$virtualTopItemFirstModifier : ''); ?>">
    <div class="virtual-left-inner<?php echo ($innerModifier != '' ? ' '.$innerModifier : ''); ?>">
      <iframe src="<?php echo $iframeUrl; ?>" class="virtual-iframe<?php echo ($iframeModifier != '' ? ' '.$iframeModifier : ''); ?>" allowfullscreen></iframe>
      <p class="virtual-left-copy<?php echo ($virtualLeftCopyModifier != '' ? ' '.$virtualLeftCopyModifier : ''); ?>">
        <?php foreach ($svgIcons as $svgIcon): ?>
          <img src="<?php echo resolve_asset_uri('images/"'.$svgIcon['svg-icon']); ?>" class="virtual-svg<?php echo ($svgIcon['svg-modifier'] != '' ? ' '.$svgIcon['svg-modifier'] : ''); ?>" alt="">
         <?php endforeach; ?>
        <?php echo $leftCopy; ?></p>
    </div>
  </div>
  <div class="virtual-right virtual-top-item<?php echo ($virtualTopItemSecondModifier != '' ? ' '.$virtualTopItemSecondModifier : ''); ?>">
    <h3 class="virtual-right-heading<?php echo ($rightHeadingModifier != '' ? ' '.$rightHeadingModifier : ''); ?>"><?php echo $heading; ?></h3>
    <p class="virtual-right-copy<?php echo ($rightCopyModifier != '' ? ' '.$rightCopyModifier : ''); ?>"><?php echo $rightCopy; ?></p>
    <?php if($virtualButtonTarget != '') : ?>
      <a href="<?php echo $virtualButtonLink; ?>" target="<?php echo $virtualButtonTarget; ?>" class="virtual-button"><?php echo $virtualButtonText; ?></a>
    <?php endif; ?>
  </div>
</div>
