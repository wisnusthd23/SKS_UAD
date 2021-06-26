<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_sks');
    }


    public function dashboard()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Dashboard";

        $data['sks'] = $this->M_sks->getAllSks();
        $this->load->view('template/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "SKS";

        $data['sks'] = $this->M_sks->getAllSks();
        $this->load->view('template/header', $data);
        $this->load->view('admin/sks/home', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Tambah Data SKS";

        $this->form_validation->set_rules('jumlah_sks', 'Jumlah SKS', 'required|numeric', [
            'required' => 'Form Jumlah SKS Harus di Isi!',
            'numeric' => 'Form Jumlah SKS Harus Angka!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/sks/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_sks->tambahData();
            $this->session->set_flashdata('flash', 'Berhasil Ditambahkan!');
            redirect('home');
        }
    }

    public function hapus($id_sks)
    {
        $this->M_sks->hapusData($id_sks);
        $this->session->set_flashdata('hapus', 'Berhasil Dihapus!');
        redirect('home');
    }

    public function edit($id_sks)
    {

        $data['judul'] = "Edit Data SKS";
        $data['sks'] = $this->M_sks->getSksById($id_sks);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jumlah_sks', 'Jumlah SKS', 'required|numeric', [
            'required' => 'Form Jumlah SKS Harus di Isi!',
            'numeric' => 'Form Jumlah SKS Harus Angka!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/sks/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_sks->ubahData();
            $this->session->set_flashdata('flash', 'Berhasil Diubah!');
            redirect('home');
        }
    }
    public function editprofile()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Edit Profile";

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('admin/editprofile', $data);
            $this->load->view('template/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '9048';
                $config['upload_path'] = './assetss/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assetss/img/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SELAMAT! profile berhasil di update!</div>');
            redirect('home/editprofile');
        }
    }
}

/* End of file Home.php */