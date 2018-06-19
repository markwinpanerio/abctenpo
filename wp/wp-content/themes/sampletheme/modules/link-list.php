<div class="link-list">
  <ul class="row link-list-inner">
    <?php foreach ($link_list as $list): ?>
      <li class="col-lg-4 link-list-item">
        <a class="btn link-list-button" href="<?php echo $list['link']; ?>"><?php echo $list['title']; ?> <span class="btn-arrow"></span></a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
