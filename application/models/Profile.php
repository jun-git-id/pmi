<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('profil')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('profil', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('profil', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_profil', $param['id_profil'])->update('profil', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('profil');
        return true;
    }
}