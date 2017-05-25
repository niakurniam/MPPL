<?php

/**
*
*/
class Kegiatan extends CI_Model{

	var $tabel_kegiatan='kegiatan';

	function event_today(){
		$curr_date = date("Y-m-d");
		//$curr_time = date("H:i", time());
		//ambil data event dari tabel DEvent
		$listevent = $this->db->query("select nama_event, tanggal_mulai, jam_mulai, tanggal_selesai, jam_selesai, tempat from kegiatan where tanggal_mulai = '$curr_date'");
		return $listevent->result();
	}

	public function list_kegiatan()
	{
		$kegiatan = $this->db->query('select * from kegiatan');
		return $kegiatan->result();
	}

	public function show_event_by_date($date) {
		$listtahun = $this->db->query("select * from kegiatan where tanggal_mulai = '$date' ");
		return $listtahun->result();
	}

	function getListKepengurusan(){
		$result = array();
		$this->db->select('*');
		$this->db->from('kepengurusan');
		$this->db->order_by('nama_kepengurusan','ASC');
		$array_keys_values = $this->db->get();
		foreach ($array_keys_values->result() as $row)
		{
			$result[0]= '-Pilih Kepengurusan-';
			$result[$row->id_kepengurusan]= $row->nama_kepengurusan;
		}
		return $result;
	}

	function getListDepartemen(){
		$id_kepengurusan = $this->input->post('id_kepengurusan');
		$result = array();
		$this->db->select('*');
		$this->db->from('departemen');
		$this->db->where('id_kepengurusan',$id_kepengurusan);
		$this->db->order_by('nama_departemen','ASC');
		$array_keys_values = $this->db->get();
		foreach ($array_keys_values->result() as $row)
		{
			$result[0]= '-Pilih Departemen-';
			$result[$row->id_departemen]= $row->nama_departemen;
		}
		return $result;
	}

	public function get_data_id($id_event){
		return $this->db->get_where('kegiatan',array('id_event' => $id_event));
	}

	public function get_id($id_event){
		$nilai = $this->db->query("select * from penilaian where id_event_fk= $id_event");
		return $nilai->result();
	}

	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}
