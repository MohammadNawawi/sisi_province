<?php
class M_pages extends CI_Model{

	function get_province(){
		$hasil=$this->db->query("SELECT * FROM province");
		return $hasil;
	}

	function get_city($id){
		$hasil=$this->db->query("SELECT * FROM city WHERE province_id='$id'");
		return $hasil->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}	

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}