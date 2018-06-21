<ul class="listing-list">
  <?php foreach ($listingItems as $listingItem):
   echo
     '<li class="listing-item">
        <a href="'.$listingItem['link'].'" class="listing-link">
          <article>
            <span class="listing-name">'.$listingItem['name'].'</span>
            <span class="listing-favorite">'.$listingItem['favorite'].'</span>

            <img src="'.if ($listingItem['image'] === '') {
                resolve_asset_uri('images/listing-noimage.jpg');
            } else {
                resolve_asset_uri('images/"'.$listingItem['image']);
            }.'" alt="" class="listing-image">

            <div class="listing-inline"><p class="listing-copy">'.$listingItem['copy'].'</p></div>
            <span class="listing-price">'.$listingItem['price'].'</span>
            <p class="listing-details">'.$listingItem['details'].'</p>
          </article>
        </a>
      </li>';
  endforeach; ?>
</ul>
