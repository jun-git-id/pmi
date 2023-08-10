<html>
    <head>
    <meta charset="utf-8" />

  <title>Reminder Donor Darah</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style type="text/css">
            html{ height:100%; }
            body{ min-height:100%; padding:0; margin:0; position:relative; }

            footer{ 
                position:absolute; 
                bottom:0; 
                width:100%; 
                height:200px; 
            }


            article{ 
                width: 100%; 
                color: #444; 
            }

            header{ 
                background:#ecf0f1; 
                text-align: center;
                padding: 20px;
            }

            footer{ 
                border-top: 1px solid #abb7b7; 
            }

            .content-footer{
                padding: 5px 7px;
            }

            .content-penting{
                color: #6c7a89;
            }
        </style>
    </head>
    
    <body>
        <header>
            <img style="width: 40%;" src="https://mediacenter.malangkota.go.id/wp-content/uploads/2015/10/logo-pmi-310x165.jpg" alt="">
        </header>
        <article>
            <p>Yth. Bapak/Ibu <strong><?= $name ?></strong></p>
            <p>Kami dari PMI Aceh Selatan ingin mengingatkan bahwa Bapak/Ibu <?= $name ?> sudah bisa melakukan donor darah lagi, karena sudah lebih dari 3 bulan sejak Bapak/Ibu terakhir melakukan donor darah pada tanggal <?= $donor ?>.</p>
            <p>Untuk informasi jadwal donor darah bisa dilihat dengan menekan tombol atau link dibawah ini. </p>
            <br>
            <a class="btn btn-primary" href="<?php echo site_url('jadwal'); ?>">Jadwal Donor Darah</a>
            <br>
            <p>&nbsp;</p>
            <p>Terima Kasih<br></p>
            <p>Admin PMI Aceh Selatan</p>
        </article>
        <footer>
            <div class="content-footer">
                <p>&copy; <?php echo date("Y"); ?> <strong>PMI Aceh Selatan</strong> </p>
                <hr>
                <div class="content-penting">
                    <p>PENTING!</p>
                    <p>Informasi yang disampaikan melalui e-mail ini dikirimkan otomatis oleh sistem kami.</p>
                </div>
            </div>
        </footer>
    </body>
</html>