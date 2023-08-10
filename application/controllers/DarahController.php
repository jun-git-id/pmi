<?php
class DarahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Darah');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VStokDarah()
	{
        $darah = $this->Darah->getAll();
        $detail = $this->Darah->getDetailDarah();
        $updated = $this->Darah->getUpdated();
        $lokasi = $this->Darah->getLokasi();
		$data = array(
            'nav_title' => 'Stok Darah PMI Aceh Selatan',
            'darah' => $darah,
            'detail'=> $detail,
            'last_update'=> $updated,
            'lokasi' => $lokasi
        );			
		$this->template->admin('pmi-admin/VStokDarah', $data);
	}

    public function addType()
    {
        $param = $_POST;
        
        $this->db->insert('darah', $param);        
        $res["id_darah"] = $this->db->insert_id(); 

        for($i=1;$i<=4;$i++){
            $detail['id_darah']         = $res["id_darah"];
            $detail['id_jenis_darah']   = $i;
            $detail['stok']             = 0;
            $this->Darah->insertDetail($detail);
        }
        redirect('stokdarah');
    }    

    public function addStock()
    {
        $param = $_POST;
        $this->Darah->update($param['id_darah'],$param['id_jenis_darah']);
        $this->Darah->insertLaporan($param);

        redirect('stokdarah');
    }  

    public function outStock()
    {
        $param = $_POST;
        $this->Darah->updateOut($param['id_darah'],$param['id_jenis_darah']);
        $this->Darah->insertLaporan($param);

        redirect('stokdarah');
    }  

    public function ajxGet(){
        $data['filter'] = 'id_darah = '.$_POST['id_darah'];
        echo json_encode($this->Darah->get($data));
    }

    public function ajxGetDarah(){
        $data['filter'] = 'id_darah = '.$_POST['id_darah'];
        echo json_encode($this->Darah->getAjx($data));
    }

    public function getStock(){        
        echo json_encode($this->Darah->getStock($_POST['id_darah'],$_POST['id_jenis_darah']));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Darah->editDarah($dataEdit);

        redirect('stokdarah');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Darah->delete($dataDelete);
        redirect('stokdarah');
    }
}
