<!--begin::Body-->

<script src="<?= base_url(); ?>assets/admin/js/jspdf.umd.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script type="text/javascript">
    window.html2canvas = html2canvas;
    window.jsPDF = window.jspdf.jsPDF;

    function makePDF() {
        var janA = 0;
        var febA = 0;
        var marA = 0;
        var aprA = 0;
        var meiA = 0;
        var junA = 0;
        var julA = 0;
        var augA = 0;
        var sepA = 0;
        var octA = 0;
        var novA = 0;
        var desA = 0;
        var janB = 0;
        var febB = 0;
        var marB = 0;
        var aprB = 0;
        var meiB = 0;
        var junB = 0;
        var julB = 0;
        var augB = 0;
        var sepB = 0;
        var octB = 0;
        var novB = 0;
        var desB = 0;
        var janAB = 0;
        var febAB = 0;
        var marAB = 0;
        var aprAB = 0;
        var meiAB = 0;
        var junAB = 0;
        var julAB = 0;
        var augAB = 0;
        var sepAB = 0;
        var octAB = 0;
        var novAB = 0;
        var desAB = 0;
        var janO = 0;
        var febO = 0;
        var marO = 0;
        var aprO = 0;
        var meiO = 0;
        var junO = 0;
        var julO = 0;
        var augO = 0;
        var sepO = 0;
        var octO = 0;
        var novO = 0;
        var desO = 0;


        $.ajax({
            url: "<?= site_url('laporanmasuk/getPrint') ?>",
            type: "post",
            data: {
                year: $("#pilYear").val()
            },
            success: function(json) {
                var obj = jQuery.parseJSON(json);
                janA = obj[0];
                febA = obj[1];
                marA = obj[2];
                aprA = obj[3];
                meiA = obj[4];
                junA = obj[5];
                julA = obj[6];
                augA = obj[7];
                sepA = obj[8];
                octA = obj[9];
                novA = obj[10];
                desA = obj[11];
                janB = obj[12];
                febB = obj[13];
                marB = obj[14];
                aprB = obj[15];
                meiB = obj[16];
                junB = obj[17];
                julB = obj[18];
                augB = obj[19];
                sepB = obj[20];
                octB = obj[21];
                novB = obj[22];
                desB = obj[23];
                janAB = obj[24];
                febAB = obj[25];
                marAB = obj[26];
                aprAB = obj[27];
                meiAB = obj[28];
                junAB = obj[29];
                julAB = obj[30];
                augAB = obj[31];
                sepAB = obj[32];
                octAB = obj[33];
                novAB = obj[34];
                desAB = obj[35];
                janO = obj[36];
                febO = obj[37];
                marO = obj[38];
                aprO = obj[39];
                meiO = obj[40];
                junO = obj[41];
                julO = obj[42];
                augO = obj[43];
                sepO = obj[44];
                octO = obj[45];
                novO = obj[46];
                desO = obj[47];
            }
        });
        var doc = new jsPDF();
        const date = new Date();
        const newDate = getFullDate(date);
        doc.setFont("helvetica", "bold");
        doc.setFontSize(12);
        doc.text(`Laporan Darah Masuk - ${newDate}`, 20, 20);

        html2canvas(document.querySelector("#capture"), {
            allowTaint: true,
            useCORS: true,
            scale: 6
        }).then(canvas => {
            var img = canvas.toDataURL("image/jpeg");
            doc.addImage(img, 'JPEG', 5, 25, 200, 0);

            doc.setFont("helvetica", "normal");
            doc.setFontSize(12);
            doc.text(`Januari`, 20, 175);
            doc.text(`A    : ${janA}`, 20, 180);
            doc.text(`B    : ${janB}`, 20, 185);
            doc.text(`AB  : ${janAB}`, 20, 190);
            doc.text(`O    : ${janO}`, 20, 195);

            doc.text(`Februari`, 50, 175);
            doc.text(`A    : ${febA}`, 50, 180);
            doc.text(`B    : ${febB}`, 50, 185);
            doc.text(`AB  : ${febAB}`, 50, 190);
            doc.text(`O    : ${febO}`, 50, 195);

            doc.text(`Maret`, 80, 175);
            doc.text(`A    : ${marA}`, 80, 180);
            doc.text(`B    : ${marB}`, 80, 185);
            doc.text(`AB  : ${marAB}`, 80, 190);
            doc.text(`O    : ${marO}`, 80, 195);

            doc.text(`April`, 110, 175);
            doc.text(`A    : ${aprA}`, 110, 180);
            doc.text(`B    : ${aprB}`, 110, 185);
            doc.text(`AB  : ${aprAB}`, 110, 190);
            doc.text(`O    : ${aprO}`, 110, 195);

            doc.text(`Mei`, 140, 175);
            doc.text(`A    : ${meiA}`, 140, 180);
            doc.text(`B    : ${meiB}`, 140, 185);
            doc.text(`AB  : ${meiAB}`, 140, 190);
            doc.text(`O    : ${meiO}`, 140, 195);

            doc.text(`Juni`, 170, 175);
            doc.text(`A    : ${junA}`, 170, 180);
            doc.text(`B    : ${junB}`, 170, 185);
            doc.text(`AB  : ${junAB}`, 170, 190);
            doc.text(`O    : ${junO}`, 170, 195);

            doc.text(`Juli`, 20, 215);
            doc.text(`A    : ${julA}`, 20, 220);
            doc.text(`B    : ${julB}`, 20, 225);
            doc.text(`AB  : ${julAB}`, 20, 230);
            doc.text(`O    : ${julO}`, 20, 235);

            doc.text(`Agustus`, 50, 215);
            doc.text(`A    : ${augA}`, 50, 220);
            doc.text(`B    : ${augB}`, 50, 225);
            doc.text(`AB  : ${augAB}`, 50, 230);
            doc.text(`O    : ${augO}`, 50, 235);

            doc.text(`September`, 80, 215);
            doc.text(`A    : ${sepA}`, 80, 220);
            doc.text(`B    : ${sepB}`, 80, 225);
            doc.text(`AB  : ${sepAB}`, 80, 230);
            doc.text(`O    : ${sepO}`, 80, 235);

            doc.text(`Oktober`, 110, 215);
            doc.text(`A    : ${octA}`, 110, 220);
            doc.text(`B    : ${octB}`, 110, 225);
            doc.text(`AB  : ${octAB}`, 110, 230);
            doc.text(`O    : ${octO}`, 110, 235);

            doc.text(`November`, 140, 215);
            doc.text(`A    : ${novA}`, 140, 220);
            doc.text(`B    : ${novB}`, 140, 225);
            doc.text(`AB  : ${novAB}`, 140, 230);
            doc.text(`O    : ${novO}`, 140, 235);

            doc.text(`Desember`, 170, 215);
            doc.text(`A    : ${desA}`, 170, 220);
            doc.text(`B    : ${desB}`, 170, 225);
            doc.text(`AB  : ${desAB}`, 170, 230);
            doc.text(`O    : ${desO}`, 170, 235);

            doc.save(`LAPORAN DARAH MASUK - ${newDate}.pdf`);
        });
    }

    const getFullDate = (dateObj) => {
        const date = dateObj.getDate()
        const month = getMonthName(dateObj.getMonth())
        const year = dateObj.getFullYear()

        return `${date} ${month} ${year}`
    }

    const getMonthName = (month) => {
        let res
        switch (month) {
            case 0:
                res = "January"
                break;
            case 1:
                res = "February"
                break;
            case 2:
                res = "March"
                break;
            case 3:
                res = "April"
                break;
            case 4:
                res = "May"
                break;
            case 5:
                res = "June"
                break;
            case 6:
                res = "July"
                break;
            case 7:
                res = "August"
                break;
            case 8:
                res = "September"
                break;
            case 9:
                res = "October"
                break;
            case 10:
                res = "November"
                break;
            case 11:
                res = "December"
                break;
        }
        return res
    }
