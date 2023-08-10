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

<script>
    // Jadwal UDD PMI 
    $("#add_dateUDD").flatpickr({
        dateFormat: "d M Y",
    });

    $("#add_jambukaUDD").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#add_jamtutupUDD").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    $("#edit_dateUDD").flatpickr({
        dateFormat: "d M Y",
    });

    $("#edit_jambukaUDD").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#edit_jamtutupUDD").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
</script>
<script type="text/javascript">
    // Jadwal mobil donor 
    $("#add_jadwal").flatpickr({
        dateFormat: "d M Y",
    });

    $("#add_jambuka").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#add_jamtutup").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    $("#edit_jadwal").flatpickr({
        dateFormat: "d M Y",
    });

    $("#edit_jambuka").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#edit_jamtutup").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    // agenda
    $("#add_tanggal").flatpickr();

    $("#add_jammulai").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#add_jamselesai").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    $("#edit_tanggal").flatpickr();

    $("#edit_jammulai").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });
    $("#edit_jamselesai").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    });

    //berita
    $("#add_tanggalBerita").flatpickr();
    $("#edit_tanggalBerita").flatpickr();
</script>

<script>
    //Profil
	$('#dataTableProfil').dataTable({
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

    $('#dataTableProfil tbody').on('click', '.mdl_detailProfil', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('profil/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_profil: id
            },
            success: res => {
                $('#judul_profil').html(res[0].judul_profil)
                $('#deskripsi').html(res[0].deskripsi)
                if (res[0].status == 1) {
                    $('#statusProfil_detail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusProfil_detail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
            }
        })
    })

    $('#dataTableProfil tbody').on('click', '.editProfil', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('profil/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_profil: id
            },
            success: res => {
                $('#judulProfil_edit').val(res[0].judul_profil)
                tinymce.get('deskripsiProfil_edit').setContent(res[0].deskripsi)
                $('#statusProfil_edit').val(res[0].status).change()
                $('#id_edit').val(res[0].id_profil)
            }
        })
    })

    $('#dataTableProfil tbody').on('click', '.hapusProfil', function() {
        const id = $(this).data("id")
        $('#hapusProfil_id').val(id)
    })

    // Jadwal Donor UDD
    $('#dataTableJadwalUDD').dataTable({
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

    //Mobil Donor   
    $('#dataTableMobil').dataTable({
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

    $('#dataTableMobil tbody').on('click', '.editJadwal', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('mobildonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_mobil: id
            },
            success: res => {
                $('#lokasi_edit').val(res[0].lokasi)
                $('#edit_jadwal').val(res[0].jadwal)
                $('#edit_jambuka').val(res[0].jambuka)
                $('#target_edit').val(res[0].target)
                $('#edit_jamtutup').val(res[0].jamtutup)
                $('#editmobil_id').val(res[0].id_mobil)
            }
        })
    })

    $('#dataTableMobil tbody').on('click', '.hapusJadwal', function() {
        const id = $(this).data("id")
        const name = $(this).data("name")
        const jadwal = $(this).data("jadwal")
        $('#lokasi_text').html(name)
        $('#jadwal_text').html(jadwal)
        $('#hapusmobil_id').val(id)
    })

    //Jadwal UDD
    $('#dataTableJadwalUDD tbody').on('click', '.editJadwal', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('mobildonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_mobil: id
            },
            success: res => {
                $('#lokasi_edit').val(res[0].lokasi)
                $('#edit_jadwal').val(res[0].jadwal)
                $('#edit_jambuka').val(res[0].jambuka)
                $('#target_edit').val(res[0].target)
                $('#edit_jamtutup').val(res[0].jamtutup)
                $('#editmobil_id').val(res[0].id_mobil)
            }
        })
    })

    $('#dataTableJadwalUDD tbody').on('click', '.hapusJadwal', function() {
        const id = $(this).data("id")
        const name = $(this).data("name")
        const jadwal = $(this).data("jadwal")
        $('#lokasi_text').html(name)
        $('#jadwal_text').html(jadwal)
        $('#hapusmobil_id').val(id)
    })

    //Informasi  
    $('#informasiTable tbody').on('click', '.detailInfo', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('informasi/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_informasi: id
            },
            success: res => {
                $('#detail_judul').html(res[0].judul_informasi)
                $('#detail_deskripsi').html(res[0].deskripsi)
                if (res[0].status == 1) {
                    $('#statusInfo_detail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusInfo_detail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
            }
        })
    })

    $('#informasiTable').dataTable({
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
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

    $('#informasiTable tbody').on('click', '.editInfo', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('informasi/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_informasi: id
            },
            success: res => {
                $('#judul_edit').val(res[0].judul_informasi)
                tinymce.get('deskripsiInfo_edit').setContent(res[0].deskripsi);
                $('#statusInfo_edit').val(res[0].status).change()
                $('#idInfo_edit').val(res[0].id_informasi)
            }
        })
    })

    $('#informasiTable tbody').on('click', '.hapusInfo', function() {
        const id = $(this).data("id")
        $('#hapusInfo_id').val(id)
    })

    //Pendonor  
    $('#tablePendonor tbody').on('click', '.mdl_detailpendonor', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('listpendonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pendonor: id
            },
            success: res => {
                $('#nikDetailPendonor').html(res[0].nik_pendonor)
                $('#namaDetailPendonor').html(res[0].nama_pendonor)
                $('#emailDetailPendonor').html(res[0].email_pendonor)
                $('#umurDetailPendonor').html(res[0].umur_pendonor)
                $('#alamatDetailPendonor').html(res[0].alamat_pendonor)
                $('#teleponDetailPendonor').html(res[0].telepon_pendonor)
                $('#terakhirDetailPendonor').html(res[0].donor_terakhir)
                $('#imgDetailPendonor').attr("src", res[0].foto_pendonor)
                $('#selanjutnyaDetailPendonor').html(res[0].donor_selanjutnya)
                if (res[0].id_jenis_darah == 1) {
                    $('#darahDetailPendonor').html('A')
                } else if (res[0].id_jenis_darah == 2) {
                    $('#darahDetailPendonor').html('B')
                } else if (res[0].id_jenis_darah == 3) {
                    $('#darahDetailPendonor').html('AB')
                } else if (res[0].id_jenis_darah == 4) {
                    $('#darahDetailPendonor').html('O')
                }
            }
        })
    })

    $('#tablePendonor tbody').on('click', '.editPendonor', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('listpendonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pendonor: id
            },
            success: res => {
                $('#prevEditFotoPendonor').attr("src", res[0].foto_pendonor);
                $('#nikPendonor_edit').val(res[0].nik_pendonor)
                $('#namaPendonor_edit').val(res[0].nama_pendonor)
                $('#emailPendonor_edit').val(res[0].email_pendonor)
                $('#passwordPendonor_edit').val(res[0].password)
                $('#umurPendonor_edit').val(res[0].umur_pendonor)
                $('#alamatPendonor_edit').val(res[0].alamat_pendonor)
                $('#teleponPendonor_edit').val(res[0].telepon_pendonor)
                $('#darahPendonor_edit').val(res[0].id_jenis_darah).change()
                $('#ideditPendonor').val(res[0].id_pendonor)
            }
        })
    })

    $('#tablePendonor tbody').on('click', '.hapusPendonor', function() {
        const id = $(this).data("id")
        $('#idhapusPendonor').val(id)
    })

    //Berita  
    $('#tableBerita tbody').on('click', '.detailBerita', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('berita/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_berita: id
            },
            success: res => {
                $('#judulBerita_detail').html(res[0].judul_berita)
                $('#deskripsiBerita_detail').html(res[0].deskripsi)
                $('#penulisBerita_detail').html(res[0].penulis_berita)
                $('#tanggalBerita_detail').html(res[0].tanggal_berita)
                $('#imgBeritaDetail').attr("src", res[0].gambar);
                if (res[0].status == 1) {
                    $('#statusBerita_detail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusBerita_detail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
            }
        })
    })

    $('#tableBerita tbody').on('click', '.editBerita', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('berita/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_berita: id
            },
            success: res => {
                $('#judulBerita_edit').val(res[0].judul_berita)
                $('#penulisBerita_edit').val(res[0].penulis_berita)
                $('#edit_tanggalBerita').val(res[0].tanggal_berita)
                tinymce.get('deskripsiBerita_edit').setContent(res[0].deskripsi)
                $('#prevEditBerita').attr("src", res[0].gambar);
                $('#statusBerita_edit').val(res[0].status).change()
                $('#idBerita_edit').val(res[0].id_berita)
            }
        })
    })

    $('#tableBerita tbody').on('click', '.hapusBerita', function() {
        const id = $(this).data("id")
        $('#hapusBerita_id').val(id)
    })

    //Carousel  
    $('#tableCarousel tbody').on('click', '.detailCarousel', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('carousel/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_carousel: id
            },
            success: res => {
                $('#imgDetailCarousel').attr("src", res[0].gambar);
                if (res[0].status == 1) {
                    $('#statusCarouselDetail').html('<span class="badge badge-success" >Diunggah</span>')
                } else {
                    $('#statusCarouselDetail').html('<span class="badge badge-danger" >Diarsipkan</span>')
                }
            }
        })
    })

    $('#tableCarousel tbody').on('click', '.editCarousel', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('carousel/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_carousel: id
            },
            success: res => {
                $('#prevEditCarousel').attr("src", res[0].gambar);
                $('#statusCarousel_edit').val(res[0].status).change()
                $('#idCarousel_edit').val(res[0].id_carousel)
            }
        })
    })

    $('#tableCarousel tbody').on('click', '.hapusCarousel', function() {
        const id = $(this).data("id")
        $('#hapusCarousel_id').val(id)
    })

    //Agenda
    $('#tableAgenda').dataTable({
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

    $('#tableAgenda tbody').on('click', '.editAgenda', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('agenda/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_agenda: id
            },
            success: res => {
                $('#lokasiAgenda_edit').val(res[0].lokasi_agenda)
                $('#namaAgenda_edit').val(res[0].nama_agenda)
                $('#edit_tanggal').val(res[0].tgl_agenda)
                $('#edit_jammulai').val(res[0].jambuka)
                $('#edit_jamselesai').val(res[0].jamtutup)
                $('#editAgenda_id').val(res[0].id_agenda)
            }
        })
    })

    $('#tableAgenda tbody').on('click', '.hapusAgenda', function() {
        const id = $(this).data("id")
        $('#hapusAgenda_id').val(id)
    })

    //Stok darah
    $('#tableStok').dataTable({
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

    $('#tableStok tbody').on('click', '.hapusProduk', function() {
        const id = $(this).data("id")
        $('#idHapusProduk').val(id)
    })

    $('#tableStok tbody').on('click', '.editStok', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('stokdarah/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_darah: id
            },
            success: res => {
                $('#id_darah_edit').val(res[0].id_darah).change()
                $('#stok_edit').val(res[0].stok)
                $('#edit_darah').val(res[0].id_darah)
            }
        })
    })

    $('#tableStok tbody').on('click', '.editProduk', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('stokdarah/ajxGetDarah') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_darah: id
            },
            success: res => {
                $('#jenisdarahEdit').val(res[0].jenis_darah)
                $('#idEditProduk').val(res[0].id_darah)
            }
        })
    })

    $('#id_jenis_darah_edit').change(function() {
        let idjenisdarah = $(this).val();
        let iddarah = $('#id_darah_edit').val();
        $.ajax({
            url: "<?= site_url('stokdarah/getStock') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_darah: iddarah,
                id_jenis_darah: idjenisdarah
            },
            success: res => {
                $('#stok_edit').val(res[0].stok)
            }
        });
    });

    $('#edit_tutup').click(function() {
        $('#id_jenis_darah_edit').val(1).change()
    });

    $('#tableBooking tbody').on('click', '.selesaiDonor', function() {
        const idPendonor = $(this).data("pendonor");
        const idBooking = $(this).data("booking");
        const tanggal = $(this).data("tanggal");
        const name = $(this).data("name");
        $('#selesaiIdPendonor').val(idPendonor)
        $('#selesaiIdBooking').val(idBooking)
        $('#selesaiTanggal').val(tanggal)
        $('#namaSelesai').html(name)
    })

    $("#add_stokdarah").flatpickr();
    $("#out_stokdarah").flatpickr();

    //berita
    $('#tableBerita').dataTable({
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
<script>
    //preview sebelum upload berita
    function previewAddBerita() {
        document.getElementById("prevAddBerita").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgBerita").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddBerita").src = oFREvent.target.result;
        };
    };

    function previewEditBerita() {
        document.getElementById("prevEditBerita").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImgBerita").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditBerita").src = oFREvent.target.result;
        };
    };

    //preview sebelum upload carousel
    function previewAddCarousel() {
        document.getElementById("prevAddCarousel").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgCarousel").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddCarousel").src = oFREvent.target.result;
        };
    };

    function previewEditCarousel() {
        document.getElementById("prevEditCarousel").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImgCarousel").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditCarousel").src = oFREvent.target.result;
        };
    };

    function previewEditFotoUser() {
        document.getElementById("prevEditFotoUser").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImgFotoUser").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditFotoUser").src = oFREvent.target.result;
        };
    };

    function previewAddFotoPendonor() {
        document.getElementById("prevAddFotoPendonor").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("addImgPendonor").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevAddFotoPendonor").src = oFREvent.target.result;
        };
    };

    function previewEditFotoPendonor() {
        document.getElementById("prevEditFotoPendonor").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImgPendonor").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditFotoPendonor").src = oFREvent.target.result;
        };
    };
