<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departemen_controller extends CI_Controller {

	public function list_departemen_event()
	{
		$data['listdept'] = $this->Departemen->tampil_departemen();
		//print_r($data);
		$this->load->view('user/tambah_event',$data);
	}
}