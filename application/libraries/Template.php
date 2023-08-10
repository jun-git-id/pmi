<?php
class Template
{
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    
    function admin($content, $data = null){
        $this->_ci->load->view('pmi-admin/template/header', $data); // Header
        $this->_ci->load->view('pmi-admin/template/navbar', $data); // Navbar
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('pmi-admin/template/sidebar', $data); // sidebar
        // $this->_ci->load->view('pmi-admin/template/footer', $data); // Footer
    }

    function depan($content, $data = null){
        $this->_ci->load->view('pmi-depan/template/header', $data); // Header
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('pmi-depan/template/footer', $data); // Footer
    }
}
?>