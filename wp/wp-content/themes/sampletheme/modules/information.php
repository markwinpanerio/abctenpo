<?php
  $module = 'information';
  $array = array();

  if($modifier != '') {
    $array[0] = ' ' . $module .'-'. $modifier;
    $array[1] = ' ' . $module .'-container-'. $modifier;
    $array[2] = ' ' . $module .'-article-'. $modifier;
    $array[3] = ' ' . $module .'-left-'. $modifier;
    $array[4] = ' ' . $module .'-right-'. $modifier;
    $array[5] = ' ' . $module .'-right-top-'. $modifier;
    $array[6] = ' ' . $module .'-heading-'. $modifier;
    $array[7] = ' ' . $module .'-copy-'. $modifier;
  }

echo
'<section class="information'.$array[0].'">
  <div class="l-container information-container'.$array[1].'">
    <article class="information-article'.$array[2].'">
      <div class="information-left information-image'.$array[3].'">
        <img src="'.resolve_asset_uri('images/'.$image).'" alt="">
      </div>
      <div class="information-right'.$array[4].'">
        <div class="information-right-top'.$array[5].'">
          <span class="information-row information-caption">'.$caption.'</span>
          <span class="information-row information-date"><time datetime="'.$time.'">'.$time.'</time></span>
          <span class="information-row information-red">'.$status.'</span>
        </div>
        <h2 class="information-heading'.$array[6].'">'.$heading.'</h2>
        <p class="information-copy'.$array[7].'">'.$copy.'</p>
      </div>
    </article>
  </div>
</section>';
?>
