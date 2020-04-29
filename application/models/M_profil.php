<?php
class M_profil extends CI_Model
{

    function get_all_profil()
    {
        $hsl = $this->db->query("SELECT * FROM tbl_profil");
        return $hsl;
    }
    // function simpan_pengumuman($judul, $deskripsi)
    // {
    //     $author = $this->session->userdata('nama');
    //     $hsl = $this->db->query("INSERT INTO tbl_pengumuman(pengumuman_judul,pengumuman_deskripsi,pengumuman_author) VALUES ('$judul','$deskripsi','$author')");
    //     return $hsl;
    // }
    function update_profil($visi, $misi, $sejarah,$alamat,$telepon,$email)
    {
        // $author = $this->session->userdata('nama');
        $hsl = $this->db->query("UPDATE tbl_profil SET visi='$visi',misi='$misi',sejarah='$sejarah',alamat='$alamat',telepon='$telepon',email='$email'");
        return $hsl;
    }
    
}
