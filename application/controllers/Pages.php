<?php
class Pages extends CI_Controller{
	function __construct(){
		parent::__construct();
		// $this->load->model('m_kategori');
		$this->load->model('m_pages');
	}
	function index(){
		$x['data']=$this->m_pages->get_province();
		$x['province'] = $this->db->get('province')->result_array();
		$x['city'] = $this->db->get('city')->result_array();

		$this->load->view('index',$x);
	}

	function get_city(){
		$id=$this->input->post('id');
		$data=$this->m_pages->get_city($id);
		echo json_encode($data);
	}
	
	public function create(){
		$this->load->view('create');
	}

	function tambah_province(){
		$province = $this->input->post('province');
		
 
		$data = array(
			'name' => $province
			);
		$this->m_pages->input_data($data,'province');
		redirect('pages/index');
	}
	function tambah_city(){
		$city = $this->input->post('city');
		$id = $this->input->post('id');
		
 
		$data = array(
			'name' => $city,
			'province_id' => $id
			);
		$this->m_pages->input_data($data,'city');
		redirect('pages/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['province'] = $this->m_pages->edit_data($where,'province')->result();
		$this->load->view('edit',$data);
	}

	function update(){
		$name = $this->input->post('province');
	
		$data = array(
			'name' => $name
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_pages->update_data($where,$data,'province');
		redirect('pages/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_pages->hapus_data($where,'province');
		redirect('pages/index');
	}
	
}