<?php

/**
*
*/
class Departemen extends CI_Model{

	public function tampil_departemen()
	{
		$listdept = $this->db->query("select nama_departemen from departemen where order by nama_departemen asc");
		return $listdept->result();
	}

	public function list_departemen(){
		$list = $this->db->query("select * from departemen");
		return $list->result();
	}

	public function get_data_id($id_departemen){
		return $this->db->get_where('departemen',array('id_departemen' => $id_departemen));
	}

	public function get_id($tahun){

		if($tahun == 0)
		{
			$list = $this->db->query("select * from departemen");
			return $list->result();

		}
		else{
			$list = $this->db->query("select * from departemen where id_kepengurusan= $tahun");
			return $list->result();
		}
	}

	public function get_data_tahun($id_departemen){

		$listtahun = $this->db->query("select * from departemen inner join kepengurusan
		on departemen.id_kepengurusan=kepengurusan.id_kepengurusan where departemen.id_departemen = '$id_departemen' ");
		return $listtahun->result();
	}
}
