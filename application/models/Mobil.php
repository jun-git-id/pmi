<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $sql = "SELECT * FROM jadwal_donor WHERE jadwal > NOW() - INTERVAL 1 DAY AND tipe=2 ORDER BY jadwal ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getUDD(){
        $sql = "SELECT * FROM jadwal_donor WHERE jadwal > NOW() - INTERVAL 1 DAY AND tipe=1 ORDER BY jadwal ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function get($param){
        $sql = "SELECT 
        id_mobil,
        target,
        jadwal,
        TIME_FORMAT(jam_buka, '%H:%i') as jambuka,
        TIME_FORMAT(jam_tutup, '%H:%i') as jamtutup,
        lokasi 
        FROM jadwal_donor WHERE id_mobil = $param";
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('jadwal_donor', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_mobil', $param['id_mobil'])->update('jadwal_donor', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('jadwal_donor');
        return true;
    }
}