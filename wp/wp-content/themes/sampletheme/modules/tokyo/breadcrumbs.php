<div class="breadcrumbs">
  <ol class="breadcrumbs-list">
    <?php
      if( $breadcrumbs_array ):
        foreach( $breadcrumbs_array as $breadcrumbs_item ): ?>
          <li class="breadcrumbs-list-item">
            <?php if( !isset( $breadcrumbs_item['modifier'] ) ): ?>
                  <a class="breadcrumbs-link" href="<?php echo $breadcrumbs_item['link']; ?>"><?php echo $breadcrumbs_item['text']; ?></a>
            <?php else: ?>
                  <span class="breadcrumbs-link is-current">飲食店開業ドキュメンタリー</span>
            <?php endif; ?>
          </li>
    <?php
        endforeach;
      endif;
    ?>
  </ol>
</div>
