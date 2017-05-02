<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event_controller extends CI_Controller {

	public function list_event_today()
	{
		$data['listevent'] 	= $this->Kegiatan->event_today();
		//print_r($data);
		$this->load->view('admin/dashboard', $data);
	}

	public function list_event_today2()
	{
		$data['listevent'] 	= $this->Kegiatan->event_today();
		//print_r($data);
		$this->load->view('user/dashboard',$data);
	}
}

