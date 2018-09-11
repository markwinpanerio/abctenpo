<div class="status">
  <?php if( $link ): ?>
  <a href="<?php echo $link; ?>">
  <?php endif; ?>
    <span class="status-icontext">
      <span class="status-icon"><?php echo importTemplate($icon); ?></span>
      <span class="status-text"><?php echo $text; ?></span>
    </span>
  <?php if( $link ): ?>
  </a>
  <?php endif; ?>
</div>
