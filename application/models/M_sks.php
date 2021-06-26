<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sks extends CI_Model {

    public function getAllSks(){
        return $this->db->get('tbl_sks')->result_array();
    }   
    
    public function tambahData(){
        $data = [
            "jumlah_sks" => $this->input->post('jumlah_sks', true)
        ];

        $this->db->insert('tbl_sks', $data);
    }

    public function hapusData($id_sks){
        // $this->db->where('id_sks', $id_sks);
        $this->db->delete('tbl_sks', ['id_sks' => $id_sks]);
    }

    public function getSksById($id_sks){
        return $this->db->get_where('tbl_sks', ['id_sks' => $id_sks])->row_array();
    }

    public function ubahData(){
        $data = [
            "jumlah_sks" => $this->input->post('jumlah_sks', true)
        ];

        $this->db->where('id_sks', $this->input->post('id_sks'));
        $this->db->update('tbl_sks', $data);
    }

}

/* End of file M_sks.php */
