<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Darah extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by('id_darah', 'ASC');
        $res = $this->db->get('darah')->result();
        return $res;
    }
    public function getDetailDarah(){
        $this->db->order_by('id_darah', 'ASC');        
        $this->db->order_by('id_jenis_darah', 'ASC');
        $res = $this->db->get('detail_darah')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('detail_darah', $filter)->result();
        return $res;
    }
    public function getAjx($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('darah', $filter)->result();
        return $res;
    }
    public function getUpdated(){
        $sql = "SELECT updated_at FROM detail_darah ORDER BY updated_at DESC LIMIT 1;";
        $result = $this->db->query($sql);
        return $result->row()->updated_at;
    }
    public function getStock($darah,$jenis){
        $sql = "SELECT stok 
        FROM detail_darah
        WHERE id_darah = $darah AND
        id_jenis_darah = $jenis";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function insertDetail($param){
        $this->db->insert('detail_darah', $param);
        return $this->db->insert_id();
    }
    public function insertLaporan($param){
        $this->db->insert('laporan', $param);
        return $this->db->insert_id();
    }
    public function updateOut($iddarah,$idjenis){
        $sql = "UPDATE 
        detail_darah
        SET stok = stok - 1
        WHERE id_darah = $iddarah AND
        id_jenis_darah = $idjenis";       
        $this->db->query($sql);
        return true;
    }
    public function update($iddarah,$idjenis){
        $sql = "UPDATE 
        detail_darah
        SET stok = stok + 1
        WHERE id_darah = $iddarah AND
        id_jenis_darah = $idjenis";       
        $this->db->query($sql);
        return true;
    }
    public function edit($iddarah,$idjenis,$stok){
        $sql = "UPDATE 
        detail_darah
        SET stok = $stok
        WHERE id_darah = $iddarah AND
        id_jenis_darah = $idjenis";       
        $this->db->query($sql);
        return true;
    }
    public function getLokasi(){
        $sql = "SELECT lokasi from jadwal_donor WHERE jadwal > NOW() - INTERVAL 1 DAY";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function editDarah($param){
        $this->db->where('id_darah', $param['id_darah'])->update('darah', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('detail_darah');
        $this->db->where($param)->delete('darah');        
        return true;
    }
}