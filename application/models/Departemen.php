<?php

/**
* 
*/
class Departemen extends CI_Model{

	function tampil_departemen()
	{
		$listdept = $this->db->query("select nama_departemen from departemen where order by nama_departemen asc");
		return $listdept->result(); 
	}

	function show_all_dept(){
		$this->db->select('*');
		$this->db->from('departemen');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		} 
		else {
			return false;
		}
	}

	function show_dept_by_id($id) {

		$this->db->select('d.nama_departemen');
		$this->db->from('departemen d, kepengurusan k');
		$this->db->where('d.id_kepengurusan = k.id_kepengurusan');

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} 
		else {
			return false;
		}
	}
}