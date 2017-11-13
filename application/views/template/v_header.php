<div class="nav body-nav body-nav-horizontal">
  <!--logo -->
  <link href="assets/css/a.css" rel="stylesheet">
  <style>
   @font-face {
    font-family: digital-7;
    src: url(<?php echo base_url()."/assets/fonts/digital-7.ttf" ?>);
  }
  </style>
  <div class="logo">
    <a href="<?php echo base_url("index.php/c_home") ?>">
      <h1 style="font-family:Patua One">Pustaka Desa Sariwangi</h1>
      <span>AdminPanel</span>
    </a>
  </div>
  <ul>
    <li>
      <a href="<?php echo base_url("index.php/c_home") ?>">
        <i class="icon-dashboard icon-large"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="<?php echo base_url("index.php/c_buku/") ?>">
        <i class="icon-book icon-large" style="font-size:28px"></i> Buku
      </a>
    </li>
    <!-- <li>
      <a href="<?php //echo base_url("index.php/c_dvd/") ?>" >
        <i class="icon-film icon-large" style="font-size:28px"></i> DVD
      </a>
    </li> -->
    <?php if ($status['level'] == "admin"): ?>
      <li>
      <a href="<?php echo base_url("index.php/c_petugas/") ?>">
        <i class="icon-user icon-large"></i> Petugas
      </a>
    </li>
    <?php endif ?>
    <!-- <li>
      <a href="<?php echo base_url("index.php/c_anggota/") ?>">
        <i class="icon-group icon-large" style="font-size:27px"></i> Anggota
      </a>
    </li>
    <li>
      <a href="<?php echo base_url("index.php/c_tampil_peminjaman/") ?>">
        <i class="icon-edit icon-large"></i> Transaksi
      </a>
    </li>
    <li>
      <a href="<?php echo base_url("index.php/c_mt/") ?>">
        <i class="icon-bar-chart icon-large"></i> Other
      </a>
    </li>
    <li style="border-right: 2px solid #262626;">
      <a href="<?php echo base_url("index.php/c_help/") ?>">
        <i class="icon-sitemap icon-large"></i> Help
      </a>
    </li> -->
    <div class="header-right">
      <li style="border-left: 2px solid #262626;">
        <a href="<?php echo base_url("index.php/c_login/logout") ?>">
          <i class="icon-signout icon-large"></i> Logout
        </a>
      </li>
    </div>
  </ul>
</div>
