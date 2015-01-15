<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo APP_ROOT; ?>">Games Download</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling --> 
  <?php
  if (isset($_GET['page'])) {
    $hal = $_GET['page'];
  } else {
    $hal = '';
  }
  ?>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
      <li <?php if ($hal==''||$hal=='beranda') {echo "class='active'";} ?>><a href="<?php echo APP_ROOT; ?>">Beranda</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Games <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="?page=download">Download</a></li>
          <li><a href="?page=genre">Genre</a></li>
          <li><a href="?page=publisher">Publisher</a></li>
          <?php if (isset($_SESSION['member_id'])): ?>
          <li class="divider"></li>
          <li><a href="?page=tambah_game">Tambah Game</a></li>
          <?php endif ?>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Member <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="?page=member">Lihat Member</a></li>
          <?php if (!isset($_SESSION['privilege_id']) || $_SESSION['privilege_id'] == 1): ?>
          <li><a href="?page=member_registration">Daftar Member</a></li>
          <?php endif ?>
        </ul>
      </li>
      <li <?php if ($hal=='about') {echo "class='active'";} ?>><a href="?page=about">About</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>