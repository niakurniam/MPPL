<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kepengurusan_controller extends CI_Controller {

	public function list_kepengurusan()
	{
		$data['listkepengurusan'] 	= $this->Kepengurusan->tampil_kepengurusan();
		//print_r($data);
		$this->load->view('admin/kepengurusan', $data);
	}

	public function list_kepengurusan2()
	{
		$data['listkepengurusan'] 	= $this->Kepengurusan->tampil_kepengurusan();
		//print_r($data);
		$this->load->view('user/kepengurusan',$data);
	}

	public function list_tahun_user()
	{
		$data['listtahun'] = $this->Kepengurusan->tampil_tahun_kepengurusan();
		//print_r($data);
		$this->load->view('user/anggota',$data);
	}

	public function list_tahun_departemen()
	{
		$data['listtahun'] = $this->Kepengurusan->tampil_tahun_kepengurusan();
		//print_r($data);
		$this->load->view('user/departemen', $data);
	}

	public function list_tahun_event()
	{
		$data['listtahun'] = $this->Kepengurusan->tampil_tahun_kepengurusan();
		//print_r($data);
		$this->load->view('user/tambah_event', $data);
	}

}