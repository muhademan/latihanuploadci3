<?php

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_m');
    }
    public function index()
    {
        $this->load->view('berita');
    }
    public function ajax_berita()
    {
        $list = $this->Berita_m->get_datatable();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $berita) {
            $no++;
            $row = array(); // untuk data yang kita kirim kejson
            $row[] = $no;
            $row[] = $berita->Judul; // ini adalah result objek
            $row[] = $berita->Isi;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'], // bawaan dari datatables
            "recordsTotal" => $this->Berita_m->count_all(),
            "recordsFiltered" => $this->Berita_m->count_filter(),
            "data" => $data,
        );
        echo json_encode($output);
    }
}