</script>
<script>
    // add tiny informasi
    var addTiny = {
        selector: ".textTiny",
        menubar: false,
        setup: function(editor) {
            editor.on('change', function() {
                tinymce.triggerSave();
            });
        },
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
        ]
    };

    tinymce.init(addTiny);

    $("#submitprofil").click(function() {
        var editorContent = tinyMCE.get('tinyprofil').getContent();
        if (editorContent == '' || editorContent == null) {
            // Add error message if not already present
            if (!$('#message-profil').length) {
                $('<span id="message-profil">Deskripsi Tidak Boleh Kosong !</span>').insertAfter($(tinyMCE.get('tinyprofil').getContainer()));
            }
        } else {
            // Remove error message
            if ($('#message-profil'))
                $('#message-profil').remove();
        }

    })

    $("#submitinformasi").click(function() {
        var editorContent = tinyMCE.get('tinyinformasi').getContent();
        if (editorContent == '' || editorContent == null) {
            // Add error message if not already present
            if (!$('#message-informasi').length) {
                $('<span id="message-informasi">Deskripsi Tidak Boleh Kosong !</span>').insertAfter($(tinyMCE.get('tinyinformasi').getContainer()));
            }
        } else {
            // Remove error message
            if ($('#message-informasi'))
                $('#message-informasi').remove();
        }

    })
    $("#submitberita").click(function() {
        var editorContent = tinyMCE.get('tinyberita').getContent();
        if (editorContent == '' || editorContent == null) {
            // Add error message if not already present
            if (!$('#message-berita').length) {
                $('<span id="message-informasi">Deskripsi Tidak Boleh Kosong !</span>').insertAfter($(tinyMCE.get('tinyberita').getContainer()));
            }
        } else {
            // Remove error message
            if ($('#message-berita'))
                $('#message-berita').remove();
        }

    })
</script>
</body>
<!--end::Body-->

</html>