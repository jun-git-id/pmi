<?php
class InformasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VInformasi()
	{
        $informasi = $this->Informasi->getAll();
		$data = array(
            'nav_title' => 'Informasi Donor PMI Aceh Selatan',
            'informasi' => $informasi
        );			
		$this->template->admin('pmi-admin/VInformasi', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Informasi->insert($param);
        redirect('informasi');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_informasi = '.$_POST['id_informasi'];
        echo json_encode($this->Informasi->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Informasi->update($dataEdit);

        redirect('informasi');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Informasi->delete($dataDelete);
        redirect('informasi');
    }
}
