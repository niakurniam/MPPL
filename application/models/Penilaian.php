<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Model {

  public function getListEvent(){
		$result = array();
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->order_by('nama_event','ASC');
		$array_keys_values = $this->db->get();
		foreach ($array_keys_values->result() as $row)
		{
			$result[0]= '-Pilih Event-';
			$result[$row->id_event]= $row->nama_event;
		}
		return $result;
	}

	public function getListDepartemen(){
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

  public function get_id($id_event){
		$nilai = $this->db->query("select penilaian.*,kegiatan.nama_event from penilaian,kegiatan
    where kegiatan.id_event=penilaian.id_event ");
		return $nilai->result();
	}

}
