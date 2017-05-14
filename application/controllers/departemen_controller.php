<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departemen_controller extends CI_Controller {

	public function list_departemen_event()
	{
		$data['listdept'] = $this->Departemen->tampil_departemen();
		//print_r($data);
		$this->load->view('user/tambah_event',$data);
	}

	/*public function index()
	{
		$get_kepengurusan = $this->Kepengurusan->get_kepengurusan();
		$this->load->view('admin/departemen', ['get_kepengurusan'=>'get_kepengurusan']);
	}

	public function getDepartemen()
	{
		$kepengurusan = $this->input->post('id_kepengurusan');
		$get_kepengurusan = $this->Kepengurusan->get_kepengurusan();
		$listdepartemen = $this->Departemen->get_list($kepengurusan);
		$this->load->view('get_departemen', ['get_kepengurusan'=>$get_kepengurusan,
		'listdepartemen'=>$listdepartemen]);
	}*/

	public function input2()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$data['listdepartemen'] = $this->Departemen->list_departemen();
		$this->load->view('admin/departemen' , $data);
	}

	/*public function get_tahun() {
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_kepengurusan');

		$data['listdepartemen'] = $this->Departemen->list_departemen();
		redirect(base_url('list_departemen_admin'));
	}*/

	public function input()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$this->load->view('admin/tambah_departemen', $data);
	}

	public function tambah_departemen()
	{
		$data_departemen = array(
			'id_kepengurusan' => $this->input->post('id_kepengurusan'),
		 	'nama_departemen' => $this->input->post('nama_departemen'));

		$this->db->insert('departemen', $data_departemen);// tabel apa array nya apa
		redirect(base_url('list_departemen_admin'));
	}

	public function index(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$data['listdepartemen'] = $this->Departemen->list_departemen();
		$this->load->view('user/departemen' , $data);
	}

	public function get_tahun()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_kepengurusan');
		$data['listdepartemen'] = $this->Departemen->get_id($tahun);
		$this->load->view('user/get_departemen' , $data);
	}
}
