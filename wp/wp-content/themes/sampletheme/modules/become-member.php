<?php
  $module = 'become-member';
  $array = array();

  if($modifier != '') {
    $array[0] = ' ' . $module .'-'. $modifier;
  }
?>

<div class="become-member<?php echo $array[0]; ?>">
  <?php
    foreach ($becomeMembers as $becomeMember): {
    echo
      '<div class="become-member-image"><img src="'.resolve_asset_uri('images/"'.$becomeMember['image']).'" alt="'.$becomeMember['alt'].'"></div>';
    }
    endforeach;
    echo
      '<div class="become-member-button">
        <a href="'.$becomeMemberButtonLink.'"><img src="'.resolve_asset_uri('images/"'.$becomeMemberButtonImage).'" alt="'.$becomeMemberImageAlt.'"></a>
      </div>';
  ?>
</div>
