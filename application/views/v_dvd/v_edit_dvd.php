
    <div class="container" style="padding-top:60px;">
      <!-- FIRST ROW OF BLOCKS -->
        <div class="row">
            <div class="dash-unit" style="height:540px">
              <dtitle>Edit DVD</dtitle>
              <hr>

<?php foreach ($dvd as $d) { ?>
<form action = "<?php echo base_url(). 'index.php/c_dvd/p_edit_dvd'; ?>" method="post">
<div class="col-sm-12">
              <div class="form-group">
                <label>Kode DVD :</label><br>
                <input type="text" name="kode" class="form-control" value="<?php echo $d->kode_dvd ?>" readonly="readonly">
            </div>
            <div class="form-group">
              <label>Judul DVD :</label><br>
              <input type="text" name="judul" class="form-control" value="<?php echo $d->judul_dvd ?>">
          </div>
    </div>

<div class="col-sm-6">
  <div class="form-group">
    <label>Stock :</label><br>
    <input type="number" name="stock" class="form-control" value="<?php echo $d->stock ?>">
</div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Tahun :</label><br>
    <input type="number" min="1900" name="tahun" class="form-control" value="<?php echo $d->tahun ?>">
</div>
</div>

<div class="col-sm-12">
  <br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
<hr>
<button type="submit" class="btn" style="float:right">Update</button>
            </div>



          </form>
          <?php } ?>
          </div>
          </div>
          </div>
