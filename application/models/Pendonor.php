<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pendonor extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('pendonor')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('pendonor', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('pendonor', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_pendonor', $param['id_pendonor'])->update('pendonor', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('pendonor');
        return true;
    }
}