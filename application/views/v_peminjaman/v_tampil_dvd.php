<table class="table">

        <?php foreach($tmp_dvd as $tmp_dvd):?>
        <tr>
            <td width=115px><?php echo $tmp_dvd->kode_dvd;?></td>
            <td width=347px><?php echo $tmp_dvd->judul_dvd;?></td>
            <td style="padding-left:15px"><button class="hapus_dvd btn-link" kode="<?php echo $tmp_dvd->kode_dvd;?>"><i class="glyphicon glyphicon-trash" style="color:#CECECE"></i></button></td>
        </tr>

        <?php endforeach;?>
      </table>
    </table>
    <table class="table" style="margin-top:-20px">
        <tr>
            <td width=110px style="vertical-align:middle;"><label >Total DVD</label></td>
            <td><input type="text" style="width:347px" id="jumlahTmpDvd" readonly="readonly" value="<?php echo $jumlahTmpDvd;?>" class="form-control"></td>
        </tr>
    </table>
