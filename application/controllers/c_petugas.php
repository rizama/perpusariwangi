<?php

  class C_petugas extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->library(array('template','upload','form_validation'));
      $this->load->helper('url');
      $this->load->model('m_balepustaka');

      if($this->session->userdata['status'] != "admin"){
      	echo "<script>alert('Anda Tidak Berhak Mengakses Halaman ini!')</script>";
        echo '<script type="text/javascript">window.location = "../c_home"</script>';
      }
    }

    function index()
    {
      $status = array(
      'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $data['petugas'] = $this->m_balepustaka->get_data("petugas where status !='admin'")->result();
  		$this->template->display('v_petugas/v_tampil_petugas',$data);
    }

    function tambah_petugas()
    {
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $kode=$this->m_balepustaka->kode_petugas_otomatis();
      $data = array(
        'kode_petugas' => $kode,
        'nama'=> '',
        'tanggal_lahir'=>'',
        'jenis_kelamin'=> '',
        'alamat'=> '',
        'telepon'=> '',
        'username'=> '',
        'password'=> '',
        'image'=>'',
        'status'=> array(
          'level' => $this->session->userdata('status'),
        )
      );
      $this->template->display('v_petugas/v_tambah_petugas',$data);
    }

    function p_tambah_petugas()
    {
      //setting konfiguras upload image
      $config['upload_path'] = './assets/images/petugas/';
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
      $this->form_validation->set_rules('username', '', 'required|max_length[30]|min_length[3]');
      $this->form_validation->set_rules('password', '', 'required|max_length[30]|min_length[3]');
      $kode=$this->input->post('kode');
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $data=array(
        'kode_petugas'=> $this->input->post('kode'),
        'nama'=> $this->input->post('nama'),
        'tanggal_lahir'=> $this->input->post('tanggal_lahir'),
        'jenis_kelamin'=> $this->input->post('jk'),
        'alamat'=> $this->input->post('alamat'),
        'telepon'=> $this->input->post('telepon'),
        'username'=> $this->input->post('username'),
        'password'=> $this->input->post('password'),
        'image'=> $image
      );
      if ($this->form_validation->run() == FALSE) {
        //jika validasi gagal
        $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
        $this->template->display('v_petugas/v_tambah_petugas',$data);
      } else {
        $this->m_balepustaka->insert_data($data,'petugas');
        redirect('c_petugas/index');
      }
    }

    function hapus_petugas($kode_petugas)
    {
      $where = array('kode_petugas'=>$kode_petugas);
      $this->m_balepustaka->delete_data($where,'petugas');
      redirect('c_petugas/index');
    }

    function edit_petugas($kode_petugas)
    {
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $where = array('kode_petugas'=>$kode_petugas);
      $data['petugas']= $this->m_balepustaka->get_where_data($where,'petugas')->result();
      $this->template->display('v_petugas/v_edit_petugas',$data);
    }

    function p_edit_petugas()
    {
      //setting konfiguras upload image
      $config['upload_path'] = './assets/images/petugas/';
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
      $this->form_validation->set_rules('nama', '', 'required|max_length[30]|min_length[3]');
      $this->form_validation->set_rules('alamat', '', 'required');
      $this->form_validation->set_rules('telepon', '', 'required|regex_match[/^[0-9]/]|min_length[10]|max_length[13]');
      $this->form_validation->set_rules('username', '', 'required|max_length[30]|min_length[3]');
      $this->form_validation->set_rules('password', '', 'required|max_length[30]|min_length[3]');
      $kode=$this->input->post('kode');
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $data=array(
        'kode_petugas'=> $this->input->post('kode'),
        'nama'=> $this->input->post('nama'),
        'alamat'=> $this->input->post('alamat'),
        'telepon'=> $this->input->post('telepon'),
        'username'=> $this->input->post('username'),
        'password'=> $this->input->post('password'),
        'image'=> $image
      );
      if ($this->form_validation->run() == FALSE) {
        //jika validasi gagal
        echo "<script>alert('Masukan Data Dengan Benar')</script>";
        echo ("<script type='text/javascript'>window.location.href = 'edit_petugas/$kode'</script>");
      } else {
        $where = array('kode_petugas'=>$this->input->post('kode'));

        $this->m_balepustaka->update_data($where, $data,'petugas');
        redirect('c_petugas/index');
      }
    }

    function detail_petugas($kode){
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $where = array('kode_petugas'=>$kode);
      $data['petugas']= $this->m_balepustaka->get_where_data($where,'petugas')->result();
      $this->template->display('v_petugas/v_detail_petugas',$data);
    }

  }
