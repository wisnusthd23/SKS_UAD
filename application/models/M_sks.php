<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sks extends CI_Model
{

    public function getAllSks()
    {
        return $this->db->get('tbl_sks')->result_array();
    }

    public function tambahData()
    {
        $data = [
            "jumlah_sks" => $this->input->post('jumlah_sks', true)
        ];

        $this->db->insert('tbl_sks', $data);
    }

    public function hapusData($id_sks)
    {
        // $this->db->where('id_sks', $id_sks);
        $this->db->delete('tbl_sks', ['id_sks' => $id_sks]);
    }

    public function getSksById($id_sks)
    {
        return $this->db->get_where('tbl_sks', ['id_sks' => $id_sks])->row_array();
    }

    public function ubahData()
    {
        $data = [
            "jumlah_sks" => $this->input->post('jumlah_sks', true)
        ];

        $this->db->where('id_sks', $this->input->post('id_sks'));
        $this->db->update('tbl_sks', $data);
    }
    public function getWhereSks($aktif)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks2($aktif2)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif2);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks3($aktif3)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif3);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks4($aktif4)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif4);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks5($aktif5)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif5);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks6($aktif6)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif6);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWherePilihan6($pilihan6)
    {
        $this->db->select('*');
        $this->db->from('tbl_pilihan');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_pilihan.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_pilihan.id_sks', 'left');
        $this->db->where($pilihan6);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks7($aktif7)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif7);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWherePilihan7($pilihan7)
    {
        $this->db->select('*');
        $this->db->from('tbl_pilihan');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_pilihan.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_pilihan.id_sks', 'left');
        $this->db->where($pilihan7);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
    public function getWhereSks8($aktif8)
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'left');
        $this->db->join('tbl_sks', 'tbl_sks.id_sks = tbl_matkul.id_sks', 'left');
        $this->db->where($aktif8);
        return $this->db->get()->result_array();

        // return $this->db->get_where('tbl_sks', array('tbl_sks.jumlah_sks' => 2))->result_array();
    }
}

/* End of file M_sks.php */
