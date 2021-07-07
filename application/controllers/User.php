<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_sks');
    }

    public function index()
    {
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Home";
        $aktif = array('nama_semester' => 1);
        $aktif2 = array('nama_semester' => 2);
        $aktif3 = array('nama_semester' => 3);
        $aktif4 = array('nama_semester' => 4);
        $aktif5 = array('nama_semester' => 5);
        $aktif6 = array('nama_semester' => 6);
        $pilihan6 = array('nama_semester' => 6);
        $aktif7 = array('nama_semester' => 7);
        $pilihan7 = array('nama_semester' => 7);
        $aktif8 = array('nama_semester' => 8);

        $data['sks'] = $this->M_sks->getWhereSks($aktif);
        $data['sks2'] = $this->M_sks->getWhereSks2($aktif2);
        $data['sks3'] = $this->M_sks->getWhereSks3($aktif3);
        $data['sks4'] = $this->M_sks->getWhereSks4($aktif4);
        $data['sks5'] = $this->M_sks->getWhereSks5($aktif5);
        $data['sks6'] = $this->M_sks->getWhereSks6($aktif6);
        $data['pilihan6'] = $this->M_sks->getWherePilihan6($pilihan6);
        $data['sks7'] = $this->M_sks->getWhereSks7($aktif7);
        $data['pilihan7'] = $this->M_sks->getWherePilihan7($pilihan7);
        $data['sks8'] = $this->M_sks->getWhereSks8($aktif8);
        // $this->load->view('template/header', $data);
        $this->load->view('user/index', $data);
        // $this->load->view('template/footer');
    }
}

/* End of file User.php */
