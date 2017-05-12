<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departemen_controller extends CI_Controller {

	public function view_table(){
		$result = $this->Departemen->show_all_dept();

		if ($result != false) {
		return $result;
		} 
		else {
		return 'Database is empty !';
		}
	}

	public function list_departemen_event()
	{
		$data['listdept'] = $this->Departemen->tampil_departemen();
		//print_r($data);
		$this->load->view('user/tambah_event',$data);
	}

	public function show_departemen() {
		$id = $this->input->post('id_kepengurusan');

		if ($id != "") {
			$result = $this->Departemen->show_dept_by_id($id);

			if ($result != false) {
			$data['result_display'] = $result;
			} 
			else {
			$data['result_display'] = "No record found !";
			}
		} 
		else {
			$data = array(
			'id_error_message' => "Id field is required"
			);
		}

		$data['show_table'] = $this->view_table();
		$this->load->view('admin/departemen', $data);
	}

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


}