<?php

  class C_dvd extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->library(array('template','upload','fpdf'));
      $this->load->helper(array('url','form'));
      $this->load->model('m_balepustaka');
      $this->load->library('form_validation');

      if($this->session->userdata('login') != "TRUE"){
  			redirect(base_url("index.php/c_login"));
  		}
    }

    function index()
    {
      $data['dvd'] = $this->m_balepustaka->get_data('dvd')->result();
  		$this->template->display('v_dvd/v_tampil_dvd',$data);
  	}

    function tambah_dvd()
    {
      $kode=$this->m_balepustaka->kode_dvd_otomatis();
      $data = array('kode_dvd' => $kode,
      'judul_dvd'=> '',
      'tahun'=> '',
      'stock'=> '');
      $this->template->display('v_dvd/v_tambah_dvd',$data);
    }

    function p_tambah_dvd()
    {
      $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: -14px;font-size:10px;">', '</div>');
      $this->form_validation->set_rules('judul', '', 'required|max_length[30]');
      $data=array(
        'kode_dvd'=> $this->input->post('kode'),
        'judul_dvd'=> $this->input->post('judul'),
        'tahun'=> $this->input->post('tahun'),
        'stock'=> $this->input->post('stock'),
        'tanggal'=> date('Y-m-d')
      );
      if ($this->form_validation->run() == FALSE) {
        //jika validasi gagal
        $this->template->display('v_dvd/v_tambah_dvd',$data);
      } else {
        $this->m_balepustaka->insert_data($data,'dvd');
        echo "<script>alert('DVD Telah Ditambahkan')</script>";
        echo '<script type="text/javascript">window.location = "../c_dvd"</script>';
      }
    }

    function hapus_dvd($kode_dvd)
    {
      $where = array('kode_dvd'=>$kode_dvd);
      $this->m_balepustaka->delete_data($where,'dvd');
      redirect('c_dvd/index');
    }

    function edit_dvd($kode_dvd)
    {
      $where = array('kode_dvd'=>$kode_dvd);
      $data['dvd']= $this->m_balepustaka->get_where_data($where,'dvd')->result();
      $this->template->display('v_dvd/v_edit_dvd',$data);
    }

    function p_edit_dvd()
    {
      $data=array(
        'kode_dvd'=> $this->input->post('kode'),
        'judul_dvd'=> $this->input->post('judul'),
        'tahun'=> $this->input->post('tahun'),
        'stock'=> $this->input->post('stock')
      );

      $where = array('kode_dvd'=>$this->input->post('kode'));
      $this->m_balepustaka->update_data($where, $data,'dvd');
      echo "<script>alert('DVD Telah Diupdate')</script>";
      echo '<script type="text/javascript">window.location = "../c_dvd"</script>';

    }

    function cetak_dvd(){
      $data['dvd'] = $this->m_balepustaka->get_data('dvd')->result();
      $this->load->view('v_dvd/v_cetak_dvd',$data);
    }

  }
