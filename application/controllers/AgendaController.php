<?php
class AgendaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VAgenda()
	{
        $agenda = $this->Agenda->getAll();
		$data = array(
            'nav_title' => 'Agenda PMI Aceh Selatan',
            'agenda'   => $agenda
        );			
		$this->template->admin('pmi-admin/VAgenda', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Agenda->insert($param);
        redirect('agenda');
    }    

    public function ajxGet(){
        echo json_encode($this->Agenda->get($_POST['id_agenda']));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Agenda->update($dataEdit);

        redirect('agenda');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Agenda->delete($dataDelete);
        redirect('agenda');
    }
}
