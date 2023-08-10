<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<base href="<?= base_url(); ?>">
	<title>PMI - Aceh Selatan</title>
	<meta charset="utf-8" />
	<meta name="description" content="Palang Merah Indonesia Kota Malang" />
	<meta name="keywords" content="PMI, Palang Merah Indonesia, Malang, Stok Darah" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="PMI - Malang" />
	<meta property="og:site_name" content="PMI | Malang" />
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin/media/ic_pmi.png" />
	<!-- <meta property="og:url" content="https://keenthemes.com/metronic" /> -->
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?= base_url(); ?>assets/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/admin/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="beranda" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="position-relative">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Header Section-->
		<div class="mb-0" id="home">
			<!--begin::Wrapper-->
			<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom">
				<!--begin::Header-->
				<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container ">
						<!--begin::Wrapper-->
						<div class="d-flex align-items-center justify-content-between">
							<!--begin::Logo-->
							<div class="d-flex align-items-center flex-equal">
								<!--begin::Mobile menu toggle-->
								<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mobile menu toggle-->
								<!--begin::Logo image-->
								<a href="">
									<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/pmi.png" class="logo-default h-50px h-lg-60px" />
									<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/pmi.png" class="logo-sticky h-40px h-lg-50px" />
								</a>
								<!--end::Logo image-->
							</div>
							<!--end::Logo-->
							<!--begin::Menu wrapper-->
							<div class="d-lg-block" id="kt_header_nav_wrapper">
								<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
									<!--begin::Menu-->
									<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
										<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('beranda'); ?> " data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
										</div>
										<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('profile'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Profil</a>
										</div>
										<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('informasi-pmi'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Informasi</a>
										</div>
										<!--
										<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('stokdarah-pmi'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Stok Darah</a>
										</div>

-->
										<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('jadwal'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Jadwal Donor Darah</a>
										</div>
										<div class="menu-item">
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark text-hover-danger" href="<?php echo site_url('news'); ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
										</div>
									</div>
								</div>
							</div>
							<div id="userPanel" class="flex-equal text-end ms-1">
								<?php
								$link_login = site_url('login');
								$link_logout = site_url('logout');
								if (isset($_SESSION['logged_in']) == FALSE) {
									echo '											
											<a href="' . $link_login . '" class="btn btn-danger btn-color-white me-1">Sign In</a>
										';
								} else {
									$str = explode(" ", $_SESSION['name']);
									echo '
									<div class="d-flex justify-content-end ms-1 ms-lg-3 " id="kt_header_user_menu_toggle">
										<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<span class="svg-icon svg-icon-muted svg-icon-2hx"><img src="' . $_SESSION['avatar'] . '" alt="Avatar" style="width:30px;height:30px;border-radius: 50%;"></span>
										</div>
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-200px" data-kt-menu="true">
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<div class="symbol symbol-50px me-5">
													<span class="svg-icon svg-icon-muted svg-icon-2hx">
													<img src="' . $_SESSION['avatar'] . '" alt="Avatar" style="width:30px;height:30px;border-radius: 50%;">
													</span>
													</div>
													<div class="d-flex flex-column">
													<b>Hi, ' . $str[0] . '&nbsp;</b>
													</div>
												</div>
											</div>
											<div class="separator my-2"></div> 
											<div class="menu-item px-5 text-center">
										';
									if ($_SESSION['hak_akses'] == 2) {
										echo '
											<a href="" data-bs-toggle="modal" data-bs-target="#depanDetailPendonor" style="width: 10rem;" data-id="' . $_SESSION['id'] . '" class="btn btn-sm btn-info btn-color-white m-2 depanDetailPendonor">
											<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"/>
												<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="currentColor"/>
												<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="currentColor"/></svg>
											</span>
											Profil</a>';
										echo '
											<a href="" data-bs-toggle="modal" data-bs-target="#depanEditPendonor" style="width: 10rem;" data-id="' . $_SESSION['id'] . '" class="btn btn-sm btn-warning btn-color-white m-2 depanEditPendonor">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
													<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
												</svg>
											</span>
										Edit Profil</a>';
									};
									echo '
												<a href="' . $link_logout . '" class="btn btn-sm btn-danger btn-color-white m-2 " style="width: 10rem;" >
												<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="currentColor"/>
													<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="currentColor"/>
													<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="currentColor"/></svg>
												</span>
												Logout</a>
											</div>
										</div>
										</div>';
								};
								?>
								<!-- <a href="<?php echo site_url('signup'); ?>" class="btn btn-success btn-color-white me-1">Sign Up</a> -->
								<!-- <a href="<?php echo site_url(''); ?>" class="btn btn-danger btn-color-white me-1">Logout</a> -->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->

				<!-- begin modal detail Pendonor-->
				<div class="modal fade" tabindex="-1" id="depanDetailPendonor">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="mb-3">Detail Pendonor</h3>
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
								<div class="card-body">
									<div class="me-7 mb-4 text-center">
										<div class="position-relative">
											<img id="imgDetailPendonor" style="max-width: 430px; min-width:300px;" src="<?= $_SESSION['avatar'] ?>" alt="image" />
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Email</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailEmail" class="fw-bold text-gray-800 fs-6"></span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Nama</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailNama" class="fw-bold text-gray-800 fs-6"></span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Umur</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailUmur" class="fw-bold text-gray-800 fs-6"></span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Golongan Darah</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailGoldar" class="fw-bold text-gray-800 fs-6"></span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Alamat</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailAlamat" class="fw-bold text-gray-800 fs-6"></span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Nomor Telepon
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Nomor telepon harus aktif !"></i></label>
										<div class="col-lg-8 d-flex align-items-center">
											<span id="depanDetailTelp" class="fw-bold fs-6 text-gray-800 me-2"></span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Donor Terakhir</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailDonkir" class="fw-bold text-gray-800 fs-6">
											</span>
										</div>
									</div>
									<div class="row mb-5">
										<label class="col-lg-4 fw-bold text-muted">Donor Selanjutnya</label>
										<div class="col-lg-8 fv-row">
											<span id="depanDetailDonlan" class="fw-bold text-gray-800 fs-6">
											</span>
										</div>
									</div>
									<div class="row">
										<label class="col-lg-4 fw-bold text-muted">Booking</label>
										<div class="col-lg-8 fv-row">
											<span id="" class="fw-bold text-gray-800 fs-6">
												<label id="booking_value" class="fw-bold text-muted"></label>
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
				<!-- end modal detail pendonor -->

				<!-- begin modal Edit Profil -->
				<div class="modal fade" id="depanEditPendonor">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="mb-3">Edit Profil Pendonor</h3>
								<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
									<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
											<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
											<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
										</svg></span>
								</div>
							</div>

							<div class="modal-body">
								<form action="<?= site_url('depan/editProfil') ?>" method="post" enctype="multipart/form-data">
									<div class="d-flex flex-column mb-8 fv-row">
										<div class="d-flex flex-column mb-8 fv-row">
											<span><i>*silahkan login ulang setelah mengubah info profil</i></span>
											<label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
												<span>Foto Profil</span>
											</label>
											<img class="m-3 mx-auto rounded" id="prevEditUserDepan" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
											<input type="file" name="file" class="form-control form-control-solid" id="editImgUserDepan" onchange="previewEditDepanUser();" />
										</div>
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Nama</span>
										</label>
										<input type="text" id="depanEditNama" class="form-control form-control-solid" name="nama_pendonor" required />
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Email</span>
										</label>
										<input type="text" id="depanEditEmail" class="form-control form-control-solid" name="email_pendonor" required />
									</div>									
									<div class="d-flex flex-column mb-8 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Password</span>
										</label>
										<!--end::Label-->
										<input type="password" id="depanEditPassword" class="form-control form-control-solid" name="password" required />
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Umur</span>
										</label>
										<input type="number" id="depanEditUmur" class="form-control form-control-solid" name="umur_pendonor" required />
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Jenis Golongan Darah</span>
										</label>
										<!--end::Label-->
										<select id="depanJenisDarah" name="id_jenis_darah" aria-label="Pilih Jenis Darah" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
											<option value="1">A</option>
											<option value="2">B</option>
											<option value="3">AB</option>
											<option value="4">O</option>
										</select>
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Alamat</span>
										</label>
										<input type="text" id="depanEditAlamat" class="form-control form-control-solid" name="alamat_pendonor" required />
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<label class="d-flex align-items-center fs-6 fw-bold mb-2">
											<span class="required">Nomor Telepon</span>
										</label>
										<input type="text" id="depanEditTelp" class="form-control form-control-solid" name="telepon_pendonor" required />
									</div>
							</div>

							<div class="modal-footer">
								<input type="hidden" id="depanEditId" name="id_pendonor">
								<button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
								<button type="submit" id="submitprofil" class="btn btn-primary">Simpan</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- end modal Edit Profil-->