<div class="container" style="padding-top:40px;">
  <div class="row">
    <div class="dash-unit" style="height:560px">
      <dtitle>Detail Anggota</dtitle>
      <hr>
      <?php foreach ($anggota as $a) { ?>
      <center>
        <img src="<?php echo base_url('assets/images/anggota/'.$a->image);?>" alt="" class="img-circle" width="150px" height="150px">
      </center>
      <br>
      <h1><?php echo $a->nama ?></h1>
      <br>
      <hr>

      <div class="col-sm-6">
        <table class="table">
          <tr>
            <td style="width: 150px;">Kode Anggota</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $a->kode_anggota ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Jenis Kelamin</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $a->jenis_kelamin ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Alamat</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $a->alamat ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Tanggal Daftar</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $a->tanggal_daftar ?>
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
              &nbsp <?php echo $a->telepon ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Paroki</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $a->paroki ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Email</td>
            <td style="width: 1px;">:</td>
            <td>
              &nbsp <?php echo $a->email ?>
            </td>
          </tr>
          <tr>
            <td style="width: 150px;">Status</td>
            <td style="width: 1px;">:</td>
            <td>
              <?php
                $today = date('Y-m-d');
                $valid_member =strtotime ( '+1 year' , strtotime ($a->tanggal_daftar));
                $valid_member =date ( 'Y-m-d' , ($valid_member));
                if ($valid_member>$today) {
                  $status='Active';
                }else{
                  $status='Banned';
                }
              ?>
              &nbsp <?php echo $status ?>
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
        <a href="<?php echo base_url("index.php/c_anggota/index") ?>"><button class="btn" style="float:right;">Kembali</button></a>
        <a href="<?php echo base_url("index.php/c_anggota/perpanjang/$a->kode_anggota") ?>" onclick="return confirm('Perpanjang ID?');"><button class="btn" style="float:right;">Perpanjang</button></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
