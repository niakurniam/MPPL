<?php

/**
*
*/
class Anggota extends CI_Model
{

	function login($cek)
	{
		$cek_ada = $this->db->get_where('anggota', $cek);
		return $cek_ada;
	}

	public  function list_anggota(){

		$list = $this->db->query("select * from anggota inner join role on anggota.role=role.id_role");
		#$list = $this->db->query("select * from anggota");
		return $list->result();
	}

	public function get_id($NRP){
		return $this->db->get_where('anggota',array('NRP' => $NRP));
	}

	public function get_data_role($NRP){

		$role = $this->db->query("select * from anggota inner join role on anggota.role=role.id_role where anggota.NRP = '$NRP' ");
		return $role->result();
	}


	public  function list_role(){

		$list = $this->db->query("select * from role");
		#$list = $this->db->query("select * from anggota");
		return $list->result();
	}

	public function get_list_anggota_tahun($tahun){
		if($tahun == 0)
		{
			$list = $this->db->query("select * from log_anggota, anggota, departemen, kepengurusan where log_anggota.NRP_fk=anggota.NRP and log_anggota.id_departemen_fk = departemen.id_departemen and departemen.id_kepengurusan=kepengurusan.id_kepengurusan");
			return $list->result();

		}
		else{
			$list = $this->db->query("select * from log_anggota, anggota, departemen, kepengurusan where log_anggota.NRP_fk=anggota.NRP and log_anggota.id_departemen_fk = departemen.id_departemen and departemen.id_kepengurusan=kepengurusan.id_kepengurusan and kepengurusan.id_kepengurusan=$tahun");
			return $list->result();
		}
	}

}
