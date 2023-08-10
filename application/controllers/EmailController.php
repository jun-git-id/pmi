<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class EmailController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
		$this->load->model('Email');
    }

    public function reminderEmail()
	{
		$response = false;
		$mail = new PHPMailer();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.googlemail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'uddpmimalang@gmail.com'; 
		$mail->Password = 'pgxilesstwliahpu'; 
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->Timeout = 60;
		$mail->SMTPKeepAlive = true;

		$mail->setFrom('uddpmimalang@gmail.com', 'UDD PMI Malang');
		$mail->addReplyTo('uddpmimalang@gmail.com', 'UDD PMI Malang'); 

		$listSend = $this->Email->getPendonor();

		if($listSend != NULL){
			foreach($listSend as $item){
				$mail->ClearAddresses();
				$mail->ClearAllRecipients();
				$mail->addAddress($item->email_pendonor); 
				$mail->Subject = 'Reminder Donor Darah'; 
	
				$mail->isHTML(true);
	
				$data['name'] = $item->nama_pendonor;
				$data['donor'] = $item->donor_terakhir;
				$mailContent =  $this->load->view('pmi-admin/template/email', $data,true);
				$mail->Body = $mailContent;
	
				$mail->send();
			}
			$this->session->set_flashdata('success_email','Berhasil Mengirim Email Pengingat');
		}else{
			$this->session->set_flashdata('error_email','Tidak ada pendonor yang siap untuk melakukan donor darah');
		};
		
		redirect('listpendonor');
	}
}
