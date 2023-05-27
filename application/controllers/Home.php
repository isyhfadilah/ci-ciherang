<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman home';
        $data['testimoni'] = $this->Model_admin->getAllData()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['judul'] = 'Halaman login';

        $this->load->view('templates/header', $data);
        $this->load->view('home/login');
        $this->load->view('templates/footer');
    }

    public function login_check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = $this->Model_admin->check_admin($username, $password)->row();

        if ($data) {
            $datasession = array(
                'id' => $data->id,
                'username' => $data->username,
                'admin' => $data->nama
            );

            $this->session->set_userdata($datasession);
            redirect(site_url('admin'));
        } else {
            $msg = array('msg' => 'Username/password tidak ditemukan');
            $this->session->set_userdata($msg);
            redirect(site_url('home/login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }
}
