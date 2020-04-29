<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
	}
	function index(){
		if($this->session->userdata('akses')=='1'){
			$this->load->view('admin/v_dashboard');
		}else{
			redirect('administrator');
		}
	
	}
	
}