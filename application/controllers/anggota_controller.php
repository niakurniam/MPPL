<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota_controller extends CI_Controller
{

	public function index(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['listanggota'] = $this->Anggota->get_list_anggota_tahun($tahun); //departemen
		#$data['dataanggota'] = $this->Model_anggota->get_data_anggota(); // anggota
		$this->load->view('admin/pengurus', $data);
	}

	public function tambah_anggota(){
		$this->load->view('admin/input_anggota');
	}

	public function do_upload()
	{
        // setting konfigurasi upload
        $config['upload_path'] = './data/';
        $config['allowed_types'] = 'csv';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('nama_file'))
        {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else
        {
            $result = $this->upload->data();
            $file_name = $result['full_path'];
			if (($handle = fopen($file_name, "r")) !== FALSE)
			{
				fgetcsv($handle);
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
				{
					 $num = count($data);
				    for ($c=0; $c < $num; $c++)
				    {
				     $col[$c] = $data[$c];
					}
					$anggota = array(
					'NRP' => $col[0] ,
				 	'nama' => $col[1],
				 	'password' => $col[2],
				 	'role' => $col[3] );

				 	$this->db->insert('anggota', $anggota);
				}
			fclose($handle);
			}

        }
        redirect('anggota_controller');
    }

    public function tambah_pengurus(){
		$this->load->view('admin/input_anggota');
	}

	public function upload_pengurus()
	{
        // setting konfigurasi upload
        $config['upload_path'] = './data/';
        $config['allowed_types'] = 'csv';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('nama_file'))
        {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else
        {
            $result = $this->upload->data();
            $file_name = $result['full_path'];
			if (($handle = fopen($file_name, "r")) !== FALSE)
			{
				fgetcsv($handle);
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
				{
					 $num = count($data);
				    for ($c=0; $c < $num; $c++)
				    {
				     $col[$c] = $data[$c];
					}
					$anggota = array(
					'NRP_fk' => $col[0] ,
				 	'id_departemen_fk' => $col[1],
				 	'jabatan' => $col[2]);
				 	$this->db->insert('log_anggota', $anggota);
				}
			fclose($handle);
			}

        }
        redirect('anggota_controller');
    }

    public function kelola_anggota(){
    	$data['listanggota'] = $this->Anggota->list_anggota();
    	$this->load->view('admin/kelola_anggota', $data);
    }

    public function edit_anggota(){
    	$NRP =$this->uri->segment(3);
    	$data['tangkap'] = $this->Anggota->get_id($NRP)->row_array();
    	$data['role'] = $this->Anggota->get_data_role($NRP);
    	$data['listrole'] = $this->Anggota->list_role();
    	$this->load->view('admin/edit_anggota', $data);
    }

    public function save_edit_anggota(){
		$nrp = $this->input->post('nrp');
		$anggota = array(
			'NRP' => $this->input->post('NRP'),
		 	'nama' => $this->input->post('nama'),
		 	'role' => $this->input->post('id_role'));
		$this->db->where('NRP',$nrp);
		$this->db->update('anggota', $anggota);
		redirect('anggota_controller/kelola_anggota');
	}

	public function delete_anggota(){
		$nrp = $this->uri->segment(3);
		$this->db->where('NRP',$nrp);
		$this->db->delete('anggota');
		redirect('anggota_controller/kelola_anggota');
	}

	public function insert_pengurus(){
		$data['nrp'] = $this->uri->segment(3);
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$this->load->view('admin/edit_anggota', $data);
	}

	public function get_tahun()
	{
		$data['nrp'] = $this->uri->segment(3);
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['listdepartemen'] = $this->Departemen->get_id($tahun);
		$this->load->view('admin/edit_anggota', $data);
	}

	public function save_anggota(){
		#$nrp = $this->input->post('nrp');
		$anggota = array(
			'NRP_fk' => $this->input->post('nrp'),
			'id_departemen_fk' => $this->input->post('id_departemen'),
			'jabatan' => $this->input->post('jabatan')
			);
		echo $nrp;
		#$this->db->insert('log_anggota', $anggota);
		redirect('anggota_controller/kelola_anggota');
	}

	public function get_id_tahun()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['listanggota'] = $this->Anggota->get_list_anggota_tahun($tahun); //departemen
		#$data['dataanggota'] = $this->Model_anggota->get_data_anggota(); // anggota
		$this->load->view('admin/pengurus', $data);
	}

	public function delete_pengurus(){
		$nrp = $this->uri->segment(3);
		$this->db->where('NRP_fk',$nrp);
		$this->db->delete('log_anggota');
		redirect('anggota_controller');
	}

	//user
	public function daftar_anggota(){
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['listanggota'] = $this->Anggota->get_list_anggota_tahun($tahun); //departemen
		#$data['dataanggota'] = $this->Model_anggota->get_data_anggota(); // anggota
		$this->load->view('user/anggota', $data);
	}

	public function get_anggota()
	{
		$data['listkepengurusan'] = $this->Kepengurusan->list_kepengurusan();
		$tahun = $this->input->post('id_tahun');
		$data['listanggota'] = $this->Anggota->get_list_anggota_tahun($tahun); //departemen
		#$data['dataanggota'] = $this->Model_anggota->get_data_anggota(); // anggota
		$this->load->view('user/get_anggota', $data);
	}

}
