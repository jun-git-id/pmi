<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getPendonor(){
        $sql = "SELECT id_pendonor,
        nama_pendonor,
        donor_terakhir,
        email_pendonor 
        FROM pendonor 
        WHERE donor_selanjutnya - INTERVAL 3 DAY < NOW() OR donor_terakhir IS NULL";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}