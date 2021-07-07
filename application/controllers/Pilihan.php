<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pilihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_pilihan');
        $this->load->model('M_semester');
    }


    public function index()
    {
        $data['judul'] = "Matkul Pilihan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pilihan'] = $this->M_pilihan->getAll();
        if ($this->input->post('keyword')) {
            $data['pilihan'] = $this->M_pilihan->CariData();
        }
        $this->load->view('template/header', $data);
        $this->load->view('admin/pilihan/home', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = "Tambah Data Matkul Pilihan";
        $data['pilihan'] = $this->M_pilihan->getAllSemester();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('nama_pilihan', 'Nama Matkul Pilihan', 'required', [
            'required' => 'Form Nama Matkul Pilihan Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/pilihan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_pilihan->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('pilihan');
        }
    }

    public function hapus($id_pilihan)
    {
        $this->M_pilihan->hapusData($id_pilihan);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('pilihan');
    }

    public function edit($id_pilihan)
    {

        $data['judul'] = "Edit Data pilihan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pilihan'] = $this->M_pilihan->getAllSemester();
        $data['pilihan'] = $this->M_pilihan->getpilihanById($id_pilihan);
        $data['semester'] = ['1', '2', '3', '4', '5', '6', '7'];
        // $data['semester'] = $this->M_semester->getAllSemester();

        $this->form_validation->set_rules('nama_pilihan', 'Nama Matkul pilihan', 'required', [
            'required' => 'Form Nama Matkul pilihan Harus di Isi!',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/pilihan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_pilihan->editData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('pilihan');
        }
    }
}

/* End of file Pilihan.php */
