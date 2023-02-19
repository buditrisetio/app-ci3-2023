<?php
class Chart_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function chart_database($id_alat)
    {
        $this->db->select('bulan');
        $this->db->select('nilai_pengukuran');
        $this->db->from('alat');
        $this->db->join('nilai', 'nilai.id_alat = alat.id_alat');
        $this->db->where('nilai.id_alat', $id_alat);
        $this->db->order_by('nilai.id_nilai', "DESC");
        $this->db->limit(0, 5);
        return $this->db->get()->result();
    }

    // public function get_nilai($id_alat)
    // {
    //     $this->db->select('*');
    //     $this->db->from('alat');
    //     $this->db->join('nilai', 'nilai.id_alat = alat.id_alat');
    //     $this->db->where('nilai.id_alat', $id_alat);
    //     return $this->db->get()->result();
    // }
}
