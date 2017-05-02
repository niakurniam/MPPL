<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login_cek()
	{
		//BACA INPUTAN
			$nrp = $this->input->post('NRP');
			$password = $this->input->post('PASSWORD');
			$cek=array('NRP'=>$nrp, 'PASSWORD'=>$password);
			$hitung = $this->Anggota->login($cek)->num_rows();
			if($hitung >0) {
				$data = $this->Anggota->login($cek)->result();
				foreach ($data as $row) {
					$role= $row->role;
				}
				if ($role== 1) {
					$this->session->set_userdata(array('ID' => $nrp, 'id_role'=>$role));
					redirect(base_url("admin"));
				}
				else if ($role==2) {
					$this->session->set_userdata(array('ID' => $nrp, 'id_role'=>$role));
					redirect(base_url("user"));
				}
			}
			else {
				echo "<script> 
				alert('Password atau username salah');
				window.location.href='index';
				</script>";
			}		
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('', 'refresh');
	}
}

