<ul class="sidebar-list">
<?php foreach($sidebarLinkList as $sidebarLink):?>
  <li class="sidebar-item <?php echo $sidebarLink['modifier']?>"><a class="sidebar-link" href="<?php echo $sidebarLink['link']?>"><?php echo $sidebarLink['title']?></a></li>
<?php endforeach;?>
</ul>
