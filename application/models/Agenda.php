<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $res = $this->db->get('agenda')->result();
        return $res;
    }
    public function get($param){
        $sql = "SELECT 
        id_agenda,
        nama_agenda,
        tgl_agenda,
        TIME_FORMAT(jam_buka, '%H:%i') as jambuka,
        TIME_FORMAT(jam_tutup, '%H:%i') as jamtutup,
        lokasi_agenda 
        FROM agenda WHERE id_agenda = $param";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('agenda', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_agenda', $param['id_agenda'])->update('agenda', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('agenda');
        return true;
    }
}