<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Third_model extends CI_Model 
{
    public function __construct() {
        $this->load->database();
    }

    public function get_nilai($id_alat)
    {
        $this->db->select('*');
        $this->db->from('alat');
        $this->db->join('nilai', 'nilai.id_alat = alat.id_alat');
        $this->db->where('nilai.id_alat', $id_alat);
        $this->db->order_by('nilai.id_nilai',"DESC");
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function chart_database() {
        // $this->db->select('*');
        // $this->db->from('alat');
        // $this->db->join('nilai', 'nilai.id_alat = alat.id_alat');
        // $this->db->where('nilai.id_alat', $id_alat);
        // $this->db->order_by('nilai.id_nilai',"DESC");
        // $this->db->limit(5);
        return $this->db->get('nilai')->result();
    }

    public function get_alat()
    {
        return $this->db->get('alat');
    }
 
    public function simpan_data_nilai()
    {
        $data['bulan'] = $this->input->post('bulan', true);
        $data['nilai_pengukuran'] = $this->input->post('nilai_pengukuran', true);
        $data['id_alat'] = $this->input->post('id_alat', true);
        $this->db->insert('nilai', $data);
        
        return redirect('master');
    }

    public function get_nilai_by_id($id_nilai)
    {   
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->get('nilai');
    }

    public function update_data_nilai()
    {
        $data['bulan'] = $this->input->post('bulan', true);
        $data['nilai_pengukuran'] = $this->input->post('nilai_pengukuran', true);
        $this->db->where('id_nilai', $this->input->post('id_nilai'));
        $this->db->update('nilai', $data);
    }
    
}