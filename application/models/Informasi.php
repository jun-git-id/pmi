<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('informasi')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('informasi', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('informasi', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_informasi', $param['id_informasi'])->update('informasi', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('informasi');
        return true;
    }
}