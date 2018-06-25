<?php

  $module = 'virtual';
  $array  = array();

  if($modifier != '') {
    $array[0] = ' ' .$module .'-'. $modifier;
    $array[1] = ' ' .$module .'-left-'. $modifier;
    $array[2] = ' ' .$module .'-left-inner-'. $modifier;
    $array[3] = ' ' .$module .'-iframe-'. $modifier;
    $array[4] = ' ' .$module .'-left-copy-'. $modifier;
    $array[5] = ' ' .$module .'-svg-'. $modifier;
    $array[6] = ' ' .$module .'-right-'. $modifier;
    $array[7] = ' ' .$module .'-right-heading-'. $modifier;
    $array[8] = ' ' .$module .'-right-copy-'. $modifier;
    $array[9] = ' ' .$module .'-button-icon-'. $modifier;
  }

  echo
  '<div class="virtual'.$array[0].'">
    <div class="virtual-left virtual-top-item'.$array[1].'">
      <div class="virtual-left-inner'.$array[2].'">
        <iframe src="'.$iframeUrl.'" class="virtual-iframe'.$array[3].'" allowfullscreen></iframe>
        <p class="virtual-left-copy'.$array[4].'">
            <img src="'.resolve_asset_uri('images/"'.$svgIcon).'" class="virtual-svg'.$array[5].'" alt="">
            '.$leftCopy.'</p>
      </div>
    </div>
    <div class="virtual-right virtual-top-item'.$array[6].'">
      <h3 class="virtual-right-heading'.$array[7].'">'.$heading.'</h3>
      <p class="virtual-right-copy'.$array[8].'">'.$rightCopy.'</p>'; ?>

    <?php if($buttonText != '') :
      echo '<a href="'.$buttonLink.'" target="'.$buttonTarget.'" class="virtual-button"><span class="virtual-button-icon'.$array[9].'"><img src="'.resolve_asset_uri('images/"'.$svgButtonIcon).'" alt=""></span>'.$buttonText.'</a>';
       endif;
      echo
      '</div>
    </div>';
?>
