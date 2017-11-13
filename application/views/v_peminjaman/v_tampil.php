<table class="table">

  <?php
  foreach($tmp_buku as $tmp):?>
  <tr>
    <td width=115px><?php echo $tmp->kode_buku;?></td>
    <td width=347px><?php echo $tmp->judul_buku;?></td>
    <td style="padding-left:15px"><button class="hapus_buku btn-link" kode="<?php echo $tmp->kode_buku;?>" data-toggle="tooltip" data-placement="right" title="Delete"><span class="glyphicon glyphicon-trash" style="color:#CECECE"></span></button></td>
  </tr>

  <?php endforeach;?>

</table>
<table class="table" style="margin-top:-20px">
  <tr>
    <td width=110px style="vertical-align:middle;"><label >Total Buku</label></td>
    <td><input type="text" style="width:347px"id="jumlahTmp" readonly="readonly" value="<?php echo $jumlahTmp;?>" class="form-control"></td>
  </tr>
</table>
