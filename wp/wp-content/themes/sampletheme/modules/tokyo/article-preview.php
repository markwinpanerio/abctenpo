<?php if( $article_array ): ?>
  <div class="article-preview">
    <?php foreach( $article_array as $article_item ): ?>

      <div class="article-preview-group">
        <a href="<?php echo $article_item['link']; ?>" class="article-preview-group-link">
          <div class="article-preview-group-image article-preview-box">
            <img src="<?php echo IMAGE_URI.$article_item['image']; ?>" alt="">
          </div>
          <div class="article-preview-group-content article-preview-box">
            <p class="article-preview-group-copy"><?php echo $article_item['content']; ?></p>
          </div>
        </a>
      </div>

    <?php endforeach; ?>
  </div>
<?php endif; ?>
