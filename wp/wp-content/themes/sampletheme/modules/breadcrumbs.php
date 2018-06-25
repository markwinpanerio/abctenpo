<?php
  $module = 'breadcrumbs';
  $array = array();

  if($modifier != '') {
    $array[0] = ' ' . $module .'-'. $modifier;
  }
?>

<div class="breadcrumbs<?php echo $array[0]; ?>">
  <div class="l-container breadcrumbs-container">
    <ul>
      <?php foreach($breadItems as $breadItem):
      echo
        '<li class="breadcrumbs-item">
          <a href="'.$breadItem['link'].'" class="breadcrumbs-link '.($breadItem['link'] === "" ? $breadItem['link-modifier'] : '').'">'.$breadItem['text'].'</a>
          <span class="breadcrumbs-arrow">&gt;</span></li>';
      endforeach; ?>
    </ul>
  </div>
</div>
