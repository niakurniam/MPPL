<?php

/**
* 
*/
class Kegiatan extends CI_Model{

	function event_today(){
		$curr_date = date("Y-m-d");
		//$curr_time = date("H:i", time());
		//ambil data event dari tabel DEvent
		$listevent = $this->db->query("select nama_event, tanggal_mulai, jam_mulai, tanggal_selesai, jam_selesai, tempat from kegiatan where tanggal_mulai = '$curr_date'");
		return $listevent->result();
	}

}

