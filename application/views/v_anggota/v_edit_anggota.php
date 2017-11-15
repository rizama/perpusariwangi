<div class="container" style="padding-top:60px;">
  <!-- FIRST ROW OF BLOCKS -->
  <div class="row">
    <div class="dash-unit" style="height:540px">
      <dtitle>Edit Anggota</dtitle>
      <hr>

      <?php foreach ($anggota as $a) { ?>
      <form action = "<?php echo base_url(). 'index.php/c_anggota/p_edit_anggota'; ?>" method="post" enctype="multipart/form-data">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Kode Anggota :</label><br>
            <input type="text" name="kode" class="form-control" value="<?php echo $a->kode_anggota ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Email :</label><br>
            <input type="text" name="email" class="form-control" value="<?php echo $a->email ?>"><?php echo form_error('email'); ?>
          </div>
          <!-- <div class="form-group">
            <label>Paroki :</label><br>
            <input type="text" name="paroki" class="form-control" value="<?php echo $a->paroki ?>">
          </div> -->
          <div class="form-group">
            <label>Telepon :</label><br>
            <input type="text" name="telepon" class="form-control" value="<?php echo $a->telepon ?>"><?php echo form_error('telepon'); ?>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama :</label><br>
            <input type="text" name="nama" class="form-control" value="<?php echo $a->nama ?>"><?php echo form_error('nama'); ?>
          </div>
          <div class="form-group">
            <label style="float:center">Alamat :</label><br>
            <textarea name="alamat" class="form-control" style="height:120px"><?php echo $a->alamat ?></textarea><?php echo form_error('alamat'); ?>
          </div>
        </div>

        <div class="col-sm-3">
          <img src="<?php echo base_url('assets/images/anggota/'.$a->image);?>" width="150px" height="150px">
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label>Image :</label><br>
            <input type="file" name="image" class="form-control">
            <input type="hidden" name="img" class="form-control" value="<?php echo $a->image?>">
          </div>
        </div>
        <input type="hidden" name="tanggal" value="<?php echo $a->tanggal_daftar ?>">
        <input type="hidden" name="jk" value="<?php echo $a->jenis_kelamin ?>">
        <input type="hidden" name="tanggal_lahir" value="<?php echo $a->tanggal_lahir ?>">

        <div class="col-sm-12">
          <br>
          <hr>
          <button type="submit" class="btn" style="float:right">Submit</button>
        </div>
      </form>
      <?php } ?>
    </div>
  </div>
</div>
