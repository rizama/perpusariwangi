<script>
  $(document).ready(function(){

    $(document).on('click', ".hapus_dvd", function(){
      var kode=$(this).attr("kode");

      $.ajax({
        url:"<?php echo site_url('c_peminjaman/hapus_dvd');?>",
        type:"POST",
        data:"kode="+kode,
        cache:false,
        success:function(html){
          loadData();
        }
      });
    });

    $(document).on('click', ".hapus_buku", function(){
      var kode=$(this).attr("kode");

      $.ajax({
        url:"<?php echo site_url('c_peminjaman/hapus_buku');?>",
        type:"POST",
        data:"kode="+kode,
        cache:false,
        success:function(html){
          loadData();
        }
      });
    });

    function loadData(args)
    {
      //code
      $("#tampil_buku").load("<?php echo site_url('c_peminjaman/tampil_buku');?>");
      $("#tampil_dvd").load("<?php echo site_url('c_peminjaman/tampil_dvd');?>");
    }
    loadData();

    function kosong(args)
    {
      //code
      $("#kode_buku").val('');
      $("#judul_buku").val('');
      $("#penulis").val('');
      $("#kode_dvd").val('');
      $("#judul_dvd").val('');
      $("#tahun").val('');
    }

    $("#kode_anggota").change(function()
    {
      var kode_anggota=$("#kode_anggota").val();

      $.ajax({
        url:"<?php echo site_url('c_peminjaman/cari_anggota');?>",
        type:"POST",
        data:"kode_anggota="+kode_anggota,
        cache:false,

        success:function(html){
          $("#nama").val(html);
          var cek=$("#nama").val();
          if (cek=="a") {
            //code
            alert("Masih Ada Peminjaman Aktif");
            $("#nama").val('');
          }else if (cek=="") {
            alert("Anggota Belum Memperpanjang");
          }{
        }
      }
    })
    })

    $("#kode_buku").click(function()
    {
      var kode_buku=$("#kode_buku").val();

      $.ajax({
        url:"<?php echo site_url('c_peminjaman/cari_buku');?>",
        type:"POST",
        data:"kode_buku="+kode_buku,
        cache:false,
        success:function(msg){
          data=msg.split("|");
          $("#judul_buku").val(data[0]);
          $("#penulis").val(data[1]);
        }
      })
    })

    $("#kode_dvd").click(function()
    {
      var kode_dvd=$("#kode_dvd").val();

      $.ajax({
        url:"<?php echo site_url('c_peminjaman/cari_dvd');?>",
        type:"POST",
        data:"kode_dvd="+kode_dvd,
        cache:false,
        success:function(msg){
          data=msg.split("|");
          $("#judul_dvd").val(data[0]);
          $("#tahun").val(data[1]);
        }
      })
    })

    $("#tambah_buku").click(function()
    {
      var kode_buku=$("#kode_buku").val();
      var judul_buku=$("#judul_buku").val();
      var penulis=$("#penulis").val();
      var jumlahbk=parseInt($("#jumlahTmp").val(),10);

      if (kode_buku=="") {
        //code
        alert("Kode Buku Masih Kosong");
        return false;
      }else if (jumlahbk==3) {
        //code
        alert("Hanya Bisa Meminjam 3 Buku");
        return false;
      }else if (judul_buku=="") {
        //code
        alert("Kode Buku Salah");
        return false;
      }else{
        $.ajax({
          url:"<?php echo site_url('c_peminjaman/tambah_buku');?>",
          type:"POST",
          data:"kode_buku="+kode_buku+"&judul_buku="+judul_buku+"&penulis="+penulis,
          cache:false,
          success:function(html){
            loadData();
            kosong();
          }
        })
        return false;
      }
    })

    $("#tambah_dvd").click(function()
    {
      var kode_dvd=$("#kode_dvd").val();
      var judul_dvd=$("#judul_dvd").val();
      var tahun=$("#tahun").val();
      var jumlahdvd=parseInt($("#jumlahTmpDvd").val(),10);

      if (kode_dvd=="") {
        //code
        alert("Kode DVD Masih Kosong");
        return false;
      }else if (judul_dvd=="") {
        //code
        alert("Kode DVD Salah");
        return false;
      }else if (jumlahdvd==2) {
        //code
        alert("Hanya Bisa Meminjam 2 DVD");
        return false;
      }else{
        $.ajax({
        url:"<?php echo site_url('c_peminjaman/tambah_dvd');?>",
        type:"POST",
        data:"kode_dvd="+kode_dvd+"&judul_dvd="+judul_dvd+"&tahun="+tahun,
        cache:false,
        success:function(html){
          loadData();
          kosong();
          }
        })
        return false;
      }
    })

    $("#simpan").click(function(){
      var nomer=$("#no").val();
      var pinjam=$("#pinjam").val();
      var kembali=$("#kembali").val();
      var kode_anggota=$("#kode_anggota").val();
      var jumlahbk=parseInt($("#jumlahTmp").val(),10);
      var jumlahdvd=parseInt($("#jumlahTmpDvd").val(),10);
      var jumlah=jumlahbk+jumlahdvd;
      var nama=$("#nama").val();

      if (kode_anggota=="") {
        alert("Pilih Anggota");
        return false;
      }else if (jumlah==0) {
        alert("Pilih Barang yang akan Dipinjam");
        return false;
      }else if (nama=="") {
        alert("Nama Tidak Boleh Kosong");
        return false;
      }else{
        $.ajax({
          url:"<?php echo site_url('c_peminjaman/sukses');?>",
          type:"POST",
          data:"nomer="+nomer+"&pinjam="+pinjam+"&kembali="+kembali+"&kode_anggota="+kode_anggota+"&jumlah="+jumlah,
          cache:false,
          success:function(html){
            alert("Peminjaman Berhasil");
            window.location = "./c_tampil_peminjaman";
          }
        })
      }

    })

  })
