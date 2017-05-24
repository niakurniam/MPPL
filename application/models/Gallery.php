<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Model{

    function __construct()
    {
        parent::__construct();
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
}
