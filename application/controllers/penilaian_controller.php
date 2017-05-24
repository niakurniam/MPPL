<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penilaian_controller extends CI_Controller {

  public function index(){
    $data['kepengurusan'] = $this->Penilaian->getListKepengurusan();
    $this->load->view('admin/penilaian_event',$data);
  }

  public function tambah_penilaian(){
    $data['kegiatan'] = $this->Penilaian->getListEvent();
    $this->load->view('admin/tambah_penilaian',$data);
  }

  /*public function select_departemen(){
    if('IS_AJAX') {
      $data['departemen'] = $this->Penilaian->getListDepartemen();
      $this->load->view('admin/dd_departemen',$data);
    }
  }*/

  public function add_penilaian(){
		$penilaian = array(
			'id_event' => $this->input->post('id_event'),
		 	'indikator' => $this->input->post('indikator'),
		 	'bobot' => $this->input->post('bobot'),
		 	'nilai' => $this->input->post('nilai')
		 	);
		$this->db->insert('penilaian', $penilaian);
		redirect('event_controller');
	}

  public function show_penilaian(){
    $id_event =$this->uri->segment(3);
  	$data['kegiatan'] = $this->Kegiatan->get_data_id($id_event)->row_array();
  	$data['penilaian'] = $this->Penilaian->get_id($id_event);
  	$this->load->view('admin/penilaian_event', $data);
  }

  public function edit_penilaian(){
		$id_indikator =$this->uri->segment(3);
		$data['tangkap'] = $this->Model_kegiatan->get_penilaian_id($id_indikator)->row_array();
		$this->load->view('admin/edit_penilaian', $data);
	}

  public function save_edit_penilaian(){
		$id_indikator = $this->input->post('id_indikator');
		$penilaian = array(
			'indikator' => $this->input->post('indikator'),
			'bobot' => $this->input->post('bobot'),
			'nilai' => $this->input->post('nilai')
			);
		$this->db->where('id_penilaian', $id_indikator);
		$this->db->update('penilaian', $penilaian);
		redirect('event_controller');
	}

  public function delete_penilaian(){
		$id_indikator = $this->uri->segment(3);
		$this->db->where('id_penilaian',$id_indikator);
		$this->db->delete('penilaian');
		redirect('event_controller');
	}
}
