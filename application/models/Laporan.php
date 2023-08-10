<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getMasuk(){
        $sql = "SELECT l.*,d.jenis_darah FROM laporan l,darah d WHERE l.id_darah = d.id_darah AND l.tipe=1 ORDER BY tanggal ASC";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getDownloadData($tipe,$bulan,$tahun){
        $sql = "SELECT l.*,d.jenis_darah FROM laporan l,darah d WHERE l.id_darah = d.id_darah AND l.tipe='$tipe' AND YEAR(tanggal)=$tahun AND MONTH(tanggal)=$bulan ORDER BY tanggal ASC";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getKeluar(){
        $sql = "SELECT l.*,d.jenis_darah FROM laporan l,darah d WHERE l.id_darah = d.id_darah AND l.tipe=2";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getDarah(){
        $this->db->order_by('id_darah', 'ASC');
        $res = $this->db->get('darah')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('laporan', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('laporan', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_laporan', $param['id_laporan'])->update('laporan', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('laporan');
        return true;
    }

    public function getDarahMasuk($param){
        $sql = "SELECT         
        id_jenis_darah,
        COUNT(id_laporan) as TOTAL,
        MONTH(tanggal) as BULAN
        FROM laporan 
        WHERE tipe = 1 AND YEAR(tanggal) = '$param'
        GROUP BY id_jenis_darah, MONTH(tanggal)
        ORDER BY MONTH(tanggal)";
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
    public function getDarahKeluar($param){
        $sql = "SELECT         
        id_jenis_darah,
        COUNT(id_laporan) as TOTAL,
        MONTH(tanggal) as BULAN
        FROM laporan 
        WHERE tipe = 2 AND YEAR(tanggal) = '$param'
        GROUP BY id_jenis_darah, MONTH(tanggal)
        ORDER BY MONTH(tanggal)";
        $result = $this->db->query($sql)->result();
        return $result;
    }

    public function getYear(){
        $sql = "SELECT         
        YEAR(tanggal) as TAHUN
        FROM laporan
        GROUP BY YEAR(tanggal)
        ORDER BY YEAR(tanggal) ASC";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}