<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event_controller extends CI_Controller {

	public function index(){
		$date = $this->input->post('tanggal_mulai');
		$data['listkegiatan'] = $this->Kegiatan->show_event_by_date($date);
		$this->load->view('admin/event', $data);
	}

	public function list_event_today()
	{
		$data['listevent'] 	= $this->Kegiatan->event_today();
		//print_r($data);
		$this->load->view('admin/dashboard', $data);
	}

	public function get_event_by_date()
	{
		//$data['kegiatan'] = $this->Kegiatan->list_kegiatan();
		$date = $this->input->post('tanggal_mulai');
		$data['listkegiatan'] = $this->Kegiatan->show_event_by_date($date);
		$this->load->view('admin/get_event', $data);
	}

	public function tambah_event(){
		$data['kepengurusan'] = $this->Kegiatan->getListKepengurusan();
		$this->load->view('admin/tambah_event',$data);
	}

	public function select_departemen(){
		if('IS_AJAX') {
			$data['departemen'] = $this->Kegiatan->getListDepartemen();
			$this->load->view('admin/dd_departemen',$data);
		}
	}

	public function add_event(){
		$event = array(
			'id_departemen' => $this->input->post('id_departemen'),
			'nama_event' => $this->input->post('nama_event'),
		 	'tanggal_mulai' => $this->input->post('tanggal_mulai'),
		 	'tanggal_selesai' => $this->input->post('tanggal_selesai'),
		 	'jam_mulai' => $this->input->post('jam_mulai'),
		 	'jam_selesai' => $this->input->post('jam_selesai'),
		 	'tempat' => $this->input->post('tempat')
		 	);
		$this->db->insert('kegiatan', $event);
		redirect('event_controller');
	}

	public function edit_event(){
		$id_event =$this->uri->segment(3);
		$data['tangkap'] = $this->Kegiatan->get_data_id($id_event)->row_array();
		$data['kepengurusan'] = $this->Kegiatan->getListKepengurusan();
		$this->load->view('admin/edit_event',$data);
	}

	public function save_edit_event(){
		$id_event = $this->input->post('id_event');
		$event = array(
			'id_departemen' => $this->input->post('id_departemen'),
			'nama_event' => $this->input->post('nama_event'),
		 	'tanggal_mulai' => $this->input->post('tanggal_mulai'),
		 	'tanggal_selesai' => $this->input->post('tanggal_selesai'),
		 	'jam_mulai' => $this->input->post('jam_mulai'),
		 	'jam_selesai' => $this->input->post('jam_selesai'),
		 	'tempat' => $this->input->post('tempat')
		 	);

		$this->db->where('id_event',$id_event);
		$this->db->update('kegiatan', $event);
		redirect('event_controller');
	}

	public function delete_event($id){
		$where = array('id_event' => $id );
		$this->Departemen->delete_data($where, 'kegiatan');
		redirect('event_controller');
	}

	public function list_event_today2()
	{
		$data['listevent'] 	= $this->Kegiatan->event_today();
		//print_r($data);
		$this->load->view('user/dashboard',$data);
	}

	public function add() {
		$data['kepengurusan']=$this->Kepengurusan->get_kepengurusan();
		$this->load->view('user/tambah_event',$data);
	}
}
