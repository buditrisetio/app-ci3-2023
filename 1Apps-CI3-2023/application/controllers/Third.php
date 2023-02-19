<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Third extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('third_model');
        $this->load->model('chart_model');
    }

    public function index($id_alat)
    {
        
        $data = $this->third_model->chart_database();
		echo json_encode($data);
        
        $data['tabel'] = $this->third_model->get_nilai($id_alat);
        $data['title'] = 'Halaman Tabel Chart';
        $data['heading'] = 'Tabel Nilai Alat';
        
		$this->load->view('third/index', $data);
        // $this->load->view('templates/footer');
    }

    public function tambah_nilai()
    {
        $data['title'] = 'Halaman Tambah Nilai';
        $data['heading'] = 'Form Tambah Nilai dan Bulan';
        $data['alat'] = $this->third_model->get_alat()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('third/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_nilai()
    {
        $this->third_model->simpan_data_nilai();
    }

    public function edit_nilai($id_nilai)
    {
        $data['title'] = 'Halaman Edit Nilai';
        $data['heading'] = 'Form Edit Nilai dan Bulan';
        $data['nilaiedit'] = $this->third_model->get_nilai_by_id($id_nilai)->row();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('third/edit', $data);
        $this->load->view('templates/footer');
	}
    
    public function update_nilai()
    {
        $this->third_model->update_data_nilai();
        redirect('master');
    }

    public function hapus_nilai($id_nilai)
    {
        $this->db->delete('nilai', ['id_nilai' => $id_nilai]);
        redirect('master');
    }

    public function chart_data() {
		$data = $this->chart_model->chart_database();
		echo json_encode($data);
	}
}