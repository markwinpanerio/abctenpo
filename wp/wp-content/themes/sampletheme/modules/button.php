<?php foreach ($buttons as $button): ?>

    <?php if (isset($button['buttonLink']) && isset($button['buttonText'])):?>
      <a class="button button-gray button-caret" href="<?php echo $button['buttonLink'] ?>"> <span><?php echo $button['buttonText'] ?></span> </a>
    <?php endif; ?>

<?php endforeach; ?>
