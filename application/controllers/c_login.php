<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_balepustaka');

	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses_login()
	{
		//ambil data
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//Kondisi
		$where = array(
			'username' => $username,
		 	'password' => $password
		);
		$cek = $this->m_balepustaka->get_where_data($where,'petugas')->num_rows();
		if ($cek > 0){
			$data = $this->m_balepustaka->get_where_data($where,'petugas')->result();
			foreach ($data as $data) {
				$level=$data->status;
				$kode=$data->kode_petugas;
			}

			$this->session->set_userdata(
			array(
				'username'=> $username,
				'login'=> TRUE,
				'status'=> $level,
				'kode'=> $kode
			));
			redirect(base_url("c_home"));
			
		}else {

			echo "<script>alert('Gagal Login!')</script>";
			$this->load->view('v_login');
		}
		}


	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('c_login'));
	}
}
