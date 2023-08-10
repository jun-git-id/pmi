<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Depan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getJadwalMobil(){
        $sql = "SELECT * FROM jadwal_donor WHERE jadwal > NOW() - INTERVAL 1 DAY AND tipe=2 ORDER BY jadwal ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getJadwal($param){
        $sql = "SELECT 
        id_mobil,
        target,
        jadwal,
        terisi,
        TIME_FORMAT(jam_buka, '%H:%i') as jambuka,
        TIME_FORMAT(jam_tutup, '%H:%i') as jamtutup,
        lokasi 
        FROM jadwal_donor WHERE id_mobil = $param";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getJadwalDonor(){
        $sql = "SELECT * FROM jadwal_donor WHERE jadwal > NOW() - INTERVAL 1 DAY AND tipe=1 ORDER BY jadwal ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getCarousel(){
        $sql = "SELECT * FROM carousel WHERE status = 1 ORDER BY id_carousel DESC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getProfil(){
        $sql = "SELECT * FROM profil WHERE status=1 ORDER BY judul_profil ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getOthers($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('profil', $filter)->result();
        return $res;
    }

    public function getBerita(){
        $sql = "SELECT * FROM berita WHERE status=1 ORDER BY id_berita ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getOtherBerita($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('berita', $filter)->result();
        return $res;
    }

    public function getOtherInfo($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('informasi', $filter)->result();
        return $res;
    }

    public function getInfo(){
        $sql = "SELECT * FROM informasi WHERE status=1 ORDER BY id_informasi ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getPendonorInfo($param){
        $sql = "SELECT p.*, b.tanggal as tgl_booking, b.lokasi as lokasi_booking, b.jam_datang as pukul, b.status as status_booking
        FROM pendonor p
        LEFT JOIN booking b ON p.id_pendonor = b.id_pendonor
        WHERE p.id_pendonor='$param'
        ORDER BY b.tanggal DESC
        LIMIT 1";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function updateJadwal($idmobil){
        $sql = "UPDATE 
        jadwal_donor
        SET terisi = terisi + 1
        WHERE id_mobil = $idmobil ";       
        $this->db->query($sql);
        return true;
    }
}