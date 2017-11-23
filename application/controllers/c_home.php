<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

  function __construct()
  {
		parent::__construct();
		$this->load->library('template');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('m_balepustaka');

		if($this->session->userdata('login') != 1){
			redirect(base_url("c_login"));
		}
	}

	function index(){
		$status = array(
			'level' => $this->session->userdata('status')
		);
	   $data['status'] = $status;

	   $where = array(
	    	'kode_petugas'=>$this->session->userdata('kode')
	    );
	   $data['petugas']= $this->m_balepustaka->get_where_data($where,'petugas')->result();
     $data['buku']=$this->m_balepustaka->qry("select * from buku order by tanggal desc limit 5");
	   $data['anggota']=$this->m_balepustaka->qry("select * from anggota order by tanggal_daftar desc limit 5");
	   $data['dvd']=$this->m_balepustaka->qry("select * from dvd order by tanggal desc limit 5");
		$this->template->display('v_home',$data);
	}

  function time(){
    date_default_timezone_set("Asia/Jakarta");
    echo date("h : i : s a");
  }
}
