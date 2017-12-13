<body>
  <div class="container" style="padding-top:60px;">
    <!-- FIRST ROW OF BLOCKS -->
    <div class="row">
      <div class="dash-unit" style="height:540px">
        <dtitle>Tambah Buku</dtitle>
        <hr>
        <form action = "<?php echo base_url(). 'index.php/c_buku/p_tambah_buku'; ?>" method="post">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Judul Buku :</label><br>
              <input type="text" name="judul" class="form-control" value="<?php echo $judul_buku; ?>"><?php echo form_error('judul'); ?>
            </div>
            <div class="form-group">
              <label>Penulis :</label><br>
              <input type="text" name="penulis" class="form-control" value="<?php echo $penulis; ?>" onkeypress="return h(event)"><?php echo form_error('penulis'); ?>
            </div>
            <div class="form-group">
              <label>Penerbit :</label><br>
              <input type="text" name="penerbit" class="form-control"><?php echo form_error('penerbit'); ?>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Tahun :</label><br>
              <input type="number" min="1900" max="2016" name="tahun" class="form-control"><?php echo form_error('tahun'); ?>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Klasifikasi :</label><br>
              <input type="text" name="klasifikasi" class="form-control"><?php echo form_error('klasifikasi'); ?>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Stok :</label><br>
              <input type="number" min="1" name="stock" class="form-control" value="1"><?php echo form_error('stock'); ?>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Rak :</label><br>
              <input type="text" name="rak" class="form-control"><?php echo form_error('rak'); ?>
            </div>
          </div>
          <div class="col-sm-12">
            <hr>
            <button type="submit" class="btn" style="float:right">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
