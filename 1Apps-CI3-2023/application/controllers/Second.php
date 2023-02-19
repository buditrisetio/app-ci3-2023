<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('second_model');
        $this->load->model('master_model');
    }

    public function index($id_pabrik)
    {
        $data['title'] = 'Master Alat Page';
        $data['heading'] = 'Tabel Data Alat';
        $data['tbljoin'] = $this->second_model->get_alat_by_id_pabrik($id_pabrik);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('second/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_alat()
    {
        $data['title'] = 'Menu Tambah Alat';
        $data['heading'] = 'Form Tambah Alat';
        $data['pabrik'] = $this->master_model->get_pabrik()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('second/tambah', $data);
        $this->load->view('templates/footer');
    }
    
    public function simpan_alat()
    {
        $this->second_model->simpan_data_alat();
        // redirect('second/idpabrik/' . $this->input->post('id_pabrik', true));
    }

    public function edit_alat($id_alat)
    {
        $data['title'] = 'Menu Edit Nama Alat';
        $data['heading'] = 'Form Edit Nama Alat';
        $data['alatedit'] = $this->second_model->get_alat_by_id($id_alat)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('second/edit', $data);
        $this->load->view('templates/footer');
	}
   
    public function update_alat()
    {
        $this->second_model->update_data_alat();
        redirect('master');
    }

    public function hapus_alat($id_alat)
    {
        $this->db->delete('alat', ['id_alat' => $id_alat]);
        redirect('master');
    }

}
