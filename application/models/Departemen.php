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

	/*public function get_departemen()
	{
		$query = $this->db->get('departemen');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function get_list($kepengurusan)
	{
		$this->db->select('departemen.id_departemen', 'departemen.nama_departemen');
		$this->db->from('departemen');
		$this->db->join('kepengurusan', 'kepengurusan.id_kepengurusan = departemen.id_kepengurusan');
		$this->db->where(['kepengurusan.id_kepengurusan'=>$kepengurusan]);
		$query = $this->db->get();
		return $query->result();
	}*/

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
