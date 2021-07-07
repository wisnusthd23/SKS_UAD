<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_semester extends CI_Model
{
    public function getAllSemester()
    {
        $this->db->select('*');
        $this->db->from('tbl_matkul');

        $this->db->join('tbl_semester', 'tbl_semester.id_semester = tbl_matkul.id_semester', 'right');
        return $this->db->get()->row();
    }
}

/* End of file M_semester.php */
