<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model
{
    public function get_pabrik()
    {
        return $this->db->get('pabrik');
    }

    public function simpan_data_pabrik()
    {
        $data['nama_pabrik'] = $this->input->post('nama_pabrik', true);
        $this->db->insert('pabrik', $data); 
    }

    public function get_pabrik_by_id($id_pabrik)
    {   
        $this->db->where('id_pabrik', $id_pabrik);
        return $this->db->get('pabrik');
    }

    public function update_data_pabrik()
    {
        $data['id_pabrik'] = $this->input->post('id_pabrik', true);
        $data['nama_pabrik'] = $this->input->post('nama_pabrik', true);
        
        $this->db->where('id_pabrik', $this->input->post('id_pabrik'));
        $this->db->update('pabrik', $data);
    }
}
