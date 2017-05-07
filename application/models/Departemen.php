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
}
