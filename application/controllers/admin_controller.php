<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_controller extends CI_Controller {

	public function show_dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	public function show_departemen()
	{
		$this->load->view('admin/departemen');
	}

	public function tambah_departemen()
	{
		$this->load->view('admin/tambah_departemen');
	}

	public function tambah_kepengurusan()
	{
		$this->load->view('admin/tambah_kepengurusan');
	}

	public function show_kepengurusan()
	{
		$this->load->view('admin/kepengurusan');
	}

	public function tambah_anggota()
	{
		$this->load->view('admin/input_anggota');
	}

	public function show_anggota()
	{
		$this->load->view('admin/anggota');
	}

	public function show_gallery()
	{
		$this->load->view('admin/gallery');
	}

	public function upload_foto()
	{
		$this->load->view('admin/upload_foto');
	}

	public function show_event()
	{
		$this->load->view('admin/lihat_event');
	}
	
	public function add_event()
	{
		$this->load->view('admin/tambah_event');
	}
	
	public function edit_event()
	{
		$this->load->view('admin/update_event');
	}
	
	public function show_penilaian()
	{
		$this->load->view('admin/penilaian_event');
	}
	
	public function tambah_penilaian()
	{
		$this->load->view('admin/tambah_penilaian');
	}
	
	public function update_penilaian()
	{
		$this->load->view('admin/edit_penilaian');
	}

}

