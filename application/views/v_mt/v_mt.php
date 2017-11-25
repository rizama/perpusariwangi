<div class="container" >
  <div class="page-header" >
    <h1>Laporan & <i>Backup</i></h1>
  </div>

  <div class="col-lg-4" style="padding-left:0">
    <div class="dash-unit" style="height:460px;">
      <dtitle>Laporan Bulanan</dtitle>
      <hr>
      <div style="margin-top:-15px;padding:10px">

        <form action = "<?php echo base_url(). 'index.php/c_mt/buku_baru'; ?>" method="post">
          <div class="form-group">
            <label>Buku Baru Bulan</label><br>
            <input type="text" class="date-picker-mt" style="width:343px" name="buku_baru" class="form-control">
            <button type="submit" class="btn" style="float:right;">Kirim</button>
          </div>
        </form>

        <br>
        <br>
        <br>

        <form action = "<?php echo base_url(). 'index.php/c_mt/buku_terbanyak'; ?>" method="post">
          <div class="form-group">
            <label>Banyak Buku yang Dipinjam Pada Bulan</label><br>
            <input type="text" class="date-picker-mt" style="width:343px" name="buku_terbanyak" class="form-control">
            <button type="submit" class="btn" style="float:right;">Kirim</button>
          </div>
        </form>
        <br>
        <br>
        <br>

        <!-- <form action = "<?php echo base_url(). 'index.php/c_mt/dvd_baru'; ?>" method="post">
          <div class="form-group">
            <label>DVD Baru Pada Bulan</label><br>
            <input type="text" class="date-picker-mt" style="width:343px" name="dvd_baru" class="form-control">
            <button type="submit" class="btn" style="float:right;">Submit</button>
          </div>
        </form> -->

      </div>
    </div>
  </div>

  <div class="col-sm-3 col-lg-4" style="padding:0">
    <div class="dash-unit" style="height:460px;">
      <dtitle>Laporan Bulanan</dtitle>
      <hr>
      <div style="margin-top:-15px;padding:10px">
      <!-- <form action = "<?php echo base_url(). 'index.php/c_mt/dvd_terbanyak'; ?>" method="post">
        <div class="form-group">
          <label>Peminjaman DVD Terbanyak</label><br>
          <input type="text" class="date-picker-mt" style="width:358px" name="dvd_terbanyak" class="form-control">
          <button type="submit" class="btn" style="float:right;">Submit</button>
        </div>
      </form> -->
      <form action = "<?php echo base_url(). 'index.php/c_mt/anggota_baru'; ?>" method="post">
        <div class="form-group">
          <label>Anggota Baru Pada Bulan</label><br>
          <input type="text" class="date-picker-mt" style="width:358px" name="anggota_baru" class="form-control">
          <button type="submit" class="btn" style="float:right;">Kirim</button>
        </div>
      </form>
      <br>
      <br>
      <br>
      <form action = "<?php echo base_url(). 'index.php/c_mt/pengembalian'; ?>" method="post">
        <div class="form-group">
          <label>Transaksi</label><br>
          <input type="text" class="date-picker-mt" style="width:358px" name="transaksi" class="form-control">
          <button type="submit" class="btn" style="float:right;">Kirim</button>
        </div>
      </form>
    </div>
  </div>
  </div>

  <div class="col-sm-3 col-lg-4" style="padding-right:0">
    <div class="dash-unit" style="height:460px;">
      <dtitle><i>BackUp & Restore</i></dtitle>
      <hr>
      <div style="margin-top:-15px;padding:10px">
        <label>Data Berupa Berkas (.zip)</label><br>
        <a href="<?php echo base_url(). 'index.php/c_mt/backupdb';?>"><button class="btn" style="width:340px"><span class="glyphicon glyphicon-hdd"></span> <i>Backup Database</i></button></a>
        <br>
        <br>
        <br>
        <br>
        <form action = "<?php echo base_url(). 'index.php/c_mt/restore'; ?>" method="post" enctype="multipart/form-data" style="padding-top:5px">
          <div class="form-group">
            <label><i>Restore Database </i> :</label>
            <label><i>File Source (.sql)</i></label><br>
            <input type="file" name="restore" class="form-control">
            <button type="submit" class="btn" style="float:right">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(function() {
    $('.date-picker-mt').datepicker( {
      monthNamesShort: $.datepicker.regional["en"].monthNames,
      dateFormat: 'MM',
      onClose: function(dateText, inst) {
          $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
      }
    });
  });

</script>
<style>
  .ui-datepicker-calendar {
    display: none;
  }
</style>
