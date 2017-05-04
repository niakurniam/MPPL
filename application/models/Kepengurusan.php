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

	function tampil_tahun_kepengurusan()
	{
		$listtahun = $this->db->query("select tahun_mulai, tahun_berakhir from kepengurusan order by tahun_mulai asc");
		return $listtahun->result();
	}

}

