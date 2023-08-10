<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Carousel extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by("id_carousel", "desc");
        $res = $this->db->get('carousel')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('carousel', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('carousel', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_carousel', $param['id_carousel'])->update('carousel', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('carousel');
        return true;
    }
}