<?php

  class C_buku extends CI_Controller
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
      $data['buku'] = $this->m_balepustaka->get_data('buku')->result();
  		$this->template->display('v_buku/v_tampil_buku',$data);
  	}

    function tambah_buku(){
      $data=array(
        'kode_buku'=> '',
        'judul_buku'=> '',
        'penulis'=> '',
        'penerbit'=> '',
        'tahun'=> '',
        'klasifikasi'=> '',
        'stock'=> '',
        'no_rak'=> '',
        'tanggal'=> '',
        'status'=> array(
          'level' => $this->session->userdata('status')),
      );
      $this->template->display('v_buku/v_tambah_buku',$data);
    }

    function p_tambah_buku()
    {
      $this->db->get('buku');
      $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: -14px;font-size:10px;">', '</div>');
      /*
      $this->form_validation->set_rules('kode', 'Kode Buku', 'is_unique[buku.kode_buku]|required|min_length[3]|max_length[8]',
      array(
        'required'      => '%s is required.',
        'is_unique'     => '%s already exists.'
      ));
      */
      $this->form_validation->set_rules('judul', '', 'required|max_length[50]');
      $this->form_validation->set_rules('penulis', '', 'required|max_length[30]|min_length[3]');
      $this->form_validation->set_rules('penerbit', '', 'max_length[30]');
      $this->form_validation->set_rules('klasifikasi', '', 'max_length[7]');
      $this->form_validation->set_rules('rak', '', 'is_natural_no_zero');
      $data=array(
        'kode_buku'=> $this->m_balepustaka->kode_buku($this->input->post('penulis')),
        'judul_buku'=> $this->input->post('judul'),
        'penulis'=> $this->input->post('penulis'),
        'penerbit'=> $this->input->post('penerbit'),
        'tahun'=> $this->input->post('tahun'),
        'klasifikasi'=> $this->input->post('klasifikasi'),
        'stock'=> $this->input->post('stock'),
        'no_rak'=> $this->input->post('rak'),
        'tanggal'=> date('Y-m-d'),
      );
      if ($this->form_validation->run() == FALSE) {
        //jika validasi gagal
        $this->template->display('v_buku/v_tambah_buku',$data);
      } else {
        $this->m_balepustaka->insert_data($data,'buku');
        echo "<script>alert('Buku Telah Ditambahkan')</script>";
        echo '<script type="text/javascript">window.location = "../c_buku"</script>';
        //redirect('c_buku/index');
        //header("location: ".base_url('index.php/c_buku/'));
      }
    }

    function hapus_buku($kode_buku)
    {
      $where = array('kode_buku'=>$kode_buku);
      $this->m_balepustaka->delete_data($where,'buku');
      redirect('c_buku/index');
    }

    function edit_buku($kode_buku)
    {
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $where = array('kode_buku'=>$kode_buku);
      $data['buku']= $this->m_balepustaka->get_where_data($where,'buku')->result();
      $this->template->display('v_buku/v_edit_buku',$data);
    }

    function p_edit_buku()
    {

      $data=array(
        'kode_buku'=> $this->input->post('kode'),
        'judul_buku'=> $this->input->post('judul'),
        'penulis'=> $this->input->post('penulis'),
        'penerbit'=> $this->input->post('penerbit'),
        'tahun'=> $this->input->post('tahun'),
        'klasifikasi'=> $this->input->post('klasifikasi'),
        'stock'=> $this->input->post('stock'),
        'no_rak'=> $this->input->post('rak')
      );

      $where = array('kode_buku'=>$this->input->post('kode'));
      $this->m_balepustaka->update_data($where, $data,'buku');
      echo "<script>alert('Buku Telah Diupdate')</script>";
      echo '<script type="text/javascript">window.location = "../c_buku"</script>';
    }

    function cetak_buku(){
      $data['buku'] = $this->m_balepustaka->get_data('buku')->result();
      $this->load->view('v_buku/v_cetak_buku',$data);
    }

    function a(){
      $pengarang = 'maklampir';
      $data['pengarang']=$this->m_balepustaka->kode_buku($pengarang);
      $this->load->view('coba',$data);
    }


  }
