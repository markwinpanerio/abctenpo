<?php
  $mainModule = 'message';
  $modifier = array();
?>
<?php foreach ($messageItems as $messageItem):
  $modifierModuler = $messageItem['modifier'];
  if($messageItem['modifier']){
    $modifier[0] = $mainModule .'-'. $modifierModuler;
    $modifier[1] = $mainModule .'-inner-'. $modifierModuler;
    $modifier[2] = $mainModule .'-center-'. $modifierModuler;
    $modifier[3] = $mainModule .'-copy-'. $modifierModuler;
    $modifier[4] = $mainModule .'-big-link-'. $modifierModuler;
    $modifier[5] = $mainModule .'-small-link-'. $modifierModuler;
  }
  echo
  '<div class="message '.$modifier[0].'">
    <div class="message-inner '.$modifier[1].'">
      <div class="message-center '.$modifier[2].'">
        <p class="message-copy '.$modifier[3].'">'.$messageItem["copy"].'</p>
        <a href="'.$messageItem["big-link"].'" class="message-big-link '.$modifier[4].'">'.$messageItem["big-link-text"].'</a>
        <a href="'.$messageItem["small-link"].'" class="message-small-link '.$modifier[5].'">'.$messageItem["small-link-text"].'</a>
      </div>
    </div>
  </div>';
endforeach; ?>
