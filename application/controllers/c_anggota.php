<?php

  class C_anggota extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->library(array('template','upload','fpdf','form_validation'));
      $this->load->helper(array('url','form'));
      $this->load->model('m_balepustaka');

      if($this->session->userdata('login') != "TRUE"){
  			redirect(base_url("c_login"));
  		}
    }

    function index()
    {
      $status = array(
      'level' => $this->session->userdata('status')
    );
     $data['status'] = $status;
      $data['anggota'] = $this->m_balepustaka->get_data('anggota')->result();
  		$this->template->display('v_anggota/v_tampil_anggota',$data);
    }

    function tambah_anggota()
    {
        $status = array(
        'level' => $this->session->userdata('status')
       );
      $data['status'] = $status;
      $kode=$this->m_balepustaka->kode_anggota();
      $data = array('kode_anggota' => $kode,
        'nama'=> '',
        'tanggal_lahir'=> '',
        'jenis_kelamin'=> '',
        'alamat'=> '',
        'telepon'=> '',
        'paroki'=> '',
        'email'=> '',
        'image'=> '',
        'status'=> $status
      );
      $this->template->display('v_anggota/v_tambah_anggota',$data);
    }

    function p_tambah_anggota()
    {
      //setting konfiguras upload image
      $config['upload_path'] = './assets/images/anggota/';
  		$config['allowed_types'] = 'gif|jpg|png';
  		$config['max_size']	= '1000';
  		$config['max_width']  = '2000';
  		$config['max_height']  = '1024';
      $this->upload->initialize($config);
      if(!$this->upload->do_upload('image')){
        $image="";
      }else{
        $image=$this->upload->file_name;
      }
      $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: -14px;font-size:10px;">', '</div>');
      $this->form_validation->set_rules('nama', '', 'required|max_length[30]|min_length[3]');
      $this->form_validation->set_rules('tanggal_lahir', '', 'required');
      $this->form_validation->set_rules('alamat', '', 'required');
      $this->form_validation->set_rules('telepon', '', 'required|regex_match[/^[0-9]/]|min_length[10]|max_length[13]');
      $this->form_validation->set_rules('email', '', 'required|max_length[30]|min_length[3]|valid_email');
      $data=array(
        'kode_anggota'=> $this->input->post('kode'),
        'nama'=> $this->input->post('nama'),
        'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
        'jenis_kelamin'=> $this->input->post('jk'),
        'alamat'=> $this->input->post('alamat'),
        'tanggal_daftar'=> date('Y-m-d'),
        'telepon'=> $this->input->post('telepon'),
        'paroki'=> $this->input->post('paroki'),
        'email'=> $this->input->post('email'),
        'image'=> $image
      );
      if ($this->form_validation->run() == FALSE) {
        //jika validasi gagal
        $this->template->display('v_anggota/v_tambah_anggota',$data);
      } else {
        $this->m_balepustaka->insert_data($data,'anggota');
        redirect('c_anggota/index');
      }
    }

    function hapus_anggota($kode_anggota)
    {
      $where = array('kode_anggota'=>$kode_anggota);
      $this->m_balepustaka->delete_data($where,'anggota');
      redirect('c_anggota/index');
    }

    function edit_anggota($kode_anggota)
    {
      $status = array(
      'level' => $this->session->userdata('status')
    );
     $data['status'] = $status;
      $where = array('kode_anggota'=>$kode_anggota);
      $data['anggota']= $this->m_balepustaka->get_where_data($where,'anggota')->result();
      $this->template->display('v_anggota/v_edit_anggota',$data);
    }

    function p_edit_anggota()
    {
      //setting konfiguras upload image
      $config['upload_path'] = './assets/images/anggota/';
  		$config['allowed_types'] = 'gif|jpg|png';
  		$config['max_size']	= '1000';
  		$config['max_width']  = '2000';
  		$config['max_height']  = '1024';
      $this->upload->initialize($config);
      if(!$this->upload->do_upload('image')){
        $image=$this->input->post('img');
      }else{
        $image=$this->upload->file_name;
      }
      $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: -14px;font-size:10px;">', '</div>');
      $this->form_validation->set_rules('nama', '', 'required|max_length[30]|min_length[3]');
      $this->form_validation->set_rules('tanggal_lahir', '', 'required');
      $this->form_validation->set_rules('alamat', '', 'required');
      $this->form_validation->set_rules('telepon', '', 'required|regex_match[/^[0-9]/]|min_length[10]|max_length[13]');
      $this->form_validation->set_rules('email', '', 'required|max_length[30]|min_length[3]|valid_email');
      $kode=$this->input->post('kode');
      $data=array(
        'kode_anggota'=> $this->input->post('kode'),
        'nama'=> $this->input->post('nama'),
        'jenis_kelamin'=> $this->input->post('jk'),
        'alamat'=> $this->input->post('alamat'),
        'telepon'=> $this->input->post('telepon'),
        'tanggal_daftar'=> $this->input->post('tanggal'),
        'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
        'paroki'=> $this->input->post('paroki'),
        'email'=> $this->input->post('email'),
        'image'=> $image
      );
      if ($this->form_validation->run() == FALSE) {
        //jika validasi gagal
        echo "<script>alert('Masukan Data Dengan Benar')</script>";
        echo ("<script type='text/javascript'>window.location.href = 'edit_anggota/$kode'</script>");
        //header("location: ".base_url('index.php/c_anggota/edit_anggota/'.$this->input->post('kode')));
      } else {
        $where = array('kode_anggota'=>$this->input->post('kode'));

        $this->m_balepustaka->update_data($where, $data,'anggota');
        redirect('c_anggota/index');
      }
    }

    function detail_anggota($kode){
      $status = array(
      'level' => $this->session->userdata('status')
    );
     $data['status'] = $status;
      $where = array('kode_anggota'=>$kode);
      $data['anggota']= $this->m_balepustaka->get_where_data($where,'anggota')->result();
      $this->template->display('v_anggota/v_detail_anggota',$data);
    }

    function cetak_anggota(){
      $status = array(
      'level' => $this->session->userdata('status')
    );
     $data['status'] = $status;
      $data['anggota'] = $this->m_balepustaka->get_data('anggota')->result();
      $this->load->view('v_anggota/v_cetak_anggota',$data);
    }

    function perpanjang($kode){
      $where = array('kode_anggota'=>$kode);
      $today=date('Y-m-d');
      $this->m_balepustaka->qry("UPDATE anggota set tanggal_daftar='$today' where kode_anggota='$kode'");
      echo "<script>alert('ID Telah Diperpanjang')</script>";
      echo '<script type="text/javascript">window.location = "../index"</script>';
    }

  }
