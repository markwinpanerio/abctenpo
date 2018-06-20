<?php
 foreach ($items as $item): ?>
 <li class="listing-item">
    <a href="#" class="listing-link">
      <article>
        <span class="listing-name"><?php echo $item['listing-name']; ?></span>
        <span class="listing-favorite"><?php echo $item['listing-favorite']; ?></span>
        <img src="<?php echo $item['listing-image']; ?>" alt="" class="listing-image">
      </article>
    </a>
  </li>
<?php endforeach; ?>
