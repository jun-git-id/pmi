<?php
class PendonorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendonor');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
        $this->load->library(array('upload', 'image_lib'));
    }

    public function VUserDonor()
	{
        $pendonor = $this->Pendonor->getAll();
		$data = array(
            'nav_title' => 'Pendonor PMI Aceh Selatan',
            'pendonor' => $pendonor
        );			
		$this->template->admin('pmi-admin/VUserDonor', $data);
	}

    public function store()
    {
        $param = $_POST;
        $store['nik_pendonor']      =$param['nik_pendonor'];
        $store['nama_pendonor']     =$param['nama_pendonor'];
        $store['email_pendonor']    =$param['email_pendonor'];
        $store['password']          =$param['password'];
        $store['umur_pendonor']     =$param['umur_pendonor'];
        $store['alamat_pendonor']   =$param['alamat_pendonor'];
        $store['telepon_pendonor']  =$param['telepon_pendonor'];
        $store['id_jenis_darah']    =$param['id_jenis_darah'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['foto_pendonor']    =$banner;
        };

        $this->Pendonor->insert($store);
        redirect('listpendonor');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_pendonor = '.$_POST['id_pendonor'];
        $dataHasil = $this->Pendonor->get($data);

        if(!empty($dataHasil[0]->donor_terakhir)){
            $date=date_create($dataHasil[0]->donor_terakhir);
            $dataHasil[0]->donor_terakhir = date_format($date,"d F Y");

            $date=date_create($dataHasil[0]->donor_selanjutnya);
            $dataHasil[0]->donor_selanjutnya = date_format($date,"d F Y");
        }
        echo json_encode($dataHasil);
    }

    public function edit(){
        $param = $_POST;

        $store['id_pendonor']       =$param['id_pendonor'];
        $store['nik_pendonor']      =$param['nik_pendonor'];
        $store['nama_pendonor']     =$param['nama_pendonor'];
        $store['email_pendonor']    =$param['email_pendonor'];
        $store['password']          =$param['password'];
        $store['umur_pendonor']     =$param['umur_pendonor'];
        $store['alamat_pendonor']   =$param['alamat_pendonor'];
        $store['telepon_pendonor']  =$param['telepon_pendonor'];
        $store['id_jenis_darah']    =$param['id_jenis_darah'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['foto_pendonor']    =$banner;
        };

        $this->Pendonor->update($store);

        redirect('listpendonor');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Pendonor->delete($dataDelete);
        redirect('listpendonor');
    }

    function upload_image(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['file']['name'])){
 
            if ($this->upload->do_upload('file')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                // $config['quality']= '100%';
                //$config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url('assets/images/'.$gambar);
            }                      
        }else{
            return base_url('assets/images/default.jpg');
        }         
    }
}
