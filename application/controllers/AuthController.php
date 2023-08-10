<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');        
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    public function auth()
    {
        $data = $_POST;
        $user = $this->User->get(['filter' => ['email_admin' => $data['EMAIL_USER']]]);
        $pendonor = $this->User->getPendonor(['filter' => ['email_pendonor' => $data['EMAIL_USER']]]);
        
        if($user != null){
            if($data['PASSWORD_USER'] == $user[0]->password){    
                $newdata = array(
                    'hak_akses' => $user[0]->hak_akses,
                    'name'      => $user[0]->nama_admin,
                    'email'     => $user[0]->email_admin,
                    'avatar'    => base_url().'/assets/images/default.jpg',
                    'id'        => $user[0]->id_admin,
                    'logged_in' => TRUE
                );   
                $this->session->set_userdata($newdata);                   
                redirect('profil');
            }else{
                $this->session->set_flashdata('error_login', 'Email atau password salah!');  
                redirect('login');
            }
        }else if($pendonor != null){
            if($data['PASSWORD_USER'] == $pendonor[0]->password){    
                $newdata = array(
                    'hak_akses' => 2,
                    'name'      => $pendonor[0]->nama_pendonor,
                    'alamat'    => $pendonor[0]->alamat_pendonor,
                    'notelp'    => $pendonor[0]->telepon_pendonor,
                    'avatar'    => $pendonor[0]->foto_pendonor,
                    'id'        => $pendonor[0]->id_pendonor,
                    'donkir'    => $pendonor[0]->donor_terakhir,
                    'donlan'    => $pendonor[0]->donor_selanjutnya,
                    'logged_in' => TRUE
                );   
                $this->session->set_userdata($newdata);                   
                redirect('beranda');
            }else{
                $this->session->set_flashdata('error_login', 'Email atau password salah!');  
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('error_login', 'User belum terdaftar!'); 
            redirect('login');
        }
    }    

    public function register(){        
        $param = $_POST;

        $store['nik_pendonor']      = $_POST['nik_pendonor'];
        $store['nama_pendonor']     = $_POST['nama_pendonor'];
        $store['email_pendonor']    = $_POST['email_pendonor'];
        $store['password']          = $_POST['password'];
        $store['umur_pendonor']     = $_POST['umur_pendonor'];
        $store['alamat_pendonor']   = $_POST['alamat_pendonor'];
        $store['telepon_pendonor']  = $_POST['telepon_pendonor'];
        $store['id_jenis_darah']    = $_POST['id_jenis_darah'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['foto_pendonor']    =$banner;
        };

        $this->User->signup($store);
        $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');

        redirect('login');
        
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

    public function logout(){
        $this->session->sess_destroy();

        redirect('beranda');
    }
}
