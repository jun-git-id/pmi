<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('admin')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('admin', $filter)->result();
        return $res;
    }
    public function getPendonor($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('pendonor', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('admin', $param);
        return $this->db->insert_id();
    }
    public function signup($param){
        $this->db->insert('pendonor', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('email_admin', $param['EMAIL_USER'])->update('admin', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('admin');
        return true;
    }
}