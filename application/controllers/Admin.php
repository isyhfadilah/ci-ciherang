<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman admin';
        $data['testimoni'] = $this->Model_admin->getAllData()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman tambah';

        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('komentar', 'Komentar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->upload->do_upload('foto');
            $data = $this->upload->data();

            $file = array(
                'filename' => $data['file_name'],
                'filetype' => $data['file_type'],
                'filepath' => $data['file_path'] . $data['file_name']

            );

            $this->Model_admin->tambahData($file);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Halaman detail';
        $data['testimoni'] = $this->Model_admin->getDataById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Model_admin->hapusData($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Halaman ubah';
        $data['testimoni'] = $this->Model_admin->getDataById($id);

        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('komentar', 'Komentar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            if ($_FILES['foto']['name']) {

                $this->upload->do_upload('foto');
                $data = $this->upload->data();

                $file = array(
                    'filename' => $data['file_name'],
                    'filetype' => $data['file_type'],
                    'filepath' => $data['file_path'] . $data['file_name']
                );
                $this->Model_admin->ubahData($file);
            } else {
                $this->Model_admin->ubahDataNon();
            }

            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin');
        }
    }
}
