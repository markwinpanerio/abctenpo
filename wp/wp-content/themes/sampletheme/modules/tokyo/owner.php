<?php if( $owner_array ):
        foreach( $owner_array as $owner_item ): ?>
        <div class="owner">
          <div class="owner-inner">
            <div class="owner-top">
              <div class="owner-image owner-top-box"><img src="<?php echo IMAGE_URI.$owner_item['image']; ?>" alt="owner image"></div>
              <div class="owner-namebutton owner-top-box">
                <span class="owner-name"><?php echo $owner_item['name']; ?></span>
                <div class="owner-links">
                  <?php foreach( $owner_item['links'] as $link ) {
                          importTemplate( 'modules/tokyo/links-icon', array('link' => $link) );
                        } ?>
                </div>
              </div>
              <div class="owner-status">
                <?php importTemplate( 'modules/tokyo/button-status', array(
                                      'icon' => $owner_item['status_button']['status_icon'],
                                      'text' => $owner_item['status_button']['status_text'] ) ); ?>
              </div>
            </div>
            <div class="owner-bottom">
              <div class="owner-details">
                <?php if( $owner_item['details_list'] ): ?>
                <ul class="owner-details-list">
                  <?php foreach( $owner_item['details_list'] as $details_item ): ?>
                    <li class="owner-details-list-item">
                      <span class="owner-details-label"><?php echo $details_item['label']; ?></span>
                      <span class="owner-details-text"><?php echo $details_item['text']; ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
<?php   endforeach;
      endif; ?>