</script>

<div class="container" style="padding-top:40px;">
  <div class="row">
    <div class="col-sm-6">
      <div class="dash-unit" style="height:560px; width:560px; ">
        <dtitle>Data Transaksi</dtitle>
        <hr>
        <div class="" style="padding:15px;margin-top:-24px;">
          <form class="form-horizontal" action="" method="post">
            <div class="form-group">
              <label class="control-label col-sm-4">Kode Peminjaman</label>
              <label class="control-label col-sm-1" style="text-align:right">:</label>
              <div class="col-sm-7">
              <input type="text" id="no" name="no" class="form-control" value="<?php echo $noauto;?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" >Tanggal Peminjaman</label>
              <label class="control-label col-sm-1" style="text-align:right">:</label>
              <div class="col-sm-7">
                <input type="text" id="pinjam" name="pinjam" class="form-control" value="<?php echo $tanggalpinjam;?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" >Tanggal Pengembalian</label>
              <label class="control-label col-sm-1" style="text-align:right">:</label>
              <div class="col-sm-7">
                <input type="text" id="kembali" name="kembali" class="form-control" value="<?php echo $tanggalkembali;?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4">Kode Anggota</label>
              <label class="control-label col-sm-1" style="text-align:right">:</label>
              <div class="col-sm-7">
                <select name="kode_anggota" class="form-control" id="kode_anggota"><?php echo form_error('kode_anggota'); ?>
                  <option></option>
                  <?php foreach($anggota as $anggota):?>
                  <option value="<?php echo $anggota->kode_anggota;?>"><?php echo $anggota->kode_anggota;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4">Nama Anggota</label>
              <label class="control-label col-sm-1" style="text-align:right">:</label>
              <div class="col-sm-7">
                <input type="text" name="nama" id="nama" class="form-control"><?php echo form_error('nama'); ?>
              </div>
            </div>
          </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <button id="simpan" class="btn btn-primary" style="float:right"> Simpan</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="dash-unit" style="height:280px; width:560px;">
        <dtitle >Data Buku</dtitle>
        <hr>
        <div class="" style="padding:15px;margin-top:-35px;">
          <form class="form-inline" action="" method="post">
            <select name="kode_buku" class="form-control" id="kode_buku">
              <option>Kode Buku</option>
              <?php foreach($buku as $buku):?>
              <option value="<?php echo $buku->kode_buku;?>"><?php echo $buku->kode_buku;?></option>
              <?php endforeach;?>
            </select>
            <input type="text" class="form-control" placeholder="Judul Buku" id="judul_buku" readonly="readonly" style="width:347px;">
            <button name="tambah_buku" id="tambah_buku" class="btn-link"><i class="icon-plus" style="font-size:40px; color:#CECECE; vertical-align:middle;" data-toggle="tooltip" title="Tambah Buku"></i></button>
          </form>
          <div id="tampil_buku"></div>
        </div>
      </div>
      <div class="dash-unit" style="height:250px; width:560px;">
        <dtitle >Data DVD</dtitle>
        <hr>
        <div class="" style="padding:15px;margin-top:-35px;">
          <form class="form-inline" action="" method="post">
            <select name="kode_dvd" class="form-control" id="kode_dvd" style="width:115px">
              <option>Kode DVD</option>
              <?php foreach($dvd as $dvd):?>
              <option value="<?php echo $dvd->kode_dvd;?>"><?php echo $dvd->kode_dvd;?></option>
              <?php endforeach;?>
            </select>
            <input type="text" class="form-control" placeholder="Judul dvd" id="judul_dvd" readonly="readonly" style="width:347px;">
            <button id="tambah_dvd" class="btn-link"><i class="icon-plus" style="font-size:40px; color:#CECECE; vertical-align:middle;" data-toggle="tooltip" title="Tambah DVD"></i></button>
          </form>
          <div id="tampil_dvd"></div>
        </div>
      </div>
    </div>
  </div>
</div>
