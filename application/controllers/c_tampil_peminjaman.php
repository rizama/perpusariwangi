<?php

  class C_tampil_peminjaman extends CI_Controller
  {
    function __construct()
    {
  		parent::__construct();
      $this->load->library(array('template','upload','fpdf','form_validation'));
      $this->load->helper(array('url','form'));
      $this->load->model('m_balepustaka');

      if($this->session->userdata('login') != "TRUE"){
  			redirect(base_url("index.php/c_login"));
  		}
  	}

    function index(){
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $this->m_balepustaka->delete_all_tmp();
      $data['head_peminjaman'] = $this->m_balepustaka->get_data('head_peminjaman')->result();
      // $banyak = count($data['head_peminjaman']);
      // $table = 'anggota';
      // $dataAnggota = 'nama';
      // $where = array();
      // // $nama = array();
      // echo '<pre>';
      // // for ($i = 0; $i < $banyak; $i++) {
      // //   $dataAnggota[] = $data['head_peminjaman'][$i]->kode_anggota;
      // //   // echo print_r($data['head_peminjaman'][$i]->kode_anggota);
      // // }
      // // foreach ($dataAnggota as $key) {
      // //   echo $key;
      // //   echo "<br>";
      // // }
      // echo '</pre>';
      //
      // for ($i = 0; $i < $banyak; $i++) {
      //   $where[$i] = $data['head_peminjaman'][$i]->kode_anggota;
      // }
      // for ($i = 0; $i < $banyak; $i++) {
      //   $nama[] = $this->m_balepustaka->select_where_data($where[$i],$dataAnggota,$table)->result();
      // }
      // echo '<pre>';
      // foreach ($nama as $key => $value) {
      //   # code...
      // }
      // echo '</pre>';
      // die();
  		$this->template->display('v_peminjaman/v_tampil_peminjaman',$data);
  	}

    function view_detail($kode){
      $status = array(
      'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $where = array('kode_peminjaman'=>$kode);
      $data['head_peminjaman']= $this->m_balepustaka->get_where_data($where,'head_peminjaman')->result();
      $data['detail_buku']=$this->m_balepustaka->detail_pinjam($kode,'buku','buku.kode_buku=detail_peminjaman.kode_buku')->result();
      $data['detail_dvd']=$this->m_balepustaka->detail_pinjam($kode,'dvd','dvd.kode_dvd=detail_peminjaman.kode_dvd')->result();
      $this->template->display('v_peminjaman/v_detail_peminjaman',$data);
    }

    function pengembalian(){
      $kode=$this->input->post('kode_peminjaman');
      $cek=$this->m_balepustaka->select_where_data($kode,'kode_peminjaman','pengembalian');
      if($cek->num_rows()>0){
        echo "<script>alert('Tidak Ada Peminjaman')</script>";
        echo '<script type="text/javascript">window.location = "../c_tampil_peminjaman"</script>';
      }else{
        $data=array(
          'kode_pengembalian'=>$this->m_balepustaka->kode_pengembalian_otomatis(),
          'kode_peminjaman'=>$kode,
          'tanggal'=>date('Y-m-d'),
          'denda'=>$this->input->post('denda'),
          'kode_petugas'=>$this->session->userdata('kode')
        );
        $buku=$this->m_balepustaka->detail_pinjam($kode,'buku','buku.kode_buku=detail_peminjaman.kode_buku')->result();
        foreach($buku as $row){
          $this->m_balepustaka->update_column("update buku set stock=stock+1 where kode_buku='$row->kode_buku'");
        }
        $dvd=$this->m_balepustaka->detail_pinjam($kode,'dvd','dvd.kode_dvd=detail_peminjaman.kode_dvd')->result();
        foreach($dvd as $dvd){
          $this->m_balepustaka->update_column("update dvd set stock=stock+1 where kode_dvd='$dvd->kode_dvd'");
        }
        $this->m_balepustaka->insert_data($data,'pengembalian');
        echo "<script>alert('Peminjaman Telah Dikembalikan')</script>";
        echo '<script type="text/javascript">window.location = "../c_tampil_peminjaman"</script>';
      }
    }

    function perpanjang($kode){
      $where = array('kode_peminjaman'=>$kode);
      $data['head_peminjaman']= $this->m_balepustaka->get_where_data($where,'head_peminjaman')->result();
      $data['detail_buku']=$this->m_balepustaka->detail_pinjam($kode,'buku','buku.kode_buku=detail_peminjaman.kode_buku')->result();
      $data['detail_dvd']=$this->m_balepustaka->detail_pinjam($kode,'dvd','dvd.kode_dvd=detail_peminjaman.kode_dvd')->result();
      $data['noauto']=$this->m_balepustaka->nootomatis();
      $data['tanggalpinjam']=date('Y-m-d');
      $data['tanggalkembali'] = strtotime('+14 day',strtotime($data['tanggalpinjam']));
      $data['buku']=$this->m_balepustaka->get_data('buku')->result();
      $data['dvd']=$this->m_balepustaka->get_data('dvd')->result();
      $data['tanggalkembali'] = date('Y-m-d', $data['tanggalkembali']);


      foreach ($data['detail_buku'] as $b) {
        $cek=$this->m_balepustaka->select_where_data($b->kode_buku,'kode_buku','tmp_buku');
        if($cek->num_rows()<1){

        $detail_buku=array(
          'kode_buku'=>$b->kode_buku,
          'judul_buku'=>$b->judul_buku,
          'penulis'=>$b->penulis
        );

        $this->m_balepustaka->insert_data($detail_buku,'tmp_buku');

      }

      }
      foreach ($data['detail_dvd'] as $d) {
        $cekdvd=$this->m_balepustaka->select_where_data($d->kode_dvd,'kode_dvd','tmp_dvd');

        if($cekdvd->num_rows()<1){

          $detail_dvd=array(
            'kode_dvd'=>$d->kode_dvd,
            'judul_dvd'=>$d->judul_dvd,
            'tahun'=>$d->tahun
          );
          $this->m_balepustaka->insert_data($detail_dvd,'tmp_dvd');
        }
      }

      $this->template->display('v_peminjaman/v_perpanjang',$data);

    }

    function cari_anggota(){
      $where=$this->input->post('kode_anggota');

        $anggota=$this->m_balepustaka->select_where_data($where,"kode_anggota","anggota");
        if($anggota->num_rows()>0){
          $anggota=$anggota->row_array();
          echo $anggota['nama'];
      }
    }

    function sukses(){
      $pengembalian=array(
        'kode_pengembalian'=>$this->m_balepustaka->kode_pengembalian_otomatis(),
        'kode_peminjaman'=>$this->input->post('kode_peminjaman'),
        'tanggal'=>date('Y-m-d'),
        'denda'=>$this->input->post('denda'),
        'kode_petugas'=>$this->session->userdata('kode')
      );
      $this->m_balepustaka->insert_data($pengembalian,'pengembalian');
      $p_buku=$this->m_balepustaka->detail_pinjam($this->input->post('kode_peminjaman'),'buku','buku.kode_buku=detail_peminjaman.kode_buku')->result();
      foreach($p_buku as $row){
        $this->m_balepustaka->update_column("update buku set stock=stock+1 where kode_buku='$row->kode_buku'");
      }
      $p_dvd=$this->m_balepustaka->detail_pinjam($this->input->post('kode_peminjaman'),'dvd','dvd.kode_dvd=detail_peminjaman.kode_dvd')->result();
      foreach($p_dvd as $dvd){
        $this->m_balepustaka->update_column("update dvd set stock=stock+1 where kode_dvd='$dvd->kode_dvd'");
      }

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
  }
