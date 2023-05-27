<?php

class Model_admin extends CI_Model
{
    public function getAllData()
    {
        return $this->db->get('testimoni');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('testimoni', ['id' => $id])->row_array();
    }

    public function check_admin($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));
        return $this->db->get();
    }

    public function tambahData($file)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "komentar" => $this->input->post('komentar', true),
            "foto" => $file['filename']
        ];

        $this->db->insert('testimoni', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('testimoni');
    }

    public function ubahData($file)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "komentar" => $this->input->post('komentar', true),
            "foto" => $file['filename']
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('testimoni', $data);
    }

    public function ubahDataNon()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "komentar" => $this->input->post('komentar', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('testimoni', $data);
    }
}
