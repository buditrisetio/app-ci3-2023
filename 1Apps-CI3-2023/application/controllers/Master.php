<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('master_model');
    }

	public function index()
	{
        $data['title'] = 'Halaman Tabel Pabrik';
        $data['heading'] = 'Tabel Data Pabrik';
        $data['datapabrik'] = $this->master_model->get_pabrik()->result();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('master/index', $data);
        $this->load->view('templates/footer');
	}

    public function tambah_pabrik()
    {
        $data['title'] = 'Menu Tambah Pabrik';
        $data['heading'] = 'Form Tambah Pabrik';
        $data['pabrik'] = $this->db->get('pabrik')->result();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('master/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_pabrik()
    {
        $this->master_model->simpan_data_pabrik();
        redirect('master');
    }

    public function edit_pabrik($id_pabrik)
	{
        $data['title'] = 'Menu Edit Nama Pabrik';
        $data['heading'] = 'Form Edit Nama Pabrik';
        $data['row'] = $this->master_model->get_pabrik_by_id($id_pabrik)->row();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('master/edit', $data);
        $this->load->view('templates/footer');
	}

    public function update_pabrik()
    {
        $this->master_model->update_data_pabrik();
        redirect('master');
    }

    public function hapus_pabrik($id_pabrik)
    {
        $this->db->delete('pabrik', ['id_pabrik' => $id_pabrik]);
        redirect('master');
    }
 
}
