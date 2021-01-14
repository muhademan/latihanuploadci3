<?php

class Berita_m extends CI_Model
{
    var $table = 'berita';
    var $kolom_order = array(null, 'Judul', 'Isi');
    var $kolom_search = array('Judul', 'Isi');
    var $order = array('IdBerita');

    private function _get_berita()
    {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->kolom_search as $item) {
            if ($_POST['search']['value']) {
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']); //search dan value bawaan datatables
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->kolom_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if ($this->order) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatable()
    {
        // untuk menampilkan seluruh data yang difilter dalam get_berita
        $this->_get_berita();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filter()
    {
        // menampilkan data yang difilter
        $this->_get_berita();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        // meanmpilkan seluruh data
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}
