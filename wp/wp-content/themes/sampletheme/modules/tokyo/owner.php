<?php if( $owner_array ):
        foreach( $owner_array as $owner_item ): ?>
        <div class="owner">
          <div class="owner-inner">
            <div class="owner-top">
              <div class="owner-image owner-top-box"><img src="<?php echo IMAGE_URI.$owner_item['image']; ?>" alt="owner image"></div>
              <div class="owner-namebutton owner-top-box">
                <span class="owner-name"><?php echo $owner_item['name']; ?></span>
                <div class="owner-links">
                  <ul class="owner-links-list">
                  <?php foreach( $owner_item['links'] as $link ) { ?>
                        <li class="owner-links-list-item">
                          <a class="owner-links-list-link" href="<?php echo $link['link']; ?>">
                  <?php   importTemplate( 'modules/tokyo/links-icon', array('text' => $link['text']) ); ?>
                          </a>
                        </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
              <div class="owner-status">

                <?php importTemplate( 'modules/tokyo/status', array(
                                      'icon' => $owner_item['status_button']['status_icon'],
                                      'text' => $owner_item['status_button']['status_text'],
                                      'link' => $owner_item['status_button']['status_link'] ) ); ?>
              </div>
            </div>
            <div class="owner-bottom">
              <div class="owner-details">
                <?php if( $owner_item['details_list'] ): ?>
                <dl class="owner-details-list">
                  <?php foreach( $owner_item['details_list'] as $details_item ): ?>
                    <div class="owner-details-list-item">
                      <dt class="owner-details-label"><?php echo $details_item['label']; ?></dt>
                      <dd class="owner-details-text"><?php echo $details_item['text']; ?></dd>
                    </div>
                  <?php endforeach; ?>
                </dl>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
<?php   endforeach;
      endif; ?>
