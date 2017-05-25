<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery_controller extends CI_Controller {

	/*function index(){
		$data['kepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['departemen'] = $this->Departemen->get_id($tahun);
		$id_departemen = $this->input->post('id_departemen');
		$data['foto'] = $this->Foto->get_foto($id_departemen);
		$this->load->view('admin/gallery', $data);
	}*/

	public function unggah_foto(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['listdepartemen'] = $this->Departemen->get_id($tahun); //departemen
		$this->load->view('admin/upload_foto', $data);
	}

	public function simpan(){
		// setting konfigurasi upload
        $config['upload_path'] = './foto/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('nama_file'))
        {
            $error = $this->upload->display_errors();
            echo "hello ";
            // menampilkan pesan error
            print_r($error);
        } else
        {
            $result = $this->upload->data();
            $file_name = $result['full_path'];
			$foto = array(
					'id_departemen_fk' => $this->input->post('id_dep'),
				 	'nama_foto' => $result['file_name']);
			$this->db->insert('foto', $foto);
        }
        redirect('gallery_controller');
	}

	public function delete_foto(){
		$id_foto = $this->uri->segment(3);
		$this->db->where('id_foto',$id_foto );
		$this->db->delete('foto');
		redirect('gallery_controller');
	}

	public function edit_foto(){
		$id_foto = $this->uri->segment(3);
		$this->load->view('admin/edit_foto');
	}

	public function simpan_edit(){
		$id_foto =$this->input->post('id_foto');
		$config['upload_path'] = './foto/';
        $config['allowed_types'] = 'gif|jpg|png|PNG';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('nama_file'))
        {
            $error = $this->upload->display_errors();
            echo "hello ";
            // menampilkan pesan error
            print_r($error);
        } else
        {
            $result = $this->upload->data();
            $file_name = $result['full_path'];
			$foto = array(
				 	'nama_foto' => $result['file_name']);
			$this->db->where('id_foto', $id_foto);

			$this->db->update('foto', $foto);
        }
        redirect('gallery_controller');
	}

  public function index(){
		$data['kepengurusan'] = $this->Gallery->getListKepengurusan();
		$this->load->view('admin/gallery',$data);
	}

	public function select_departemen(){
		if('IS_AJAX') {
			$data['departemen'] = $this->Gallery->getListDepartemen();
      $id_departemen = $this->input->post('id_departemen');
  		$data['foto'] = $this->Foto->get_foto($id_departemen);
  		//$this->load->view('admin/gallery', $data);
			$this->load->view('admin/dd_departemen',$data);
		}
	}
}
