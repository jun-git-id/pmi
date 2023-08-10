<?php
class MobilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VMobilDonor()
	{
        $mobil = $this->Mobil->getAll();
        $udd = $this->Mobil->getUDD();
		$data = array(
            'nav_title' => 'Jadwal Donor Darah PMI Aceh Selatan',
            'mobil'   => $mobil,
            'udd'   => $udd
        );			
		$this->template->admin('pmi-admin/VMobilDonor', $data);
	}

    public function store()
    {
        $param = $_POST;

        $date=date_create($param['jadwal']);
        $param['jadwal'] = date_format($date,"Y-m-d");
        $this->Mobil->insert($param);
        redirect('mobildonor');
    }    

    public function ajxGet(){
        echo json_encode($this->Mobil->get($_POST['id_mobil']));
    }

    public function edit(){
        $dataEdit = $_POST;
        
        $date=date_create($dataEdit['jadwal']);
        $dataEdit['jadwal'] = date_format($date,"Y-m-d");
        $this->Mobil->update($dataEdit);

        redirect('mobildonor');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Mobil->delete($dataDelete);
        redirect('mobildonor');
    }
}
