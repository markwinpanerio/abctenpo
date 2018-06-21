<?php foreach ($messageItems as $messageItem):
  echo
  '<div class="message">
    <div class="message-inner">
      <div class="message-center">
        <p class="message-copy">'.$messageItem["copy"].'</p>
        <a href="'.$messageItem["big-link"].'" class="message-big-link">'.$messageItem["big-link-text"].'</a>
        <a href="'.$messageItem["small-link"].'" class="message-small-link">'.$messageItem["small-link-text"].'</a>
      </div>
    </div>
  </div>';
endforeach; ?>
