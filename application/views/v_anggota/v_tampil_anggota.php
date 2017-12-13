<!-- Content -->
<div class="container" >
  <div class="page-header">
    <a href="<?php echo base_url("index.php/c_anggota/tambah_anggota") ?>" data-toggle="tooltip" title="Tambah Anggota" class="btn-lg navbar-right" style="padding-right:30px;padding-top:17px"><span class="glyphicon glyphicon-plus" style="font-size:30px"></span></a>
    <a href="<?php echo base_url("index.php/c_anggota/cetak_anggota") ?>" data-toggle="tooltip" title="Cetak" class="btn-lg navbar-right" style="padding-right:20px;padding-top:15px;"><span class="icon-print" style="font-size:32px"></span></a>
    <h1>Daftar Anggota</h1>
  </div>

  <div class="dataTable_wrapper" style="body-color:black">
    <table width="100%" class="table table-bordered" id="dataTables-example">
      <thead>
        <tr>
          <th>Kode Anggota</th>
          <th>Nama</th>
          <th>JK</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <!-- <th>Paroki</th> -->
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        foreach ($anggota as $a)
        { ?>
          <tr>
            <td style="padding-left:20px"><?php echo $a->kode_anggota ?></td>
            <td><?php echo $a->nama ?></td>
            <td><?php echo $a->jenis_kelamin ?></td>
            <td><?php echo $a->alamat ?></td>
            <td><?php echo $a->telepon ?></td>
            <!-- <td><?php echo $a->paroki ?></td> -->
            <td><?php echo $a->email ?></td>
            <td style="text-align: center"><a href="<?php echo base_url("index.php/c_anggota/detail_anggota/$a->kode_anggota") ?>" data-toggle="tooltip" title="Detail"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp
            <a href="<?php echo base_url("index.php/c_anggota/edit_anggota/$a->kode_anggota") ?>" data-toggle="tooltip" title="Ubah"><span class="glyphicon glyphicon-edit"></span></a>&nbsp
            <a href="<?php echo base_url("index.php/c_anggota/hapus_anggota/$a->kode_anggota") ?>" onclick="return confirm('Apakah anda akin ingin menghapus data ini?');" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>&nbsp
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
