<?php

  class M_Peminjaman extends CI_Model
  {

    function nootomatis(){
      $today=date('ymd');
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select max(kode_peminjaman) as last from head_peminjaman where kode_peminjaman like '%$today%'");
      if($query === FALSE) {
  die(mysql_error());
}else{
      $data=mysqli_fetch_array($query);
      $lastNoFaktur=$data['last'];
      $lastNoUrut=substr($lastNoFaktur,9,2);

      $nextNoUrut=$lastNoUrut+1;

      $nextNoTransaksi='BP'.$today.sprintf('%02s',$nextNoUrut);

      return $nextNoTransaksi;
    }
  }

  }
