<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                                <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid">
                    <div class="post d-flex flex-column-fluid">
                        <div id="" class="container-xxl">
                            <div class="card mb-5 mb-xl-8">
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Data Booking Jadwal Donor Darah</span>
                                    </h3>
                                </div>
                                <div class="card-body py-3">
                                    <div class="table-responsive">
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="tableBooking">
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-120px">Lokasi</th>
                                                    <th class="min-w-120px">Tanggal</th>
                                                    <th class="min-w-120px">Nama</th>
                                                    <th class="min-w-120px">Nomor Telepon</th>
                                                    <th class="min-w-150px">Alamat</th>
                                                    <th class="min-w-120px">Booking Waktu</th>
                                                    <th class="min-w-120px">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($bookingNOW as $item) {
                                                    $newDate = date("d M Y", strtotime($item->tanggal));
                                                    $datang = date("H:i", strtotime($item->jam_datang));
                                                    echo '
                                                            <tr>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                ' . $item->lokasi . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $newDate . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $item->nama . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $item->telp . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $item->alamat . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $datang . '
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#" title="Selesai Donor" data-bs-toggle="modal" data-bs-target="#selesaiDonor" data-booking="' . $item->id_booking . '" data-tanggal="' . $item->tanggal . '" data-pendonor="' . $item->id_pendonor . '" data-name="' . $item->nama . '" class="btn btn-icon btn-bg-light btn-active-color-primary selesaiDonor btn-sm">
                                                                <span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor"/>
                                                                    </svg>
                                                                </span>
                                                            </td>
                                                            </tr>
                                                        ';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid mt-n15">
                    <div class="post d-flex flex-column-fluid">
                        <div class="container-xxl">
                            <div class="card mb-5 mb-xl-8">
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Data Booking Selesai Donor Darah</span>
                                    </h3>
                                </div>
                                <div class="card-body py-3">
                                    <div class="table-responsive">
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="tabelSelesaiDonor">
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-120px">Lokasi</th>
                                                    <th class="min-w-120px">Tanggal</th>
                                                    <th class="min-w-120px">Nama</th>
                                                    <th class="min-w-120px">Nomor Telepon</th>
                                                    <th class="min-w-150px">Alamat</th>
                                                    <th class="min-w-120px">Booking Waktu</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($bookingDONE as $item) {
                                                    $newDate = date("d M Y", strtotime($item->tanggal));
                                                    $datang = date("H:i", strtotime($item->jam_datang));
                                                    echo '
                                                            <tr>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                ' . $item->lokasi . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $newDate . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $item->nama . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $item->telp . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $item->alamat . '
                                                            </td>
                                                            <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                            ' . $datang . '
                                                            </td>
                                                            </tr>
                                                        ';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2022©</span>
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">PMI Aceh Selatan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- begin Selesai Donor-->
    <div class="modal fade" id="selesaiDonor">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-3">Selesai Donor</h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                            </svg></span>
                    </div>
                 </div>
                 <form action="<?= site_url('booking/selesaiDonor') ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah pendonor dengan nama <b><span id="namaSelesai"></span></b> sudah selesai melakukan donor darah ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="selesaiTanggal" name="tanggal">
                        <input type="hidden" id="selesaiIdPendonor" name="id_pendonor">
                        <input type="hidden" id="selesaiIdBooking" name="id_booking">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal Selesai Donor -->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
    </div>
    <!--end::Scrolltop-->

    <?php $this->load->view('pmi-admin/template/footer') ?>
    <script>
        //Booking Tabel
        $('#tableBooking').dataTable({
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

        //Booking Selesai Tabel
        $('#tabelSelesaiDonor').dataTable({
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
    </script>
</body>