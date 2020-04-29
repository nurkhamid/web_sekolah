<?php
class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_profil');
        $this->load->library('upload');
    }


    function index()
    {
        $x['data'] = $this->m_profil->get_all_profil();
        $this->load->view('admin/v_profil', $x);
    }

    // function simpan_pengumuman()
    // {
    //     $judul = strip_tags($this->input->post('xjudul'));
    //     $deskripsi = $this->input->post('xdeskripsi');
    //     $this->m_pengumuman->simpan_pengumuman($judul, $deskripsi);
    //     echo $this->session->set_flashdata('msg', 'success');
    //     redirect('admin/pengumuman');
    // }

    function update_profil()
    {
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $sejarah = $this->input->post('sejarah');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        // var_dump($visi,$misi,$sejarah);
        $this->m_profil->update_profil($visi, $misi, $sejarah,$alamat,$telepon,$email);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/profil');
        // print_r($misi,$sejarah);
    }
    // function hapus_pengumuman()
    // {
    //     $kode = strip_tags($this->input->post('kode'));
    //     $this->m_pengumuman->hapus_pengumuman($kode);
    //     echo $this->session->set_flashdata('msg', 'success-hapus');
    //     redirect('admin/pengumuman');
    // }
}
