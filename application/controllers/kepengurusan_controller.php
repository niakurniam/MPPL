<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kepengurusan_controller extends CI_Controller {
	
//ADMIN (EDIT KEPENGURUSAN)
	public function index(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		#print_r($data);
		$this->load->view('admin/kepengurusan' , $data);
}

	public function edit_kepengurusan(){
		$id_kepengurusan =$this->uri->segment(3);
		$data['tangkap'] = $this->Kepengurusan->get_id($id_kepengurusan )->row_array();
		$this->load->view('admin/edit_kepengurusan', $data);
}

	public function save_edit_kepengurusan(){
		$id_kepengurusan = $this->input->post('id_kepengurusan');
		$data = array(
			'nama_kepengurusan' => $this->input->post('nama_kepengurusan'),
			'tahun_mulai' => $this->input->post('tahun_mulai'),
			'tahun_berakhir' => $this->input->post('tahun_berakhir'));
		$where = array('id_kepengurusan' => $id_kepengurusan);
		$this->Kepengurusan->update_data($where,$data,'kepengurusan');
		redirect('kepengurusan_controller');
}

//ADMIN (HAPUS KEPENGURUSAN)
	public function delete_kepengurusan($id){
		$where = array('id_kepengurusan' => $id );
		$this->Kepengurusan->delete_data($where, 'kepengurusan');
		redirect('kepengurusan_controller');
}


//USER
	public function tampil_kepengurusan()
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

	public function list_tahun_event()
	{
		$data['listtahun'] = $this->Kepengurusan->tampil_tahun_kepengurusan();
		//print_r($data);
		$this->load->view('user/tambah_event', $data);
	}

//ADMIN (TAMBAH KEPENGURUSAN)
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
		redirect(base_url('kepengurusan_controller'));
	}

	public function pilih_kepengurusan(){
		$data['kepengurusan']=$this->Kepengurusan->ambil_kepengurusan($this->uri->segment(3));
		$this->load->view('user/tambah_event',$data);
	}

}
