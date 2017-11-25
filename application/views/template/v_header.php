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
    <img src="<?php echo base_url();?>assets/images/kbb.png" alt="Smiley face" height="42" width="42">
    <a href="<?php echo base_url("c_home") ?>">
      <!-- <h1 style="font-family:Patua One">Pustaka Desa Sariwangi</h1> -->
      <span>AdminPanel</span>
    </a>
  </div>
  <ul>
    <li>
      <a href="<?php echo base_url("c_home") ?>">
        <i class="la la-home" style="font-size: 35px;"></i></br> Dasbor
      </a>
    </li>
    <li>
      <a href="<?php echo base_url("c_buku/") ?>">
        <i class="la la-book" style="font-size: 35px;"></i></i></br> Buku
      </a>
    </li>
    <!-- <li>
      <a href="<?php //echo base_url("index.php/c_dvd/") ?>" >
        <i class="icon-film icon-large" style="font-size:28px"></i> DVD
      </a>
    </li> -->
    <?php if ($status['level'] == "admin"): ?>
      <li>
      <a href="<?php echo base_url("c_petugas/") ?>">
        <i class="la la-user" style="font-size: 35px;"></i></i></br> Petugas
      </a>
    </li>
    <?php endif ?>
    <li>
      <a href="<?php echo base_url("c_anggota/") ?>">
        <i class="la la-users" style="font-size: 35px;"></i></i></br> Anggota
      </a>
    </li>
    <li>
      <a href="<?php echo base_url("c_tampil_peminjaman/") ?>">
        <i class="la la-pencil-square" style="font-size: 35px;"></i></i></br> Transaksi
      </a>
    </li>
    <li>
      <a href="<?php echo base_url("c_mt/") ?>">
        <i class="la la-gear" style="font-size: 35px;"></i></i></br> Lainnya
      </a>
    </li>
    <li style="border-right: 2px solid #262626;">
      <a href="<?php echo base_url("c_help/") ?>">
        <i class="la la-comment" style="font-size: 35px;"></i></i></br> Panduan
      </a>
    </li>
    <div class="header-right">
      <li style="border-left: 2px solid #262626;">
        <a href="<?php echo base_url("c_login/logout") ?>">
          <i class="la la-sign-out" style="font-size: 35px;"></i></i></br> Keluar
        </a>
      </li>
    </div>
  </ul>
</div>
