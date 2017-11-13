<div class="container" >
  <div class="page-header">
    <a href="<?php echo base_url("index.php/c_peminjaman") ?>" data-toggle="tooltip" title="Tambah Transaksi" class="btn-lg navbar-right" style="padding-right:15px"><span class="glyphicon glyphicon-plus" style="font-size:30px"></span></a>
    <h1>Daftar Peminjaman</h1>
  </div>

  <div class="dataTable_wrapper">
    <table width="100%" class="table table-bordered" id="dataTables-example">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Peminjaman</th>
          <th>Kode Anggota</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $no=1;
        foreach ($head_peminjaman as $h)
        { ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $h->kode_peminjaman ?></td>
          <td><?php echo $h->kode_anggota ?></td>
          <td><?php echo $h->tanggal ?></td>
          <td><?php echo $h->tanggal_kembali ?></td>
          <td><?php echo $h->keterangan ?></td>
          <td style="text-align: center"><a href="<?php echo base_url("index.php/c_tampil_peminjaman/view_detail/$h->kode_peminjaman") ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
          &nbsp;<a href="<?php echo base_url("index.php/c_tampil_peminjaman/perpanjang/$h->kode_peminjaman") ?>"><span class="glyphicon glyphicon-expand"></span></a>
          &nbsp;<a href="#"<span class="glyphicon glyphicon-check"></span></a></td>
        </tr>
        <?php
        $no=$no+1;
        }
        ?>
      </tbody>

    </table>
  </div>
</div>
