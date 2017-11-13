
    <?php foreach ($buku as $b) { ?>
      <div class="container" style="padding-top:60px;">
        <!-- FIRST ROW OF BLOCKS -->
          <div class="row">
              <div class="dash-unit" style="height:540px">
                <dtitle>Edit Buku</dtitle>
                <hr>

    <form action = "<?php echo base_url(). 'index.php/c_buku/p_edit_buku'; ?>" method="post">
      <div class="col-sm-12">
                    <div class="form-group">
                      <label>Kode Buku :</label><br>
                      <input type="text" name="kode" class="form-control" value="<?php echo $b->kode_buku ?>" readonly="readonly">
                  </div>


        <div class="form-group">
          <label>Judul Buku :</label><br>
          <input type="text" name="judul" class="form-control" value="<?php echo $b->judul_buku ?>">
        </div>

        <div class="form-group">
          <label>Penulis :</label><br>
          <input type="text" name="penulis" class="form-control" value="<?php echo $b->penulis ?>">
        </div>

        <div class="form-group">
          <label>Penerbit :</label><br>
          <input type="text" name="penerbit" class="form-control" value="<?php echo $b->penerbit ?>">
        </div>
        </div>


        <div class="col-sm-3">
        <div class="form-group">
          <label>Tahun :</label><br>
          <input type="number" min="1900" name="tahun" class="form-control" value="<?php echo $b->tahun ?>">
      </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group">
          <label>Klasifikasi :</label><br>
          <input type="text" name="klasifikasi" class="form-control" value="<?php echo $b->klasifikasi ?>">
      </div>
    </div>

    <div class="col-sm-3">
      <div class="form-group">
        <label>Stock :</label><br>
        <input type="number" name="stock" class="form-control" value="<?php echo $b->stock ?>">
    </div>
    </div>

    <div class="col-sm-3">
      <div class="form-group">
        <label>Rak :</label><br>
        <input type="text" name="rak" class="form-control" value="<?php echo $b->no_rak ?>">
    </div>
    </div>

    <div class="col-sm-12">
    <hr>
    <button type="submit" class="btn" style="float:right">Update</button>
                </div>



    </form>
  </div>
  </div>
  </div>
    <?php } ?>
