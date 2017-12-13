<div class="container" style="padding-top:20px;">
  <div class="row">
    <div class="col-sm-3 col-lg-12">
      <div class="dash-unit" style="height:350px;">
        <dtitle>Profil Pengguna</dtitle>
        <hr>
        <?php foreach ($petugas as $p) { ?>
        <center>
          <img src="<?php echo base_url('assets/images/petugas/'.$p->image);?>" alt="" class="img-circle" width="150px" height="150px">
        </center>
        <br>
        <h1 style="padding-bottom:3px"><?php echo $p->nama; ?></h1>
        <h3 ><?php echo $p->status; ?></h3>
        <center>
          <a href="<?php echo base_url("#") ?>">
          <i class="icon-lock icon-large" style="font-size:28px"></i>
          </a>
        </center>
        <?php } ?>
      </div>

      <div class="row">
        <div class="col-sm-3 col-lg-4">
          <div class="dash-unit" style="height:200px">
            <dtitle>Waktu Lokal</dtitle>
            <hr>
            <div id="time" style="font-family:digital-7; font-size:60px;text-align:center;">
              <h1> </h1>
            </div>
            <?php
            $d1=date('Y');
            $d2=date('d F');
            ?>

            <h1><?php echo $d1 ?></h1>
            <h3><strong><?php echo $d2 ?></strong></h3>
          </div>
        </div>

        <div class="col-sm-3 col-lg-4">
          <div class="dash-unit" style="height:200px">
            <dtitle> List Buku Terbaru </dtitle>
            <hr>
            <ul>
              <?php foreach ($buku as $b) { ?>
              <li><?php echo $b['kode_buku'].'&nbsp-&nbsp'.$b['judul_buku'];?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-lg-4">
          <div class="dash-unit" style="height:200px">
            <dtitle> Anggota Terbaru </dtitle>
            <hr>
            <ul>
              <?php foreach ($anggota as $member) { ?>
              <li><?php echo $member['kode_anggota'].'&nbsp-&nbsp'.$member['nama'];?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
$(document).ready(function(){
  setInterval(function(){
    $('#time').load('c_home/time')
  },1000);
})
</script>
