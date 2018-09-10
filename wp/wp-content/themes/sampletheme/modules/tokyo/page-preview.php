<?php
   if( $preview_array ):
    foreach( $preview_array as $preview_item ): ?>
    <div class="page-preview-group">
      <a href="#" class="page-preview-link">
        <div class="page-preview-image page-preview-box"><img src="<?php echo IMAGE_URI.$preview_item['image']; ?>" alt=""></div>
        <div class="page-preview-contents page-preview-box">
          <?php
            importTemplate( 'modules/links-icon', array('link' => $preview_item['links']['text'], 'icon_modifier' => $preview_item['links']['icon_modifier'], 'text_modifier' => $preview_item['links']['text_modifier']) ); ?>
          <p class="page-preview-copy"><?php echo $preview_item['content']; ?></p>
        </div>
      </a>
    </div>
<?php
    endforeach;
   endif; ?>

