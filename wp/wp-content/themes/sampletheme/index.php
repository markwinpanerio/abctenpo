<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<main class="l-main">
  <div class="l-container l-container-main u-clear">
    <div class="l-container-content">
      <div class="map">
        <div class="map-button">
          <ul class="map-button-list">
            <li class="map-button-item">
              <a href="#js-map-part-1" class="map-button-link js-map-part-link">
                <span>横浜エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-2" class="map-button-link js-map-part-link">
                <span>川崎エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-3" class="map-button-link js-map-part-link">
                <span>湘南・鎌倉エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-4" class="map-button-link js-map-part-link">
                <span>横須賀エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-5" class="map-button-link js-map-part-link">
                <span>相模原エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-6" class="map-button-link js-map-part-link">
                <span>厚木・大和エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-7" class="map-button-link js-map-part-link">
                <span>伊勢原・平塚エリア</span>
              </a>
            </li>
            <li class="map-button-item">
              <a href="#js-map-part-8" class="map-button-link js-map-part-link">
                <span>湯河原・西湘エリア</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="map-box">
          <div class="map-box-image">
            <img class="map-box-base" src="<?php echo ITEM_URL; ?>assets/images/map.png" alt="">
            <img class="map-box-base map-box-base-back" src="<?php echo ITEM_URL; ?>assets/images/map-base.png" alt="">
            <img class="map-box-base map-box-base-lower" src="<?php echo ITEM_URL; ?>assets/images/map-lower.png" alt="">
          </div>
          <div class="map-parts">
            <div class="map-parts-img js-map-parts" id="js-map-part-1">
              <?php importTemplate('./svg/map-parts/1'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-2">
              <?php importTemplate('./svg/map-parts/2'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-3">
              <?php importTemplate('./svg/map-parts/3'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-4">
              <?php importTemplate('./svg/map-parts/4'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-5">
              <?php importTemplate('./svg/map-parts/5'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-6">
              <?php importTemplate('./svg/map-parts/6'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-7">
              <?php importTemplate('./svg/map-parts/7'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-8">
              <?php importTemplate('./svg/map-parts/8'); ?>
            </div>
            <div class="map-parts-img js-map-parts" id="js-map-part-9">
              <?php importTemplate('./svg/map-parts/9'); ?>
            </div>
          </div>
        </div>
      </div>
      <section class="listing">
        <ul class="listing-list">
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="https://image.ibb.co/dg9tFJ/listing_img.jpg" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="https://image.ibb.co/dg9tFJ/listing_img.jpg" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="https://image.ibb.co/dg9tFJ/listing_img.jpg" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
        </ul>
        <a href="#" class="listing-button">もっと見る</a>
      </section>
      <div class="virtual">
        <h2 class="virtual-title">3Dバーチャル内覧可能物件</h2>
      
        <div class="virtual-top">
          <div class="virtual-left virtual-top-item">
            <div class="virtual-left-inner">
              <img src="https://preview.ibb.co/ejFYFJ/virtual_left_img.jpg" alt="">
            </div>
          </div>
          <div class="virtual-right virtual-top-item">
            <h3 class="virtual-right-heading">3Dバーチャル内覧とは？</h3>
            <p class="virtual-right-copy">店舗の中を360°見渡せる、3Dバーチャル内覧です。<br>圧倒的な臨場感を味わえるように床やキッチンの質感<br>まで忠実に再現。<br>まるでその物件に居るような体験ができます。 </p>
          </div>
        </div>
      </div>
      <section class="listing">
        <ul class="listing-list">
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="https://image.ibb.co/dg9tFJ/listing_img.jpg" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="https://image.ibb.co/dg9tFJ/listing_img.jpg" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
          <li class="listing-item">
            <a href="#" class="listing-link">
              <article>
                <span class="listing-name">横浜</span>
                <span class="listing-favorite">お気に入り</span>
                <img src="https://image.ibb.co/dg9tFJ/listing_img.jpg" alt="" class="listing-image">
                <p class="listing-copy">1階路面、視認性よく看板範囲広め<br>木目調落ち着いた内装、和食業… <span class="listing-price">282,400円</span></p>
                <p class="listing-details">
                  JR中央・総武線 荻窪 2分 <br>1階 14坪 46.28㎡ <br>6月6日(水) 15：00-16：00 予約制内覧会実施
                </p>
              </article>
            </a>
          </li>
        </ul>
        <a href="#" class="listing-button">もっと見る</a>
      </section>
    </div>
    <div class="l-container-sidebar">
      <?php importPart('sidebar'); ?>
    </div>
  </div>
</main>
<?php importPart('footer'); ?>
<?php
get_sidebar();
get_footer();
