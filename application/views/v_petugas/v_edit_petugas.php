<div class="container" style="padding-top:60px;">
  <!-- FIRST ROW OF BLOCKS -->
  <div class="row">
    <div class="dash-unit" style="height:540px">
      <dtitle>Edit Petugas</dtitle>
      <hr>
      <?php foreach ($petugas as $p) { ?>
      <form action = "<?php echo base_url(). 'index.php/c_petugas/p_edit_petugas'; ?>" method="post" enctype="multipart/form-data">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Kode Petugas :</label><br>
            <input type="text" name="kode" class="form-control" value="<?php echo $p->kode_petugas ?>"  readonly="readonly">
          </div>
          <div class="form-group">
            <label>Username :</label><br>
            <input type="text" name="username" class="form-control" value="<?php echo $p->username ?>">
          </div>
          <div class="form-group">
            <label>Password :</label><br>
            <input type="text" name="password" class="form-control" value="<?php echo $p->password ?>">
          </div>
          <div class="form-group">
            <label>Telepon :</label><br>
            <input type="text" name="telepon" class="form-control" value="<?php echo $p->telepon ?>">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama :</label><br>
            <input type="text" name="nama" class="form-control" value="<?php echo $p->nama ?>">
          </div>
          <div class="form-group">
            <label style="float:center">Alamat :</label><br>
            <textarea name="alamat" class="form-control" style="height:120px"><?php echo $p->alamat ?></textarea>
          </div>
        </div>

        <div class="col-sm-3">
          <img src="<?php echo base_url('assets/images/petugas/'.$p->image);?>" width="150px" height="150px">
        </div>

        <div class="col-sm-3">
          <div class="form-group">
            <label>Image :</label><br>
            <input type="file" name="image" class="form-control" >
          </div>
        </div>

        <div class="col-sm-12">
          <br>
          <hr>
          <button type="submit" class="btn" style="float:right">Update</button>
        </div>
      </form>
      <?php } ?>
    </div>
  </div>
</div>
