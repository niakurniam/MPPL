<?php

/**
* 
*/
class Kepengurusan extends CI_Model{

	function tampil_kepengurusan(){
		//ambil data event dari tabel DEvent
		$listkepengurusan = $this->db->query("select nama_kepengurusan, tahun_mulai, tahun_berakhir from kepengurusan order by tahun_mulai asc");
		return $listkepengurusan->result();
	}

	function tampil_dd_kepengurusan()
	{
		$ddkepengurusan = $this->db->query("select tahun_mulai, tahun_berakhir from kepengurusan order by tahun_mulai asc");
		return $ddkepengurusan->result();
	}


	function list_kepengurusan(){
		$list = $this->db->query("select * from kepengurusan"); 
		return $list->result();
	}


	function hapus_kepengurusan($id)
	{
		$id = $_GET['id'];
		$this->db->where('id_kepengurusan', $id);
		$this->db->delete('kepengurusan');
	}

}

