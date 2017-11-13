<?php

  class M_balepustaka extends CI_Model
  {

    function get_data($table)
    {
      return $this->db->get($table);
    }

    function insert_data($data, $table)
    {
      $this->db->insert($table, $data);
    }

    function delete_data($where, $table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }

    function get_where_data($where,$table){
      return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }


    function select_where_data($where,$data,$table){
      $this->db->where($data,$where);
      return $this->db->get($table);
    }

    function jumlahTmp($table){
      return $this->db->count_all($table);
    }

    function delete_data_tmp($where, $table, $data)
    {
      $this->db->where($data,$where);
      $this->db->delete($table);
    }

    function nootomatis(){
      $today=date('ymd');
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select max(kode_peminjaman) as last from head_peminjaman where kode_peminjaman like '%$today%'");
      if($query === FALSE) {
        die(mysql_error());
      }else{
        $data=mysqli_fetch_array($query);
        $lastNoFaktur=$data['last'];
        $lastNoUrut=substr($lastNoFaktur,8,2);
        $nextNoUrut=$lastNoUrut+1;
        $nextNoTransaksi='BP'.$today.sprintf('%02s',$nextNoUrut);
        return $nextNoTransaksi;
      }
    }

    function kode_pengembalian_otomatis(){
      $today=date('ymd');
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select max(kode_pengembalian) as last from pengembalian where kode_pengembalian like '%$today%'");
      if($query === FALSE) {
        die(mysql_error());
      }else{
        $data=mysqli_fetch_array($query);
        $lastNoFaktur=$data['last'];
        $lastNoUrut=substr($lastNoFaktur,8,2);
        $nextNoUrut=$lastNoUrut+1;
        $nextNoTransaksi='BK'.$today.sprintf('%02s',$nextNoUrut);
        return $nextNoTransaksi;
      }
    }

    function kode_anggota(){
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select max(kode_anggota) as last from anggota");
      if($query === FALSE) {
        die(mysql_error());
      }else{
        $data=mysqli_fetch_array($query);
        $lastNoFaktur=$data['last'];
        $lastNoUrut=substr($lastNoFaktur,3,3);
        $nextNoUrut=$lastNoUrut+1;
        $nextNoAnggota='ID'.sprintf('%03s',$nextNoUrut);
        return $nextNoAnggota;
      }
    }

    function kode_petugas_otomatis(){
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select kode_petugas from petugas");

      if($query === FALSE) {
        die(mysql_error());
      }else{
        $data=mysqli_fetch_array($query);
        $jumlah_data = mysqli_num_rows($query);
        $nilaikode = substr($jumlah_data[0], 1);
        $kode = (int) $nilaikode;
        $kode = $jumlah_data + 1;
        $kode_otomatis = "US".str_pad($kode, 3, "0", STR_PAD_LEFT);
        return $kode_otomatis;
      }
    }

    function kode_dvd_otomatis(){
      $today=date('y');
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select kode_dvd from dvd");
      if($query === FALSE) {
        die(mysql_error());
      }else{
        $data=mysqli_fetch_array($query);
        $jumlah_data = mysqli_num_rows($query);
        $nilaikode = substr($jumlah_data[0], 1);
        $kode = (int) $nilaikode;
        $kode = $jumlah_data + 1;
        $kode_otomatis = "DVD".$today.str_pad($kode, 3, "0", STR_PAD_LEFT);
        return $kode_otomatis;
      }
    }

    function kode_buku($pengarang){
      $today=date('y');
      $str = substr($pengarang,0,3);
      $str = strtoupper($str);
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli, "select max(kode_buku) as last from buku where kode_buku like '%$str%'");
      if($query === FALSE) {
        die(mysql_error());
      }else{
        $data=mysqli_fetch_array($query);
        $last=$data['last'];
        $sub_no=substr($last,5,3);
        $no=$sub_no+1;
        $kode=$today.$str.sprintf('%03s',$no);
        return $kode;
      }
    }

    function delete_all_tmp(){
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query1=mysqli_query($mysqli, "delete from tmp_buku");
      $query2=mysqli_query($mysqli, "delete from tmp_dvd");
    }

    function detail_pinjam($kode,$table,$qry){
      $this->db->select("*");
      $this->db->from("detail_peminjaman");
      $this->db->where("kode_peminjaman",$kode);
      $this->db->join($table,$qry);
      return $this->db->get();
    }

    function update_column($qry)
    {
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli,$qry);

    }
    function qry($qry)
    {
      $mysqli=mysqli_connect("localhost","root","","db_balepustaka");
      $query=mysqli_query($mysqli,$qry);
      return $query;
    }


  }
