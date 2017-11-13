<!-- Content -->
<div class="container" >
  <div class="page-header">
    <a href="<?php echo base_url("index.php/c_dvd/tambah_dvd") ?>" data-toggle="tooltip" title="Tambah DVD" class="btn-lg navbar-right" style="padding-right:15px"><span class="glyphicon glyphicon-plus" style="font-size:30px"></span></a>
    <a href="<?php echo base_url("index.php/c_dvd/cetak_dvd") ?>" data-toggle="tooltip" title="Cetak" class="btn-lg navbar-right" style="padding-right:10px;padding-top:8px;"><span class="icon-print" style="font-size:32px"></span></a>
    <h1>Daftar DVD</h1>
  </div>

  <div class="dataTable_wrapper" style="body-color:black">
    <table width="100%" class="table table-bordered" id="dataTables-example">
    <thead>
      <tr>
        <th>Kode DVD</th>
        <th>Judul DVD</th>
        <th>Tahun</th>
        <th>Stock</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php

      foreach ($dvd as $d)
      { ?>
        <tr>
          <td style="padding-left:20px"><?php echo $d->kode_dvd ?></td>
          <td><?php echo $d->judul_dvd ?></td>
          <td><?php echo $d->tahun ?></td>
          <td><?php echo $d->stock ?></td>
          <td style="text-align: center"><a href="<?php echo base_url("index.php/c_dvd/edit_dvd/$d->kode_dvd") ?>" data-toggle="tooltip" data-placement="left" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
          <a href="<?php echo base_url("index.php/c_dvd/hapus_dvd/$d->kode_dvd") ?>" onclick="return confirm('Are you sure delete this data?');" data-toggle="tooltip" data-placement="right" title="Delete"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>

    </table>
  </div>
</div>
