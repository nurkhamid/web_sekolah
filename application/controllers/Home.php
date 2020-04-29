<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_files');
		$this->load->model('m_guru');
		$this->load->model('m_profil');
	}
	function index(){
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['guru'] = $this->m_guru->guru_home();
			$x['profil'] = $this->m_profil->get_all_profil();
			$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$this->load->view('depan/home',$x);
	}

}
