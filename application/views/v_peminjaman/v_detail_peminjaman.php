<div class="container" style="padding-top:40px;">
  <div class="row">
    <div class="dash-unit" style="height:560px">
      <dtitle>Detail Peminjaman</dtitle>
      <hr>
      <?php
        $today=date('Y-m-d');
        foreach ($head_peminjaman as $h)
      { ?>
      <div class="" style="padding:20px">
        <form action="<?php echo site_url('C_tampil_peminjaman/pengembalian');?>" method="post">
          <table style="font-size:14px;" class="table">
            <tbody>
              <tr>
                <td style="width: 150px;">Kode Peminjaman</td>
                <td style="width: 1px;">:</td>
                <td>
                <input type="hidden" name="kode_peminjaman" value="<?php echo $h->kode_peminjaman ?>">
                <?php echo $h->kode_peminjaman ?>
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Kode Anggota</td>
                <td style="width: 1px;">:</td>
                <td>
                <?php echo $h->kode_anggota ?>
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Tanggal</td>
                <td style="width: 1px;">:</td>
                <td>
                <?php echo $today; ?>
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Tanggal Pinjam</td>
                <td style="width: 1px;">:</td>
                <td>
                <?php echo $h->tanggal ?>
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Batas Kembali</td>
                <td style="width: 1px;">:</td>
                <td>
                <?php echo $h->tanggal_kembali ?>
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Keterlambatan</td>
                <td style="width: 1px;">:</td>
                <td>
                <?php
                $time1=strtotime($today);
                $time2=strtotime($h->tanggal_kembali);
                $selisih=($time1-$time2)/(3600*24);

                if ($selisih>0){
                echo $selisih.' Hari';
                }else{
                $selisih=0;
                echo 'Tidak Terlambat';
                }
                ?>
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Denda</td>
                <td style="width: 1px;">:</td>
                <td>
                <?php $jml=$this->m_balepustaka->jumlahTmp("detail_peminjaman where kode_peminjaman='$h->kode_peminjaman'");
                $denda=($jml*$selisih*1000);
                echo $denda; ?>
                <input type="hidden" name="denda" value="<?php echo $denda ?>">
                </td>
              </tr>
              <tr>
                <td style="width: 100px;">Buku</td>
                <td style="width: 1px;">:</td>
                <td>
                  <table>
                    <tbody>
                    <?php
                    $no=1;
                    foreach($detail_buku as $row){
                    ?>
                    <tr>
                      <td><?php echo $no.'.&nbsp'.$row->kode_buku
                      .'&nbsp-&nbsp'.$row->judul_buku;?></td>
                    </tr>
                    <?php $no=$no+1;}
                    ?>
                    </tbody>
                  </table>
                </td>
              </tr>
              <!-- <tr>
                <td style="width: 100px;">DVD</td>
                <td style="width: 1px;">:</td>
                <td>

                  <?php $nodvd=1;
                  foreach($detail_dvd as $row){
                  ?>
                  <table style="font-size:14px;">
                    <tr>
                      <td><?php echo $no.'.&nbsp'.$row->kode_dvd
                      .'&nbsp-&nbsp'.$row->judul_dvd;?></td>
                    </tr>
                  </table>

                  <?php $nodvd=$nodvd+1; } ?>
                </td>
              </tr> -->
              <tr>
                <td><td><td>
              </tr>
            </tbody>
          </table>
          <hr>
          <button input="submit" class="btn" style="float:right;">Buku Dikembalikan</button>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
