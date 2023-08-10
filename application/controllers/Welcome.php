<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	//authentication
	public function VLogin()
	{
		$this->load->view('pmi-admin/VLogin');
	}

	//signup penodnor
	public function VSignUp()
	{
		$this->load->view('pmi-depan/VSignUp');
	}

	//Blank Page
	public function VBlank()
	{
		$this->template->depan('pmi-depan/VBlank');
	}
}
