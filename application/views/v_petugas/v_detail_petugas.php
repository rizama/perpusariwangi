<div class="container" style="padding-top:40px;">
  <div class="row">
    <div class="dash-unit" style="height:560px">
      <dtitle>Detail Petugas</dtitle>
      <hr>
      <?php foreach ($petugas as $p) { ?>
      <center>
        <img src="<?php echo base_url('assets/images/petugas/'.$p->image);?>" alt="" class="img-circle" width="150px" height="150px">
      </center>
      <br>
      <h1><?php echo $p->nama ?></h1>
      <br>
      <hr>
      <br>
      <div class="col-sm-6">
        <table class="table">
          <tr>
            <td style="width: 150px;">Kode Petugas</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $p->kode_petugas ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Jenis Kelamin</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $p->jenis_kelamin ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Alamat</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $p->alamat ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-6">
        <table class="table">
          <tr>
            <td style="width: 150px;">Telepon</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $p->telepon ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Username</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $p->username ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Password</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $p->password ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-12">
        <hr>
        <a href="<?php echo base_url("index.php/c_petugas/index") ?>"><button class="btn" style="float:right;">Kembali</button></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
