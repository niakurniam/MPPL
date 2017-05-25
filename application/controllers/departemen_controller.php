<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departemen_controller extends CI_Controller {

	public function index(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$data['listdepartemen'] = $this->Departemen->list_departemen();
		$this->load->view('user/departemen' , $data);
	}

	public function daftar_departemen(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$data['listdepartemen'] = $this->Departemen->list_departemen();
		$this->load->view('admin/departemen' , $data);
	}

	public function list_departemen_event()
	{
		$data['listdept'] = $this->Departemen->tampil_departemen();
		//print_r($data);
		$this->load->view('user/tambah_event',$data);
	}

//ADMIN (TAMBAH DEPARTEMEN)
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
		redirect(base_url('departemen_controller/daftar_departemen'));
	}

	public function get_tahun()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_kepengurusan');
		$data['listdepartemen'] = $this->Departemen->get_id($tahun);
		$this->load->view('user/get_departemen' , $data);
	}

	public function index2(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$data['listdepartemen'] = $this->Departemen->list_departemen();
		$this->load->view('admin/departemen' , $data);
	}

	public function get_tahun_admin()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_kepengurusan');
		$data['listdepartemen'] = $this->Departemen->get_id($tahun);
		$this->load->view('admin/get_departemen' , $data);
	}

	public function pilih_departemen(){
		$data['departemen']=$this->Departemen->ambil_departemen($this->uri->segment(3));
		$this->load->view('user/dropdown_departemen',$data);
	}

	public function edit_departemen(){
		$id_departemen =$this->uri->segment(3);
		$data['tangkap'] = $this->Departemen->get_data_id($id_departemen )->row_array();
		$data['tahun'] = $this->Departemen->get_data_tahun($id_departemen);
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$this->load->view('admin/edit_departemen', $data);
	}

	public function save_edit_departemen(){
		$id = $this->input->post('id_departemen');
		$data = array(
			'id_kepengurusan' => $this->input->post('id_tahun'),
		 	'nama_departemen' => $this->input->post('nama_departemen'));
		$where = array('id_departemen' => $id);
		$this->Departemen->update_data($where,$data,'departemen');
		redirect('departemen_controller/daftar_departemen');
	}

	public function delete_departemen($id){
		$where = array('id_departemen' => $id );
		$this->Departemen->delete_data($where, 'departemen');
		redirect('departemen_controller/daftar_departemen');
	}

}
