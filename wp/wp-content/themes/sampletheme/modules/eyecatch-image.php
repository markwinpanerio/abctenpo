<div class="eyecatch-image">
  <?php if(!isset($images)): ?>
    <div class="eyecatch-image-no-image">
      <img src="<?php echo ITEM_URL?>assets/images/no-eyecatch-image.png" alt="">
    </div>
  <?php else: ?>
    <?php foreach ($images as $image): ?>
    <?php endforeach; ?>

    <div class="eyecatch-image-container">
      <div class="eyecatch-image-main" style="background-image: url(<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-1.jpg)"></div>
      <div class="eyecatch-image-nav">
        <div class="eyecatch-image-inner">
          <ul class="eyecatch-image-list row">
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-1.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-2.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-3.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-4.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-5.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-6.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-7.jpg" alt="">
              </div>
            </li>
            <li class="eyecatch-image-item col-lg-4">
              <div class="eyecatch-image-nav-image">
                <img src="<?php echo ITEM_URL?>assets/images/slide-image/dummy-image-8.jpg" alt="">
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>