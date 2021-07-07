<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pilihan extends CI_Model
{

    public function index()
    {
    }
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_pilihan');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_pilihan.id_semester', 'left');
        return $this->db->get()->result_array();
    }
    public function CariData()
    {
        $this->db->select('*');
        $this->db->from('tbl_pilihan');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_pilihan.id_semester', 'left');

        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_pilihan', $keyword);
        $this->db->or_like('nama_semester', $keyword);

        return $this->db->get()->result_array();
        // return $this->db->get('tbl_matkul')->result_array();
    }
    public function tambahData()
    {
        $data = [
            'nama_pilihan' => $this->input->post('nama_pilihan', true),
            'id_semester' => $this->input->post('id_semester', true)
        ];

        $this->db->insert('tbl_pilihan', $data);
    }

    public function getAllSemester()
    {
        return $this->db->get('tbl_semester')->result();
    }

    public function hapusData($id_pilihan)
    {
        // $this->db->where('id_pilihan', $id_pilihan);
        $this->db->delete('tbl_pilihan', ['id_pilihan' => $id_pilihan]);
    }

    public function getPilihanById($id_pilihan)
    {
        return $this->db->get_where('tbl_pilihan', ['id_pilihan' => $id_pilihan])->row_array();
    }

    public function editData()
    {
        $data = [
            'nama_pilihan' => $this->input->post('nama_pilihan', true),
            'id_semester' => $this->input->post('id_semester', true)
        ];

        $this->db->where('id_pilihan', $this->input->post('id_pilihan'));
        $this->db->update('tbl_pilihan', $data);
    }
}

/* End of file M_pilihan.php */
