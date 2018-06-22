<div class="virtual<?php echo ($virtualModifier != '' ? ' '.$virtualModifier : ''); ?>">
  <div class="virtual-left virtual-top-item">
    <div class="virtual-left-inner<?php echo ($innerModifier != '' ? ' '.$innerModifier : ''); ?>">
      <iframe src="<?php echo $iframeUrl; ?>" class="<?php echo $iframeModifier; ?>" allowfullscreen></iframe>
    </div>
  </div>
  <div class="virtual-right virtual-top-item">
    <h3 class="virtual-right-heading"><?php echo $heading; ?></h3>
    <p class="virtual-right-copy"><?php echo $copy; ?></p>
  </div>
</div>
