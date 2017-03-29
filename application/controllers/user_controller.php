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

}