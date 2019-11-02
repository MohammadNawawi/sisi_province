<?php
class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();
		// $this->load->model('m_kategori');
		$this->load->model('m_pages');
	}
	function index(){
		$data['data']= 'Admin';
		$this->load->view('admin/index',$data);
	}

	

	
}