<?php

  class C_peminjaman extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->library(array('form_validation','fpdf','template'));
      $this->load->helper(array('url','form'));
      $this->load->model('m_balepustaka');

      if($this->session->userdata('login') != "TRUE"){
  			redirect(base_url("index.php/c_login"));
  		}
    }

    function index()
    {
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $data['title']="Transaksi Peminjaman";
      $data['tanggalpinjam']=date('Y-m-d');
      $data['tanggalkembali'] = strtotime('+14 day',strtotime($data['tanggalpinjam']));
      $data['noauto']=$this->m_balepustaka->nootomatis();
      $data['anggota']=$this->m_balepustaka->get_data('anggota')->result();
      $data['buku']=$this->db->query('SELECT * from buku where stock!=0')->result();
      $data['dvd']=$this->db->query('SELECT * from dvd where stock!=0')->result();
      $data['tanggalkembali'] = date('Y-m-d', $data['tanggalkembali']);
      $this->m_balepustaka->delete_all_tmp();
      $this->template->display('v_peminjaman/v_peminjaman',$data);
    }

    function cari_anggota(){
      $where=$this->input->post('kode_anggota');
      $cek=$this->db->query("select kode_anggota from head_peminjaman where kode_anggota='$where' and keterangan='Belum Kembali'");
      $today=date('Y-m-d');
      $tanggal_daftar=$this->db->query("SELECT tanggal_daftar from anggota where kode_anggota='$where'");
      if($tanggal_daftar->num_rows()>0){
        $tanggal_daftar=$tanggal_daftar->row_array();
        $a=$tanggal_daftar['tanggal_daftar'];
        $valid_member =strtotime ( '+1 year' , strtotime ($a));
        $valid_member =date ( 'Y-m-d' , ($valid_member));
        if ($valid_member>$today) {
          $status='Active';
        }else{
          $status='Banned';
        }
      }
      if($status=='Banned'){
        echo '';
       //"<script>alert('Peminjaman Sebelumnya Belum Kembali')</script>";
     }elseif ($cek->num_rows()>0) {
       echo 'a';
     }
     else{
        $anggota=$this->m_balepustaka->select_where_data($where,"kode_anggota","anggota");
        if($anggota->num_rows()>0){
          $anggota=$anggota->row_array();
          echo $anggota['nama'].'|'.$anggota['alamat'].'|'.$anggota['telepon'];
        }
      }
    }

    function cari_buku(){
      $where=$this->input->post('kode_buku');
      $buku=$this->m_balepustaka->select_where_data($where,'kode_buku','buku');
      if($buku->num_rows()>0){
        $buku=$buku->row_array();
        echo $buku['judul_buku'];
      }
    }

    function cari_dvd(){
      $where=$this->input->post('kode_dvd');
      $dvd=$this->m_balepustaka->select_where_data($where,'kode_dvd','dvd');
      if($dvd->num_rows()>0){
        $dvd=$dvd->row_array();
        echo $dvd['judul_dvd'];
      }
    }

    function tambah_buku(){
      $where=$this->input->post('kode_buku');
      $cek=$this->m_balepustaka->select_where_data($where,'kode_buku','tmp_buku');
      if($cek->num_rows()<1){
        $data=array(
          'kode_buku'=>$this->input->post('kode_buku'),
          'judul_buku'=>$this->input->post('judul_buku'),
          'penulis'=>$this->input->post('penulis')
        );
        $this->m_balepustaka->insert_data($data,'tmp_buku');
      }
    }

    function tampil_buku(){
      $data['tmp_buku']=$this->m_balepustaka->get_data('tmp_buku')->result();
      $data['jumlahTmp']=$this->m_balepustaka->jumlahTmp('tmp_buku');
      $this->load->view('v_peminjaman/v_tampil',$data);
    }

    function hapus_buku(){
      $where=$this->input->post('kode');
      $this->m_balepustaka->delete_data_tmp($where,'tmp_buku','kode_buku');
    }

    function hapus_dvd(){
      $where=$this->input->post('kode');
      $this->m_balepustaka->delete_data_tmp($where,'tmp_dvd','kode_dvd');
    }

    function tambah_dvd(){
      $where=$this->input->post('kode_dvd');
      $cek=$this->m_balepustaka->select_where_data($where,'kode_dvd','tmp_dvd');
      if($cek->num_rows()<1){
        $data=array(
          'kode_dvd'=>$this->input->post('kode_dvd'),
          'judul_dvd'=>$this->input->post('judul_dvd'),
          'tahun'=>$this->input->post('tahun')
      );

      $this->m_balepustaka->insert_data($data,'tmp_dvd');

      }
    }

    function tampil_dvd(){
      $data['tmp_dvd']=$this->m_balepustaka->get_data('tmp_dvd')->result();
      $data['jumlahTmpDvd']=$this->m_balepustaka->jumlahTmp('tmp_dvd');
      $this->load->view('v_peminjaman/v_tampil_dvd',$data);
    }

    function sukses(){
      $head=array(
        'kode_peminjaman'=>$this->input->post('nomer'),
        'kode_anggota'=>$this->input->post('kode_anggota'),
        'tanggal'=>$this->input->post('pinjam'),
        'tanggal_kembali'=>$this->input->post('kembali'),
        'kode_petugas'=>$this->session->userdata('kode')
      );
      $this->m_balepustaka->insert_data($head,'head_peminjaman');

      $tmp_buku=$this->m_balepustaka->get_data('tmp_buku')->result();
      foreach($tmp_buku as $row){
        $buku=array(
          'kode_peminjaman'=>$this->input->post('nomer'),
          'kode_buku'=>$row->kode_buku
        );
        $this->m_balepustaka->insert_data($buku,'detail_peminjaman');
        $this->m_balepustaka->update_column("update buku set stock=stock-1 where kode_buku='$row->kode_buku'");
      }

      $tmp_dvd=$this->m_balepustaka->get_data('tmp_dvd')->result();
      foreach($tmp_dvd as $row){
        $dvd=array(
          'kode_peminjaman'=>$this->input->post('nomer'),
          'kode_dvd'=>$row->kode_dvd
        );
        $this->m_balepustaka->insert_data($dvd,'detail_peminjaman');
        $this->m_balepustaka->update_column("update dvd set stock=stock-1 where kode_dvd='$row->kode_dvd'");
      }
    }

    function cetak_peminjaman($kode_peminjaman){
      $where = array('kode_peminjaman'=>$kode_peminjaman);
      $data['cetak']= $this->m_balepustaka->get_where_data($where,'head_peminjaman')->result();
      $this->load->view('v_peminjaman/v_cetak_peminjaman',$data);
    }
  }
