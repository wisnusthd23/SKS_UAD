<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_matkul extends CI_Model
{

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        return $this->db->get()->result_array();
    }

    public function tambahData()
    {
        $data = [
            'nama_matkul' => $this->input->post('nama_matkul', true),
            'id_semester' => $this->input->post('id_semester', true)
        ];

        $this->db->insert('tbl_matkul', $data);
    }
    public function getAllSemester()
    {
        return $this->db->get('tbl_semester')->result();
    }

    public function hapusData($id_matkul)
    {
        // $this->db->where('id_matkul', $id_matkul);
        $this->db->delete('tbl_matkul', ['id_matkul' => $id_matkul]);
    }

    public function getMatkulById($id_matkul)
    {
        return $this->db->get_where('tbl_matkul', ['id_matkul' => $id_matkul])->row_array();
    }

    public function editData()
    {
        $data = [
            'nama_matkul' => $this->input->post('nama_matkul', true),
            'id_semester' => $this->input->post('id_semester', true)
        ];

        $this->db->where('id_matkul', $this->input->post('id_matkul'));
        $this->db->update('tbl_matkul', $data);
    }

    public function CariData()
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');

        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_matkul', $keyword);
        $this->db->or_like('nama_semester', $keyword);

        return $this->db->get()->result_array();
        // return $this->db->get('tbl_matkul')->result_array();
    }
}

/* End of file M_matkul.php */
