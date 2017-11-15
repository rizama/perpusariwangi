<?php
  class C_help extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->library('template');
      $this->load->helper(array('url','form'));
      $this->load->model('m_balepustaka');

      if ($this->session->userdata('login')!='TRUE') {
        redirect(base_url("index.php/c_login"));
      }
    }

    function index(){
      $status = array(
        'level' => $this->session->userdata('status')
      );
      $data['status'] = $status;
      $this->template->display('v_help',$data);
    }
  }
?>
