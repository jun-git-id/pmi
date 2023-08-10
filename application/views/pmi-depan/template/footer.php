<!--begin::Footer Section-->
<div class="mb-0">
	<!--begin::Wrapper-->
	<div class="landing-red-bg pt-10">
		<!--begin::Container-->
		<div class="container">
			<div class="pt-5">
				<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/pmi.png" class="logo-default h-50px h-lg-60px" />
			</div>
			<!--begin::Row-->
			<div class="row py-5 py-lg-10">
				<!--begin::Col-->
				<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
					<!--begin::Block-->
					<div class="rounded landing-dark-border p-9 mb-10">
						<!--begin::Title-->
						<p class="text-white">PMI hadir sebagai mitra mandiri dan netral untuk menyelenggarakan kepalangmerahan kepada masyarakat. Dengan menjunjung semangat kemanusiaaan dan kerelawanan, PMI mengajak kalian turut berpartisipasi memberikan bantuan bagi sesama.</p>
						<!--end::Title-->
					</div>
					<!--end::Block-->
					<!--begin::Block-->
					<div class="rounded landing-dark-border p-9">
						<div class="text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15933.379339784182!2d97.1698361!3d3.2642912!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303a4dcdb8ca7abb%3A0x98c01248b5d94d72!2sPMI%20ACEH%20SELATAN!5e0!3m2!1sid!2sid!4v1691673860735!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					<!--end::Block-->
				</div>
				<!--end::Col-->
				<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-10">
					<!--begin::Block-->
					<div class="rounded landing-dark-border p-9 mb-10">
						<h4 class="fw-bolder text-white mb-6">Alamat PMI Aceh Selatan</h4>
						<!--begin::Title-->
						<p class="text-white">Jl. T.Ben Mahmud , Lhok Keutapang</p>
						<!--end::Title-->
						<br>
					</div>
					<!--end::Block-->
					<!--begin::Block-->
					<div class="rounded landing-dark-border p-9">
						<div class="text-center">
							<!--begin::Subtitle-->
							<h4 class="fw-bolder text-white mb-6">Stay Connected</h4>
							<!--end::Subtitle-->
							<!--begin::Link-->
							<a href="https://www.facebook.com/" class="mb-6">
								<img src="<?= base_url(); ?>assets/admin/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
								<span class="text-white text-hover-primary fs-5 mb-6">Facebook</span>
							</a>
							<!--end::Link-->
							<!--begin::Link-->
							<a href="https://twitter.com/" class="mb-6">
								<img src="<?= base_url(); ?>assets/admin/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
								<span class="text-white text-hover-primary fs-5 mb-6">Twitter</span>
							</a>
							<!--end::Link-->
							<!--begin::Link-->
							<a href="https://www.instagram.com/" class="mb-6">
								<img src="<?= base_url(); ?>assets/admin/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
								<span class="text-white text-hover-primary fs-5 mb-6">Instagram</span>
							</a>
							<!--end::Link-->
						</div>
					</div>
					<!--end::Block-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Footer Section-->
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
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Javascript-->
<script>
	var hostUrl = "<?= base_url(); ?><?= base_url(); ?>assets/admin/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<script src="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.js"></script>
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/admin/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/custom/typedjs/typedjs.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/admin/js/custom/landing.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/custom/pages/pricing/general.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->

<script>
	 $('#tableJadwalDepan').dataTable({
        "info": false,
		"lengthMenu": [5, 10],
		"pagelength": 5,
		"language": {
            "zeroRecords": "Tidak ada data",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
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
	 $('#tableJadwal').dataTable({
        "info": false,
		"lengthMenu": [10,25,50,100],
		"pagelength": 5,
		"language": {
            "zeroRecords": "Tidak ada data",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
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
	 $('#tableJadwalMobil').dataTable({
        "info": false,
		"lengthMenu": [10,25,50,100],
		"pagelength": 5,
		"language": {
            "zeroRecords": "Tidak ada data",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Cari",
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

	$('#userPanel').on('click', '.depanEditPendonor', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('depanPendonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pendonor: id
            },
            success: res => {                
                $('#prevEditUserDepan').attr("src", res[0].foto_pendonor);
                $('#depanEditNama').val(res[0].nama_pendonor)
                $('#depanEditEmail').val(res[0].email_pendonor)
                $('#depanEditPassword').val(res[0].password)
                $('#depanEditUmur').val(res[0].umur_pendonor)
                $('#depanEditAlamat').val(res[0].alamat_pendonor)
                $('#depanEditTelp').val(res[0].telepon_pendonor)
                $('#depanJenisDarah').val(res[0].id_jenis_darah).change()
                $('#depanEditId').val(res[0].id_pendonor)
            }
        })
    })

	$('#userPanel').on('click', '.depanDetailPendonor', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "<?= site_url('depanPendonor/ajxGet') ?>",
            type: "post",
            dataType: 'json',
            data: {
                id_pendonor: id
            },
            success: res => {
				$('#depanDetailNama').html(res[0].nama_pendonor)
                $('#depanDetailEmail').html(res[0].email_pendonor)
                $('#depanDetailUmur').html(res[0].umur_pendonor)
                $('#depanDetailAlamat').html(res[0].alamat_pendonor)
                $('#depanDetailTelp').html(res[0].telepon_pendonor)
                $('#depanDetailDonkir').html(res[0].donor_terakhir)
                $('#depanDetailDonlan').html(res[0].donor_selanjutnya)
                if (res[0].id_jenis_darah == 1) {
                    $('#depanDetailGoldar').html('A')
                }else if(res[0].id_jenis_darah == 2){
                    $('#depanDetailGoldar').html('B')
                }else if(res[0].id_jenis_darah == 3){
                    $('#depanDetailGoldar').html('AB')
                }else if(res[0].id_jenis_darah == 4){
                    $('#depanDetailGoldar').html('O')
                };
				if(res[0].tgl_booking == null){
					$('#booking_value').html('-')
				}else if(res[0].tgl_booking != null){
					$('#booking_value').html(`Anda telah booking donor darah di ${res[0].lokasi_booking} pada tanggal ${res[0].tgl_booking} Pukul ${res[0].pukul} WIB, jadi silahkan datang 15 menit sebelum jadwal booking yang sudah Anda tentukan. Terima kasih.`)
				}              
            }
        })
    })
	
	function previewEditDepanUser() {
        document.getElementById("prevEditUserDepan").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("editImgUserDepan").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("prevEditUserDepan").src = oFREvent.target.result;
        };
    };
</script>
<script>
    grecaptcha.ready(function () {
    if (grecaptcha.getResponse() === "") {
        alert("Please validate the Google reCaptcha.");
    } else {
        alert("Successful validation! Now you can submit this form to your server side processing.");
    }
});
</script>
</body>
<!--end::Body-->

</html>