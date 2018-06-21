<div class="eyecatch-image">
  <?php if(!isset($images)): ?>
    <div class="eyecatch-image-no-image">
      <img src="<?php echo ITEM_URL?>assets/images/no-eyecatch-image.png" alt="">
    </div>
  <?php else: ?>
    <?php foreach ($images as $image): ?>
    <?php endforeach; ?>

    <div class="eyecatch-image-container">
      <div class="eyecatch-image-main">
        <ul class="eyecatch-image-main-list" id="js-slider-main">
          <?php foreach ($images as $image): ?>
            <li class="eyecatch-image-main-item">
              <img src="<?php echo $image['img'] ?>" alt="">
            </li>
          <?php endforeach; ?>
        </ul>
        <button class="eyecatch-image-button eyecatch-image-button-prev" id="js-slider-prev"></button>
        <button class="eyecatch-image-button eyecatch-image-button-next" id="js-slider-next"></button>
      </div>
      <div class="eyecatch-image-nav">
        <div class="eyecatch-image-inner">
          <ul class="eyecatch-image-list" id="js-slider-nav">
            <?php 
              $index = 0;
              foreach ($images as $image): 

                if ($index == 0) {
                  $state = 'is-active';
                } else {
                  $state = '';
                }
            ?>
              <li class="eyecatch-image-item <?php echo $state; ?>">
                <div class="eyecatch-image-nav-image">
                  <img src="<?php echo $image['img']; ?>" alt="">
                </div>
              </li>
            <?php $index++; endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>