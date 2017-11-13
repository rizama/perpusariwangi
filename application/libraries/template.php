<?php
class Template{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
    }

    function display($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        $data['_header']=$this->_CI->load->view('template/v_header',$data,true);
        $this->_CI->load->view('/v_template.php',$data);
    }
}
