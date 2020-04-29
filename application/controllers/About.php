<?php
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_profil');
	}
	function index(){
		$x['profil'] = $this->m_profil->get_all_profil();
		$this->load->view('depan/about',$x);
	}
}
