<header class="l-header">
  <div class="l-container l-header-inner">
    <div class="l-header-item">
      <h1 class="header-logo">
        <img src="<?php echo IMAGE_URI; ?>tokyo/logo.png" alt="ABC Tenpo 居抜き物件ならABC店舗">
      </h1>
      <ul class="header-menu">
        <li class="header-menu-item">
          <a class="header-menu-container" href="#">
            <div class="header-menu-icon header-menu-icon-search">
              <?php importTemplate('./modules/svg-icon', array(
                'icon' => 'icon-search'
              )); ?>
            </div>
            <span class="header-menu-text">物件を探す</span>
          </a>
        </li>
        <li class="header-menu-item">
          <a class="header-menu-container" href="#">
            <div class="header-menu-icon header-menu-icon-book">
              <?php importTemplate('./modules/svg-icon', array(
                'icon' => 'icon-book'
              )); ?>
            </div>
            <span class="header-menu-text">お役立ち情報を知る</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="l-header-item">
      <a href="#" class="header-button">
        <div class="header-button-icon">
          <?php importTemplate('./modules/svg-icon', array(
            'icon' => 'icon-user'
          )); ?>
        </div>
        <span>会員登録・ログイン</span>
      </a>
    </div>
  </div>
</header>