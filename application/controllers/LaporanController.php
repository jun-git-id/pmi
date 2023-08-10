<?php
class LaporanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VLaporanMasuk()
	{
        $laporan = $this->Laporan->getMasuk();
        $darah = $this->Laporan->getDarah();
        $tahun = $this->Laporan->getYear();
		$data = array(
            'nav_title' => 'Laporan PMI Aceh Selatan',
            'laporan' => $laporan,
            'darah' => $darah,
            'tahun' => $tahun
        );			
		$this->template->admin('pmi-admin/VLaporanMasuk', $data);
	}

    public function VLaporanKeluar()
	{
        $laporan = $this->Laporan->getKeluar();
        $darah = $this->Laporan->getDarah();
        $tahun = $this->Laporan->getYear();
		$data = array(
            'nav_title' => 'Laporan PMI Aceh Selatan',
            'laporan' => $laporan,
            'darah' => $darah,
            'tahun' => $tahun
        );			
		$this->template->admin('pmi-admin/VLaporanKeluar', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Laporan->insert($param);
        redirect('laporanmasuk');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_laporan = '.$_POST['id_laporan'];
        $dataHasil = $this->Laporan->get($data);
        $namaDarah = $this->db->where('id_darah', $dataHasil[0]->id_darah)->get('darah')->result();
        $dataHasil[0]->nama_darah = $namaDarah[0]->jenis_darah;
        echo json_encode($dataHasil);
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Laporan->update($dataEdit);

        redirect('laporanmasuk');
    }

    public function editKeluar(){
        $dataEdit = $_POST;
        $this->Laporan->update($dataEdit);

        redirect('laporankeluar');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Laporan->delete($dataDelete);
        redirect('laporanmasuk');
    }

    public function deleteKeluar(){
        $dataDelete = $_POST;
        $this->Laporan->delete($dataDelete);
        redirect('laporankeluar');
    }

    public function masukChart(){     
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahMasuk($year); 

        $bar_graph = "";
        $darahA = "";
        $darahAB = "";
        $darahB = "";
        $darahO = "";

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahA = substr($darahA, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahB = substr($darahB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahAB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahAB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahAB = substr($darahAB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahO .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahO .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahO = substr($darahO, 0, -1);

        $bar_graph = '
        <canvas id="graph" data-settings=
        \'
            {
                "labels": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", 
                "Aug", "Sep", "Oct", "Nov", "Des"],
                "datasets":[{
                    "label": "A",
                    "data": [' . $darahA . '],
                    "backgroundColor": "#0099ff",
                    "stack": "Stack 0"
                    },
                    {
                    "label": "B",
                    "data": [' . $darahB . '],
                    "backgroundColor": "#e30d00",
                    "stack": "Stack 1"
                    },
                    {
                    "label": "AB",
                    "data": [' . $darahAB . '],
                    "backgroundColor": "#0d976f",
                    "stack": "Stack 2"
                    },
                    {
                    "label": "O",
                    "data": [' . $darahO . '],
                    "backgroundColor": "#ffcc00",
                    "stack": "Stack 3"
                }]
            }
        \'
        ></canvas>';

        echo $bar_graph;
    }

    public function keluarChart(){     
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahKeluar($year); 

        $bar_graph = "";
        $darahA = "";
        $darahAB = "";
        $darahB = "";
        $darahO = "";

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahA = substr($darahA, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahB = substr($darahB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahAB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahAB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahAB = substr($darahAB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahO .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahO .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahO = substr($darahO, 0, -1);

        $bar_graph = '
        <canvas id="graph" data-settings=
        \'
            {
                "labels": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", 
                "Aug", "Sep", "Oct", "Nov", "Des"],
                "datasets":[{
                    "label": "A",
                    "data": [' . $darahA . '],
                    "backgroundColor": "#0099ff",
                    "stack": "Stack 0"
                    },
                    {
                    "label": "B",
                    "data": [' . $darahB . '],
                    "backgroundColor": "#e30d00",
                    "stack": "Stack 1"
                    },
                    {
                    "label": "AB",
                    "data": [' . $darahAB . '],
                    "backgroundColor": "#0d976f",
                    "stack": "Stack 2"
                    },
                    {
                    "label": "O",
                    "data": [' . $darahO . '],
                    "backgroundColor": "#ffcc00",
                    "stack": "Stack 3"
                }]
            }
        \'
        ></canvas>';

        echo $bar_graph;
    }

    public function getDataPrint(){  
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahMasuk($year); 
        $darahA = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA[$bulan-1] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$bulan-1] = 0;
                    break;
                }
            }
        }

        $counter = 12;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }
        echo json_encode($darahA);
    }

    public function getDataPrintKeluar(){  
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahKeluar($year); 
        $darahA = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA[$bulan-1] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$bulan-1] = 0;
                    break;
                }
            }
        }

        $counter = 12;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }
        echo json_encode($darahA);
    }

    public function generate_pdf() {
        $param = $_POST;
        $judul = "";
        if($param['tipe'] == 1){
            $judul = "Laporan Darah Masuk";
        }else if($param['tipe'] == 2){
            $judul = "Laporan Darah Keluar";
        }
        $printed=date_create();
        $printed = date_format($printed,"d F Y");
		//load pdf library
		$this->load->library('Pdf');        
        $this->load->library('table');
		
		$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('wichtig');
		$pdf->SetTitle($judul);
		$pdf->SetSubject('-');
		$pdf->SetKeywords('Laporan, Darah, Wichtig, PDF');

		// set default header data
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set font
		$pdf->SetFont('times', '', 12);
		
		// ---------------------------------------------------------
        $dataString = "";
        $month = "";

        if($param['bulan'] == 1){
            $month = "Januari";
        }else if($param['bulan'] == 2){
            $month = "Februari";
        }else if($param['bulan'] == 3){
            $month = "Maret";
        }else if($param['bulan'] == 4){
            $month = "April";
        }else if($param['bulan'] == 5){
            $month = "Mei";
        }else if($param['bulan'] == 6){
            $month = "Juni";
        }else if($param['bulan'] == 7){
            $month = "Juli";
        }else if($param['bulan'] == 8){
            $month = "Agustus";
        }else if($param['bulan'] == 9){
            $month = "September";
        }else if($param['bulan'] == 10){
            $month = "Oktober";
        }else if($param['bulan'] == 11){
            $month = "November";
        }else if($param['bulan'] == 12){
            $month = "Desember";
        }
		$laporanmasuk = $this->Laporan->getDownloadData($param['tipe'],$param['bulan'],$param['tahun']);
        foreach($laporanmasuk as $sf){
            $date=date_create($sf->tanggal);
            $tanggal = date_format($date,"d M Y");
            $gol = "";
            if($sf->id_jenis_darah == 1){
                $gol = "A";
            }else if($sf->id_jenis_darah == 2){
                $gol = "B";
            }else if($sf->id_jenis_darah == 3){
                $gol = "AB";
            }else if($sf->id_jenis_darah == 4){
                $gol = "O";
            }

            $dataString = $dataString."
            <tr>
                <td>$sf->nama</td>
                <td>$sf->jenis_darah</td>
                <td>$gol</td>
                <td>$sf->telp</td>
                <td>$tanggal</td>
                <td>$sf->lokasi</td>
            </tr>";
        }
		
        $html = <<<EOD
            <style>
                table {
                    width: 740px;
                }
                th, td {
                    border: 1px solid grey;
                    border-collapse: collapse;
                    padding: 5px;
                }
            </style>
            <h1>$judul</h1>
            <b>Bulan : $month</b><br>
            <i>di cetak pada: $printed</i><br><br>
            <table cellspacing="0" cellpadding="5" style="widht:100%;">
                <tr>
                    <td><b>Nama</b></td>
                    <td style="width:12%"><b>Jenis</b></td>
                    <td style="width:7%"><b>Gol</b></td>
                    <td><b>Telepon</b></td>
                    <td><b>Tanggal Donor</b></td>
                    <td><b>Lokasi Donor</b></td>
                </tr>
                $dataString
            </table>
            EOD;

		// add a page
		$pdf->AddPage();
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		//Close and output PDF document
		$pdf->Output('laporan_darah'.md5(time()) . '.pdf', 'D');
	}
}
