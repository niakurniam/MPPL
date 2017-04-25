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

}

