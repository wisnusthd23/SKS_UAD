<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_matkul');
        $this->load->model('M_semester');
    }


    public function index()
    {
        $data['judul'] = "Matkul";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['matkul'] = $this->M_matkul->getAll();
        if ($this->input->post('keyword')) {
            $data['matkul'] = $this->M_matkul->CariData();
        }
        $this->load->view('template/header', $data);
        $this->load->view('admin/matkul/home', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = "Tambah Data Matkul";
        $data['matkul'] = $this->M_matkul->getAllSemester();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required', [
            'required' => 'Form Nama Matkul Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/matkul/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_matkul->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('matkul');
        }
    }

    public function hapus($id_matkul)
    {
        $this->M_matkul->hapusData($id_matkul);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('matkul');
    }

    public function edit($id_matkul)
    {

        $data['judul'] = "Edit Data Matkul";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['matkul'] = $this->M_matkul->getAllSemester();
        $data['matkul'] = $this->M_matkul->getMatkulById($id_matkul);
        $data['semester'] = ['1', '2', '3', '4', '5', '6', '7'];
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required', [
            'required' => 'Form Nama Matkul Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/matkul/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_matkul->editData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('matkul');
        }
    }
}

/* End of file Matkul.php */
