<?php

class Upload_m extends CI_Model
{
    function save_upload($judul, $nameutama, $namefiles, $namegambarkecil)
    {
        // tabel berkas
        // $data = array(
        //     'NamaBerkas' => $keterangan,
        //     'FileBerkas' => $filename,
        //     'size' => $size
        // );
        // $result = $this->db->insert('berkas', $data);
        // return $result;

        // tabel berita
        $data = array(
            'Judul' => $judul,
            'Gambar' => $nameutama,
            'file' => $namefiles,
            'thumail' => $namegambarkecil
        );
        $result = $this->db->insert('berita', $data);
        return $result;
    }
}
