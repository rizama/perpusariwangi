<div class="container" style="padding-top:60px;">
  <!-- FIRST ROW OF BLOCKS -->
  <div class="row">
    <div class="dash-unit" style="height:540px">
      <dtitle>Tambah DVD</dtitle>
      <hr>
      <form action = "<?php echo base_url(). 'index.php/c_dvd/p_tambah_dvd'; ?>" method="post">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Kode DVD :</label><br>
            <input type="text" name="kode" class="form-control" value="<?php echo $kode_dvd; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Judul DVD :</label><br>
            <input type="text" name="judul" class="form-control" value="<?php echo $judul_dvd; ?>"><?php echo form_error('judul'); ?>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Stock :</label><br>
            <input type="number" name="stock" min="1" class="form-control" value="1">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Tahun :</label><br>
            <input type="number" min="1900" max="2016" name="tahun" class="form-control">
          </div>
        </div>

        <div class="col-sm-12">
          </br>
          </br>
          </br>
          </br>
          </br>
          </br>
          </br>
          </br>
          <hr>
          <button type="submit" class="btn" style="float:right">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
