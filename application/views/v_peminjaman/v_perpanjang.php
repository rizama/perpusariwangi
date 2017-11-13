<script>
  $(function () {
    $("#kode_buku").select2({
      placeholder: "Pilih Buku"
    });

    $("#kode_dvd").select2({
      placeholder: "Pilih DVD"
    });
  });
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

    $("#kode_anggota")
    {
      var kode_anggota=$("#kode_anggota").val();

      $.ajax({
        url:"<?php echo site_url('c_tampil_peminjaman/cari_anggota');?>",
        type:"POST",
        data:"kode_anggota="+kode_anggota,
        cache:false,
        success:function(html){
          $("#nama").val(html);
        }
      })
    }


    $("#kode_buku").change(function()
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

    $("#kode_dvd").change(function()
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

      if (kode_buku=="") {
        //code
        alert("Kode Buku Masih Kosong");
        return false;
      }else if (judul_buku=="") {
        //code
        alert("Data tidak ditemukan");
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

      if (kode_dvd=="") {
        //code
        alert("Kode dvd Masih Kosong");
        return false;
      }else if (judul_dvd=="") {
        //code
        alert("Data tidak ditemukan");
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
      var denda=$("#denda").val();
      var kode_peminjaman=$("#kode_peminjaman").val();
      var jumlah=parseInt($("#jumlahTmp").val(),10);

      if (kode_anggota=="") {
        alert("Pilih Anggota");
        return false;
      }else if (jumlah==0) {
        alert("pilih buku yang akan dipinjam");
        return false;
      }else{
        $.ajax({
          url:"<?php echo site_url('c_tampil_peminjaman/sukses');?>",
          type:"POST",
          data:"nomer="+nomer+"&pinjam="+pinjam+"&kembali="+kembali+"&kode_anggota="+kode_anggota+"&jumlah="+jumlah+"&denda="+denda+"&kode_peminjaman="+kode_peminjaman,
          cache:false,
          success:function(html){
            alert("Transaksi Peminjaman berhasil");
            document.location = "<?php echo site_url('c_tampil_peminjaman/index');?>";
          }
        })
      }
    })

  })
</script>

<div class="container" style="padding-top:40px;">
  <div class="row">
    <div class="col-sm-6">
      <div class="dash-unit" style="height:560px; width:560px">
        <dtitle>Data Transaksi</dtitle>
        <hr>
        <div class="" style="padding:15px;margin-top:-24px;">
          <?php
          foreach ($head_peminjaman as $h)
          { ?>
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
                <input type="text" id="kode_anggota" name="kode_anggota" class="form-control" value="<?php echo $h->kode_anggota;?>" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4">Nama Anggota</label>
              <label class="control-label col-sm-1" style="text-align:right">:</label>
              <div class="col-sm-7">
                <input type="text" name="nama" id="nama" class="form-control" readonly="readonly">
              </div>
            </div>
            <?php
            $time1=strtotime(date('Y-m-d'));
            $time2=strtotime($h->tanggal_kembali);
            $selisih=($time1-$time2)/(3600*24);
            if ($selisih<=0){
            $selisih=0;
            }
            $jml=$this->m_balepustaka->jumlahTmp("detail_peminjaman where kode_peminjaman='$h->kode_peminjaman'");
            $denda=($jml*$selisih*1000);?>
            <input type="hidden" name="denda" id="denda" value="<?php echo $denda ?>">
            <input type="hidden" name="kode_peminjaman" id="kode_peminjaman" value="<?php echo $h->kode_peminjaman ?>">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
          </form>
          <?php } ?>
          <button id="simpan" class="btn" style="float:right">Update</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="dash-unit" style="height:280px; width:560px">
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
            <button name="tambah_buku" id="tambah_buku" class="btn-link"><i class="icon-plus" style="font-size:40px; color:#CECECE; vertical-align:middle;"></i></button>
          </form>
          <div id="tampil_buku"></div>
        </div>
      </div>

      <div class="dash-unit" style="height:250px; width:560px">
        <dtitle >Data DVD</dtitle>
        <hr>
        <div class="" style="padding:15px;margin-top:-35px;">
          <form class="form-inline" action="" method="post">
            <select name="kode_dvd" class="form-control" id="kode_dvd" style="width:115px">
              <option></option>
              <?php foreach($dvd as $dvd):?>
              <option value="<?php echo $dvd->kode_dvd;?>"><?php echo $dvd->kode_dvd;?></option>
              <?php endforeach;?>
            </select>
            <input type="text" class="form-control" placeholder="Judul dvd" id="judul_dvd" readonly="readonly" style="width:347px;">
            <button id="tambah_dvd" class="btn-link"><i class="icon-plus" style="font-size:40px; color:#CECECE; vertical-align:middle;"></i></button>
          </form>
          <div id="tampil_dvd"></div>
        </div>
      </div>
    </div>
  </div>
</div>
