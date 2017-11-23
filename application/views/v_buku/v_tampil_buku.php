
<!-- Content -->
<div class="container" >
  <div class="page-header">
    <a href="<?php echo base_url("index.php/c_buku/tambah_buku") ?>" data-toggle="tooltip" title="Tambah Buku" class="btn-lg navbar-right" style="padding-right:30px;padding-top:17px;"><span class="glyphicon glyphicon-plus" style="font-size:30px"></span></a>
    <a href="<?php echo base_url("index.php/c_buku/cetak_buku") ?>" data-toggle="tooltip" title="Cetak" class="btn-lg navbar-right" style="padding-right:20px;padding-top:15px;"><span class="icon-print" style="font-size:32px"></span></a>
    <h1>Daftar Buku</h1>
  </div>

  <div class="dataTable_wrapper" style="body-color:black">
    <table width="100%" class="table table-bordered" id="dataTables-example">
      <thead>
        <tr>
          <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Tahun</th>
          <th>Klasifikasi</th>
          <th>Stock</th>
          <th>Rak</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php

        foreach ($buku as $b)
        { ?>
          <tr>
            <td><?php echo $b->kode_buku ?></td>
            <td><?php echo $b->judul_buku ?></td>
            <td><?php echo $b->penulis ?></td>
            <td><?php echo $b->penerbit ?></td>
            <td><?php echo $b->tahun ?></td>
            <td><?php echo $b->klasifikasi ?></td>
            <td><?php echo $b->stock ?></td>
            <td><?php echo $b->no_rak ?></td>
            <td style="text-align: center"><a href="<?php echo base_url("index.php/c_buku/edit_buku/$b->kode_buku") ?>" data-toggle="tooltip" data-placement="left" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="<?php echo base_url("index.php/c_buku/hapus_buku/$b->kode_buku") ?>" onclick="return confirm('Are you sure delete this data?');" data-toggle="tooltip" data-placement="right" title="Delete"><span class="glyphicon glyphicon-trash"></span></a></td>
          </tr>
        <?php
        }
        ?>
      </tbody>

    </table>
  </div>
</div>
