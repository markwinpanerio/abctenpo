<div class="breadcrumbs">
  <ul>
    <?php foreach($breadItems as $breadItem):
    echo
      '<li>
        <a href="'.$breadItem['link'].'">'.$breadItem['text'].'</a>
      </li>';
    endforeach; ?>
  </ul>
</div>
