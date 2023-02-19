<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second_model extends CI_Model 
{

    public function get_alat($id_pabrik)
    {
        $this->db->select('*');
        $this->db->from('pabrik');
        $this->db->join('alat', 'alat.id_pabrik = pabrik.id_pabrik');
        $this->db->where('alat.id_alat', $id_pabrik);
        return $this->db->get()->result();
    }
   
    public function get_alat_by_id_pabrik($id_pabrik)
    {   
        // $this->db->where('id_alat', $id_pabrik);
        // return $this->db->get('alat')->row();
        $this->db->select('*');
        $this->db->from('pabrik');
        $this->db->join('alat', 'alat.id_pabrik = pabrik.id_pabrik');
        $this->db->where('alat.id_pabrik', $id_pabrik);
        return $this->db->get()->result();
    }
    
    public function get_alat_by_id($id_alat)
    {   
        $this->db->where('id_alat', $id_alat);
        return $this->db->get('alat');
    }

    public function simpan_data_alat()
    {
        $data['nama_alat'] = $this->input->post('nama_alat', true);
        $data['id_pabrik'] = $this->input->post('id_pabrik', true);
        $this->db->insert('alat', $data);
    
        return redirect('master');
    }

    public function update_data_alat()
    {
        $data['nama_alat'] = $this->input->post('nama_alat', true);
        
        $this->db->where('id_alat', $this->input->post('id_alat'));
        $this->db->update('alat', $data);

    }

}
