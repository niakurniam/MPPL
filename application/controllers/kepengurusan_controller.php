<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kepengurusan_controller extends CI_Controller {

	public function show_kepengurusan()
	{
		$data['listkepengurusan'] 	= $this->Kepengurusan->tampil_kepengurusan();
		//print_r($data);
		$this->load->view('admin/kepengurusan', $data);
	}

	public function show_kepengurusan2()
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

	public function list_kepengurusan()
	{
		$data['ddkepengurusan'] = $this->Kepengurusan->tampil_dd_kepengurusan();
		//print_r($data);
		$this->load->view('tahun_kepengurusan', $data);
	}

	public function list_tahun_event()
	{
		$data['listtahun'] = $this->Kepengurusan->tampil_tahun_kepengurusan();
		//print_r($data);
		$this->load->view('user/tambah_event', $data);
	}

	public function input()
	{
		$this->load->view('admin/tambah_kepengurusan');
	}

	public function tambah_kepengurusan()
	{
		$data_kepengurusan = array(
			'nama_kepengurusan'=> $this->input->post('nama_kepengurusan'),    // harus sesuai nama kolom
			'tahun_mulai'   => $this->input->post('tahun_mulai'),
			'tahun_berakhir'  => $this->input->post('tahun_berakhir'));

		$this->db->insert('kepengurusan', $data_kepengurusan);
		redirect(base_url('list_kepengurusan_admin'));
	}

	public function index()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$this->load->view('admin/kepengurusan', $data);
	}

	public function edit_kepengurusan(){
		$id_kepengurusan =$this->uri->segment(3);
		$data['tangkap'] = $this->Kepengurusan->get_id($id_kepengurusan )->row_array();
		$this->load->view('admin/edit_kepengurusan', $data);
	}

	public function save_edit_kepengurusan()
	{
		$id = $this->input->post('id_kepengurusan');
		$kepengurusan = array('nama_kepengurusan' => $this->input->post('nama_kepengurusan'),
													 'tahun_mulai' => $this->input->post('tahun_mulai'),
												   'tahun_berakhir' => $this->input->post('tahun_berakhir'));
		$this->db->where('id_kepengurusan', $id);
		$this->db->update('kepengurusan', $kepengurusan);
		redirect(base_url('list_kepengurusan_admin'));
	}

	public function delete_kepengurusan(){
		$id = $this->uri->segment(3);
		$this->db->where('id_kepengurusan', $id);
		$this->db->delete('kepengurusan');
		redirect(base_url('list_kepengurusan_admin'));
	}
}
