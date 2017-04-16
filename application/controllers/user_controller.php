<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller {

		public function dashboard()
		{
			$this->load->view('user/dashboard');
		}

		public function list_kepengurusan()
		{
			$this->load->view('user/kepengurusan');
		}

		public function list_departemen()
		{
			$this->load->view('user/departemen');
		}

		public function list_anggota()
		{
			$this->load->view('user/anggota');
		}

		public function view_gallery()
		{
			$this->load->view('user/gallery');
		}

		public function upload_foto()
		{
			$this->load->view('user/upload_foto');
		}

}

