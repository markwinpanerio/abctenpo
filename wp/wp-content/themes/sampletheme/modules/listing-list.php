<ul class="listing-list">
  <?php foreach ($listingItems as $listingItem): ?>
   <li class="listing-item">
      <a href="<?php echo $listingItem['link']; ?>" class="listing-link">
        <article>
          <span class="listing-name"><?php echo $listingItem['name']; ?></span>
          <span class="listing-favorite"><?php echo $listingItem['favorite']; ?></span>

          <img src="<?php if ($listingItem['image'] === '') {
            echo resolve_asset_uri('images/listing-noimage.jpg');
          } else {
            echo resolve_asset_uri('images/"'.$listingItem['image']);
          } ?>" alt="" class="listing-image">

          <div class="listing-inline"><p class="listing-copy"><?php echo $listingItem['copy']; ?></p></div>
          <span class="listing-price"><?php echo $listingItem['price']; ?></span>
          <p class="listing-details">
            <?php echo $listingItem['details']; ?>
          </p>
        </article>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