</script>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->

        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <div style="text-align:right;">
                                <button class="btn btn-danger" type="button" style="margin-top:-6.5rem !important" id="btnPdf" onclick="makePDF()"><i class="fas fa-file-download"></i>Download PDF</button>
                            </div>
                            <div id="capture" class="card card-xl-stretch mt-n0">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-1 mb-1">Laporan Masuk</span>
                                        <span class="text-muted fw-bold fs-4">Berdasarkan Jenis Golongan Darah</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar" data-kt-buttons="true">
                                        <select class="form-select form-select-solid" data-control="select2" id="pilYear" data-placeholder="Tahun">
                                            <option></option>
                                            <?php
                                            $sel = "";
                                            foreach ($tahun as $items) {
                                                if ($items->TAHUN == date('Y')) {
                                                    $sel = "selected";
                                                } else {
                                                    $sel = "";
                                                };
                                                echo '<option value="' . $items->TAHUN . '" ' . $sel . '>' . $items->TAHUN . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <div class="py-5">
                                    <!--begin::Card-->
                                    <div class="card card-bordered">
                                        <div class="card-body">
                                            <div class="mb-5" id="divGraph">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Charts Widget 2-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card card-xl-stretch mb-5 mb-xl-8 mt-n21">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-1 mb-1">Daftar Laporan Darah Masuk</span>
                                        <!-- <span class="text-muted fw-bold fs-7">Laporan Darah Masuk</span> -->
                                    </h3>
                                    <div style="text-align:right;">
                                        <a data-bs-toggle="modal" data-bs-target="#downloadPDF" class="btn btn-danger"><i class="fas fa-file-download"></i>Download Laporan</a>
                                    </div>
                                </div>
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableLaporanMasuk">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-120px">NIK</th>
                                                    <th class="min-w-120px">Nama</th>
                                                    <th class="min-w-120px">Tipe</th>
                                                    <th class="min-w-120px">Jenis Golongan Darah</th>
                                                    <th class="min-w-120px">Tanggal</th>
                                                    <th class="min-w-120px">Lokasi Donor</th>
                                                    <th class="min-w-150px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <?php
                                                foreach ($laporan as $item) {
                                                    $golongan = "";
                                                    $newDate = date("d M Y", strtotime($item->tanggal));
                                                    if ($item->id_jenis_darah == 1) {
                                                        $golongan = "A";
                                                    } else if ($item->id_jenis_darah == 2) {
                                                        $golongan = "B";
                                                    } else if ($item->id_jenis_darah == 3) {
                                                        $golongan = "AB";
                                                    } else if ($item->id_jenis_darah == 4) {
                                                        $golongan = "O";
                                                    };
                                                    echo '
                                                        <tr>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        ' . $item->nik_pendonor . '
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        ' . $item->nama . '
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        ' . $item->jenis_darah . '
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        ' . $golongan . '
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        ' . $newDate . '
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        ' . $item->lokasi . '
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        <a href="" title="Detail Laporan" data-bs-toggle="modal" data-bs-target="#dtl_laporanmasuk" data-id="' . $item->id_laporan . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm dtl_laporanmasuk me-1">
                                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen045.svg-->
                                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                    <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                                                    <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
                                                                </svg></span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="" title="Edit Laporan" data-bs-toggle="modal" data-bs-target="#edit_laporanmasuk" data-id="' . $item->id_laporan . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm edit_laporanmasuk me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#" title="Hapus Laporan" data-bs-toggle="modal" data-bs-target="#del_laporanmasuk" data-id="' . $item->id_laporan . '" class="btn btn-icon btn-bg-light btn-active-color-primary del_laporanmasuk btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                    </tr>
                                                        ';
                                                }
                                                ?>


                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                            </div>
                            <!--end::Charts Widget 2-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!-- begin modal Edit Laporan masuk -->
    <div class="modal fade" id="edit_laporanmasuk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Edit Laporan Masuk PMI</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                            </svg></span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <form action="<?= site_url('laporanmasuk/edit') ?>" method="post">
                    <div class="modal-body">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">NIK</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="nikEditMasuk" class="form-control form-control-solid" name="nik_pendonor" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nama</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="namaEditMasuk" class="form-control form-control-solid" name="nama" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tipe Golongan Darah</span>
                            </label>
                            <!--end::Label-->
                            <select name="id_darah" id="jenisEditMasuk" aria-label="Pilih Jenis Darah" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                <?php
                                foreach ($darah as $list) {
                                    echo '
                                            <option value="' . $list->id_darah . '">' . $list->jenis_darah . '</option>
                                        ';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Jenis Golongan Darah</span>
                            </label>
                            <!--end::Label-->
                            <select name="id_jenis_darah" id="darahEditMasuk" class="form-select form-select-sm form-select-solid">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">AB</option>
                                <option value="4">O</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Alamat</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="alamatEditMasuk" class="form-control form-control-solid" name="alamat" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Instansi</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="instansiEditMasuk" class="form-control form-control-solid" name="instansi" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Nomor Telepon</span>
                            </label>
                            <!--end::Label-->
                            <input type="number" id="telpEditMasuk" class="form-control form-control-solid" name="telp" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tanggal</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" id="edit_datelaporanmasuk" name="tanggal" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Lokasi Donor</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" id="lokasiEditMasuk" class="form-control form-control-solid" name="lokasi" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="idEditMasuk" name="id_laporan" class="form-control">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="submitprofil" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal Edit Laporan masuk-->

    <!-- begin hapus Laporan masuk-->
    <div class="modal fade" id="del_laporanmasuk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Hapus Laporan Masuk</h3>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                            </svg></span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <form action="<?= site_url('laporanmasuk/delete') ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus Laporan Masuk tersebut ?</p>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" id="idHapusMasuk" name="id_laporan">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal hapus Laporan Masuk -->

    <!-- begin modal detail Laporan Masuk-->
    <div class="modal fade" id="dtl_laporanmasuk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Detail Laporan Masuk</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                            </svg></span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <h6>NIK</h6>
                        <p id="nikDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Nama</h6>
                        <p id="namaDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Tipe Darah</h6>
                        <p><span id="darahDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Jenis Golongan Darah</h6>
                        <p><span id="golDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Alamat</h6>
                        <p><span id="alamatDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Instansi</h6>
                        <p><span id="instansiDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Nomor Telepon</h6>
                        <p id="telpDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Tanggal</h6>
                        <p><span id="tanggalDetailMasuk"></p>
                    </div>
                    <div class="form-group">
                        <h6>Lokasi Donor</h6>
                        <p id="lokasiDetailMasuk"></p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal detail laporan masuk -->

    <!-- modal download  -->
    <div class="modal fade" id="downloadPDF">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Download PDF</h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                            </svg></span>
                    </div>
                </div>
                <form action="<?= site_url('laporanmasuk/printLaporan') ?>" method="post">
                    <div class="modal-body">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Tahun</span>
                            </label>
                            <select name="tahun" class="form-select form-select-sm form-select-solid">
                                <?php
                                $sel = "";
                                foreach ($tahun as $items) {
                                    if ($items->TAHUN == date('Y')) {
                                        $sel = "selected";
                                    } else {
                                        $sel = "";
                                    };
                                    echo '<option value="' . $items->TAHUN . '" ' . $sel . '>' . $items->TAHUN . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Bulan</span>
                            </label>
                            <select name="bulan" class="form-select form-select-sm form-select-solid">
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="tipe" value="1">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-danger" type="submit" id="laporanPdf"><i class="fas fa-file-download"></i>Download Laporan</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
</body>
<!--end::Body-->
<!--begin::Javascript-->
<script>
    var hostUrl = "<?= base_url(); ?>assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url(); ?>assets/admin/js/scripts.bundle.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<script type="text/javascript">
    //laporan masuk
    $.ajax({
        url: "<?= site_url('laporanmasuk/masukChart') ?>",
        type: "post",
        success: function(bar_graph) {
            $("#divGraph").html(bar_graph);
            var monGraphData = JSON.parse($("#graph").data("settings"));
            $("#graph").chart = new Chart($("#graph"), {
                type: "bar",
                data: monGraphData,
                options: {
                    plugins: {
                        legend: {
                            display: true
                        }
                    },
                    scale: {
                        ticks: {
                            precision: 0
                        }
                    }
                }
            });
        }
    });

    $("#pilYear").change(function() {
        $.ajax({
            url: "<?= site_url('laporanmasuk/masukChart') ?>",
            type: "post",
            data: {
                year: $(this).val()
            },
            success: function(bar_graph) {
                $("#divGraph").html(bar_graph);
                var monGraphData = JSON.parse($("#graph").data("settings"));
                $("#graph").chart = new Chart($("#graph"), {
                    type: "bar",
                    data: monGraphData,
                    options: {
                        plugins: {
                            legend: {
                                display: true
                            }
                        },
                        scale: {
                            ticks: {
                                precision: 0
                            }
                        }
                    }
                });
            }
        });
    });

    //datatable laporan
    $('#dataTableLaporanMasuk').dataTable({
        "language": {
            "lengthMenu": "Tampilkan _MENU_",
            "zeroRecords": "Tidak ada data",
            "info": "Menampilkan _PAGE_ dari _PAGES_ Halaman",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Selanjutnya"
            },

        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

    $("#edit_datelaporanmasuk").flatpickr({
        dateFormat: "d M Y",
    });

    $('#dataTableLaporanMasuk tbody').on('click', '.dtl_laporanmasuk', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('laporanmasuk/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_laporan: id
            },
            success: res => {
                $('#nikDetailMasuk').html(res[0].nik_pendonor)
                $('#namaDetailMasuk').html(res[0].nama)
                $('#darahDetailMasuk').html(res[0].nama_darah)
                $('#alamatDetailMasuk').html(res[0].alamat)
                $('#instansiDetailMasuk').html(res[0].instansi)
                $('#telpDetailMasuk').html(res[0].telp)
                $('#tanggalDetailMasuk').html(res[0].tanggal)
                $('#lokasiDetailMasuk').html(res[0].lokasi)
                if (res[0].id_jenis_darah == 1) {
                    $('#golDetailMasuk').html('A')
                } else if (res[0].id_jenis_darah == 2) {
                    $('#golDetailMasuk').html('B')
                } else if (res[0].id_jenis_darah == 3) {
                    $('#golDetailMasuk').html('AB')
                } else if (res[0].id_jenis_darah == 4) {
                    $('#golDetailMasuk').html('O')
                }
            }
        })
    })

    $('#dataTableLaporanMasuk tbody').on('click', '.edit_laporanmasuk', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('laporanmasuk/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_laporan: id
            },
            success: res => {
                $('#nikEditMasuk').val(res[0].nik_pendonor)
                $('#namaEditMasuk').val(res[0].nama)
                $('#alamatEditMasuk').val(res[0].alamat)
                $('#instansiEditMasuk').val(res[0].instansi)
                $('#telpEditMasuk').val(res[0].telp)
                $('#edit_datelaporanmasuk').val(res[0].tanggal)
                $('#lokasiEditMasuk').val(res[0].lokasi)
                $('#jenisEditMasuk').val(res[0].id_darah).change()
                $('#darahEditMasuk').val(res[0].id_jenis_darah).change()
                $('#idEditMasuk').val(res[0].id_laporan)
            }
        })
    })

    $('#dataTableLaporanMasuk tbody').on('click', '.del_laporanmasuk', function() {
        const id = $(this).data("id")
        $('#idHapusMasuk').val(id)
    })
</script>