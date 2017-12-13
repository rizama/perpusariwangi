
<!-- Content -->
<div class="container" >
  <div class="page-header">
    <a href="<?php echo base_url("index.php/c_petugas/tambah_petugas") ?>" data-toggle="tooltip" title="Tambah Petugas" class="btn-lg navbar-right" style="padding-right:30px;padding-top:17px"><span class="glyphicon glyphicon-plus" style="font-size:30px"></span></a>
    <h1>Daftar Petugas</h1>
  </div>

  <div class="dataTable_wrapper">
    <table width="100%" class="table table-bordered" id="dataTables-example">
      <thead>
        <tr>
          <th>Kode Petugas</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($petugas as $p)
        { ?>
          <tr>
            <td style="padding-left:20px"><?php echo $p->kode_petugas ?></td>
            <td><?php echo $p->nama ?></td>
            <td><?php echo $p->jenis_kelamin ?></td>
            <td><?php echo $p->alamat ?></td>
            <td><?php echo $p->telepon ?></td>
            <td><?php echo $p->status ?></td>
            <td style="text-align: center"><a href="<?php echo base_url("index.php/c_petugas/detail_petugas/$p->kode_petugas") ?>" data-toggle="tooltip" title="Detail"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp
            <a href="<?php echo base_url("index.php/c_petugas/edit_petugas/$p->kode_petugas") ?>" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>&nbsp
            <a href="<?php echo base_url("index.php/c_petugas/hapus_petugas/$p->kode_petugas") ?>" onclick="return confirm('Are you sure delete this data?');" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>&nbsp
            </td>
          </tr>
        <?php
        } 
        ?>
      </tbody>
    </table>
  </div>
</div>
