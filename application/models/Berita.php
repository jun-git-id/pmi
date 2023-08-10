<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("id_berita", "desc");
        $res = $this->db->get('berita')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('berita', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('berita', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_berita', $param['id_berita'])->update('berita', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('berita');
        return true;
    }
}