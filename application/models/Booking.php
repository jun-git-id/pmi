<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by('tanggal', 'DESC');
        $res = $this->db->get('booking')->result();
        return $res;
    }
    public function getBookingNOW(){
        $this->db->where('status', 1);
        $this->db->order_by('tanggal', 'DESC');
        $res = $this->db->get('booking')->result();
        return $res;
    }
    public function getBookingDONE(){
        $this->db->where('status', 2);
        $this->db->order_by('tanggal', 'DESC');
        $res = $this->db->get('booking')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('booking', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('booking', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_booking', $param['id_booking'])->update('booking', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('booking');
        return true;
    }
}