<?php
class BeritaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita');
        $this->load->library(array('upload', 'image_lib'));
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VBerita()
	{
        $berita = $this->Berita->getAll();				
        $data = array(
            'nav_title' => 'Berita PMI Aceh Selatan',
            'berita' => $berita
        );			
		$this->template->admin('pmi-admin/VBerita', $data);
	}

    public function store()
    {
        $param = $_POST;        

        $store['judul_berita']  =$param['judul_berita'];
        $store['penulis_berita']=$param['penulis_berita'];
        $store['tanggal_berita']=$param['tanggal_berita'];
        $store['deskripsi']     =$param['deskripsi'];
        $store['status']        =$param['status'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar']    =$banner;
        };

        $this->Berita->insert($store);
        redirect('berita');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_berita = '.$_POST['id_berita'];
        echo json_encode($this->Berita->get($data));
    }

    public function edit(){
        $param = $_POST;

        $store['judul_berita']  =$param['judul_berita'];
        $store['penulis_berita']=$param['penulis_berita'];
        $store['tanggal_berita']=$param['tanggal_berita'];
        $store['deskripsi']     =$param['deskripsi'];
        $store['status']        =$param['status'];
        $store['id_berita']     =$param['id_berita'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar']    =$banner;
        };

        $this->Berita->update($store);

        redirect('berita');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Berita->delete($dataDelete);
        redirect('berita');
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
