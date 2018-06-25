<div class="become-member<?php echo $modifier != '' ? ' '.$modifier : ''; ?>">
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
