<?php
class Upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_m');
    }
    function index()
    {
        $this->load->view('uploadform');
    }
    function uploadFile()
    {
        // multiple upload di tabel berkas
        // $data = [];
        // $jumlahfile = count($_FILES['files']['name']);
        // for ($i = 0; $i < $jumlahfile; $i++) {
        //     // echo $_FILES['files']['name'][$i];
        //     // echo "<br>";
        //     $_FILES['file']['name'] = $_FILES['files']['name'][$i];
        //     $_FILES['file']['type'] = $_FILES['files']['type'][$i];
        //     $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
        //     $_FILES['file']['error'] = $_FILES['files']['error'][$i];
        //     $_FILES['file']['size'] = $_FILES['files']['size'][$i];

        //     $config['upload_path'] = 'upload';
        //     $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //     $config['max_size'] = '5000';
        //     $config['file_name'] = $_FILES['files']['name'][$i];
        //     $config['encrypt_name'] = true;

        //     $this->load->library('upload', $config);
        //     if ($this->upload->do_upload('file')) {
        //         $uploadData = $this->upload->data();
        //         $filename = $uploadData['file_name'];
        //         $this->Upload_m->save_upload('keterangan', $filename, $_FILES['files']['size'][$i]);
        //         $data['totalfiles'][] = $filename;
        //     }
        // }
        // echo "Data berhasil diupload <br>";
        // $this->load->view('uploadform');

        // multiple upload di file berita
        $config['upload_path'] = 'upload/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $config['max_size'] = '5000';
        $config['encrypt_name'] = true;

        $judul = $this->input->post('judul');
        $gambarutama = $_FILES['gambarutama']['name'];
        $files = $_FILES['files']['name'];
        $gambarkecil = $_FILES['gambarkecil']['name'];

        $this->load->library('upload', $config);

        if (!empty($gambarutama)) {
            $this->upload->do_upload('gambarutama');
            $uploadgambarutama = $this->upload->data();
            $nameutama = $uploadgambarutama['file_name'];
        } else {
            $nameutama = '';
        }

        if (!empty($files)) {
            $this->upload->do_upload('files');
            $uploadfiles = $this->upload->data();
            $namefiles = $uploadfiles['file_name'];
        } else {
            $namefiles = '';
        }

        if (!empty($gambarkecil)) {
            $this->upload->do_upload('gambarkecil');
            $uploadgambarkecil = $this->upload->data();
            $namegambarkecil = $uploadgambarkecil['file_name'];
        } else {
            $namegambarkecil = '';
        }

        $this->Upload_m->save_upload($judul, $nameutama, $namefiles, $namegambarkecil);


        // if (!$this->upload->do_upload('gambarutama') or !$this->upload->do_upload('files') or !$this->upload->do_upload('gambarkecil')) {
        //     $error = $error = array('error' => $this->upload->display_errors());
        //     var_dump($error);
        // }
    }
}
