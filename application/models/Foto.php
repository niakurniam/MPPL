<?php

class Foto extends CI_Model
{
	 public function insert($data = array()){
        $insert = $this->db->insert_batch('foto',$data);
        return $insert?true:false;
    }

    public function get_foto($id_departemen){

		if($id_departemen == 0)
		{
			$list = $this->db->query("select * from foto");
			return $list->result();

		}
		else{
			$list = $this->db->query("select * from foto where id_departemen_fk= $id_departemen");
			return $list->result();
		}
	}


}
