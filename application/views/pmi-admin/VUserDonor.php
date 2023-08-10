<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<!--begin::Brand-->
				<div class="aside-logo flex-column-auto" id="kt_aside_logo">
					<!--begin::Aside toggler-->
					<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
						<span class="svg-icon svg-icon-1 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
								<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Aside toggler-->
				</div>
				<!--end::Brand-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Post-->
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<!--begin::Container-->
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Tables Widget 13-->
							<div class="card mb-5 mb-xl-8">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Pendonor PMI Aceh Selatan</span>
									</h3>
									<div class="card-toolbar">
										<a href="#" class="btn btn-success ms-xl-4" data-bs-toggle="modal" data-bs-target="#kirimEmail">Kirim Email Pengingat</a>
										<a href="#" class="btn btn-primary ms-xl-4" data-bs-toggle="modal" data-bs-target="#mdl_addpendonor">Tambah Pendonor</a>
									</div>
								</div>
								<!--end::Header-->
								<?php
								if ($this->session->flashdata('success_email')) {
									echo '
									<div class="alert alert-success d-flex align-items-center p-4 mx-8 mt-4">
										<div class="d-flex flex-column">
											<span>' . $this->session->flashdata('success_email') . '</span>
										</div>
									</div>
									';
								} else if ($this->session->flashdata('error_email')) {
									echo '
									<div class="alert alert-danger d-flex align-items-center p-4 mx-8 mt-4">
										<div class="d-flex flex-column">
											<span>' . $this->session->flashdata('error_email') . '</span>
										</div>
									</div>
									';
								}
								?>
								<!--begin::Body-->
								<div class="card-body py-3">
									<!--begin::Table container-->
									<div class="table-responsive">
										<!--begin::Table-->
										<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="tablePendonor">
											<!--begin::Table head-->
											<thead>
												<tr class="fw-bolder text-muted">
													<th class="min-w-120px text-center">NIK</th>
													<th class="min-w-120px text-center">Nama</th>
													<th class="min-w-120px text-center">Umur</th>
													<th class="min-w-120px text-center">Alamat</th>
													<th class="min-w-120px text-center">Nomor Telepon</th>
													<th class="min-w-120px text-center">Golongan Darah</th>
													<th class="min-w-150px text-center">Aksi</th>
												</tr>
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody>
												<?php
												foreach ($pendonor as $item) {
													$jenis = "";
													if ($item->id_jenis_darah == 1) {
														$jenis = "A";
													} else if ($item->id_jenis_darah == 2) {
														$jenis = "B";
													} else if ($item->id_jenis_darah == 3) {
														$jenis = "AB";
													} else if ($item->id_jenis_darah == 4) {
														$jenis = "O";
													}
													echo '															
															<tr>
															<td class="text-dark fw-bolder text-hover-primary fs-6">' . $item->nik_pendonor. '</td>
															<td class="text-dark fw-bolder text-hover-primary fs-6">' . $item->nama_pendonor . '</td>
															<td class="text-dark fw-bolder text-hover-primary fs-6">' . $item->umur_pendonor . '</td>
															<td class="text-dark fw-bolder text-hover-primary fs-6">' . $item->alamat_pendonor . '</td>
															<td class="text-dark fw-bolder text-hover-primary fs-6">' . $item->telepon_pendonor . '</td>
															<td class="text-dark fw-bolder text-hover-primary fs-6">' . $jenis . '</td>
															<td class="text-end">
															<a href="" title="Detail Pendonor" data-bs-toggle="modal" data-bs-target="#mdl_detailpendonor" data-id="' . $item->id_pendonor . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm mdl_detailpendonor me-1">

																<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																		<rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																		<rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="currentColor" />
																	</svg></span>

															</a>
															<a href="" title="Edit Pendonor" data-bs-toggle="modal" data-bs-target="#editPendonor" data-id="' . $item->id_pendonor . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm editPendonor me-1">

																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																	</svg>
																</span>

															</a>
															<a href="#" title="Hapus Pendonor" data-bs-toggle="modal" data-bs-target="#hapusPendonor" data-id="' . $item->id_pendonor . '" class="btn btn-icon btn-bg-light btn-active-color-primary hapusPendonor btn-sm">

																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																	</svg>
																</span>

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
								<!--begin::Body-->
							</div>
							<!--end::Tables Widget 13-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted fw-bold me-1">2022©</span>
							<a href="" target="_blank" class="text-gray-800 text-hover-primary">PMI Aceh Selatan</a>
						</div>
						<!--end::Copyright-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->

	<!-- begin modal Tambah Pendonor -->
	<div class="modal fade" id="mdl_addpendonor">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-3">Tambah Pendonor</h3>

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
					<form action="<?= site_url('listpendonor/store') ?>" method="post" enctype="multipart/form-data">
						<div class="d-flex flex-column mb-8 fv-row">
							<label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
								<span>Foto Profil</span>
							</label>
							<img class="m-3 mx-auto rounded" id="prevAddFotoPendonor" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
							<input type="file" name="file" class="form-control form-control-solid" id="addImgPendonor" onchange="previewAddFotoPendonor();" />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">NIK</span>
							</label>
							<input type="text" class="form-control form-control-solid" placeholder="Masukan NIK" name="nik_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Nama</span>
							</label>
							<input type="text" class="form-control form-control-solid" placeholder="Masukan Nama" name="nama_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Email</span>
							</label>
							<input type="email" class="form-control form-control-solid" placeholder="Masukan Email" name="email_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Password</span>
							</label>
							<!--end::Label-->
							<input type="password" class="form-control form-control-solid" placeholder="Masukan Password" name="password" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Umur</span>
							</label>
							<!--end::Label-->
							<input type="number" class="form-control form-control-solid" placeholder="Masukan Umur" name="umur_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Alamat</span>
							</label>
							<!--end::Label-->
							<input type="text" class="form-control form-control-solid" placeholder="Masukan Alamat" name="alamat_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Nomor Telepon</span>
							</label>
							<!--end::Label-->
							<input type="number" class="form-control form-control-solid" placeholder="Masukan Nomor Telepon" name="telepon_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Golongan Darah</span>
							</label>
							<select class="form-select form-select-solid" name="id_jenis_darah">
								<option value="1">A</option>
								<option value="2">B</option>
								<option value="3">AB</option>
								<option value="4">O</option>
							</select>
						</div>
						<!-- <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span class="required">Foto Pendonor</span>
                        </label>
                        <img class="m-3 mx-auto rounded" id="prevAddFotoUser" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <input type="file" class="form-control form-control-solid" id="addImgFotoUser" onchange="previewAddFotoUser();" required />
                    </div> -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal tambah Pendonor-->

	<!-- begin modal Edit Pendonor -->
	<div class="modal fade" id="editPendonor">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-3">Edit Pendonor</h3>

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
					<form action="<?= site_url('listpendonor/edit') ?>" method="post" enctype="multipart/form-data">
					<div class="d-flex flex-column mb-8 fv-row">
							<label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
								<span>Foto Profil</span>
							</label>
							<img class="m-3 mx-auto rounded" id="prevEditFotoPendonor" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
							<input type="file" name="file" class="form-control form-control-solid" id="editImgPendonor" onchange="previewEditFotoPendonor();" />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">NIK</span>
							</label>
							<!--end::Label-->
							<input type="text" id="nikPendonor_edit" class="form-control form-control-solid" name="nik_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Nama</span>
							</label>
							<!--end::Label-->
							<input type="text" id="namaPendonor_edit" class="form-control form-control-solid" name="nama_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Email</span>
							</label>
							<!--end::Label-->
							<input type="email" id="emailPendonor_edit" class="form-control form-control-solid" name="email_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Password</span>
							</label>
							<!--end::Label-->
							<input type="password" id="passwordPendonor_edit" class="form-control form-control-solid" name="password" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Umur</span>
							</label>
							<!--end::Label-->
							<input type="number" id="umurPendonor_edit" class="form-control form-control-solid" name="umur_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Alamat</span>
							</label>
							<!--end::Label-->
							<input type="text" id="alamatPendonor_edit" class="form-control form-control-solid" name="alamat_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Nomor Telepon</span>
							</label>
							<!--end::Label-->
							<input type="number" id="teleponPendonor_edit" class="form-control form-control-solid" name="telepon_pendonor" required />
						</div>
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Golongan Darah</span>
							</label>
							<select class="form-select form-select-solid" id="darahPendonor_edit" name="id_jenis_darah">
								<option value="1">A</option>
								<option value="2">B</option>
								<option value="3">AB</option>
								<option value="4">O</option>
							</select>
						</div>
						<!-- <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2 mt-2">
                            <span class="required">Foto Pendonor</span>
                        </label>
                        <img class="m-3 mx-auto rounded" id="prevEditFotoUser" alt="" style="max-width: 450px; min-width: 250px; max-height: 450px; min-height: 250;" />
                        <input type="file" class="form-control form-control-solid" id="editImgFotoUser" onchange="previewEditFotoUser();" required />
                    </div> -->
				</div>
				<div class="modal-footer">
					<input type="hidden" id="ideditPendonor" name="id_pendonor">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal Edit Pendonor-->

	<!-- begin hapus Pendonor-->
	<div class="modal fade" id="hapusPendonor">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-3">Hapus Pendonor</h3>

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
				<form action="<?= site_url('listpendonor/delete') ?>" method="post">
					<div class="modal-body">
						<p>Apakah anda yakin ingin menghapus Pendonor tersebut ?</p>
					</div>

					<div class="modal-footer">
						<input type="hidden" id="idhapusPendonor" name="id_pendonor">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Hapus</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal hapus Pendonor -->

	<!-- begin email reminder -->
	<div class="modal fade" tabindex="-1" id="kirimEmail">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-3">Kirim Pengingat Untuk Pendonor</h3>

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
				<form action="<?= site_url('sendMail') ?>" method="post">
					<div class="modal-body">
						<p>Apakah anda yakin ingin mengirim Email pengingat untuk Pendonor ?</p>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal email reminder -->

	<!-- begin modal detail Pendonor-->
	<div class="modal fade" id="mdl_detailpendonor">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="mb-3">Detail Pendonor</h3>

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
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin: Pic-->
						<div class="me-7 mb-4 text-center">
							<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
								<img id="imgDetailPendonor" alt="image" />
								<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
							</div>
						</div>
						<!--end::Pic-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">NIK</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="nikDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Email</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="emailDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Nama</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="namaDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Umur</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="umurDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Golongan Darah</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="darahDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Alamat</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="alamatDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Nomor Telepon
								<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Nomor telepon harus aktif !"></i></label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 d-flex align-items-center">
								<span id="teleponDetailPendonor" class="fw-bold fs-6 text-gray-800 me-2"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row mb-5">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Donor Terakhir</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="terakhirDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="row">
							<!--begin::Label-->
							<label class="col-lg-4 fw-bold text-muted">Donor Selanjutnya</label>
							<!--end::Label-->
							<!--begin::Col-->
							<div class="col-lg-8 fv-row">
								<span id="selanjutnyaDetailPendonor" class="fw-bold text-gray-800 fs-6"></span>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Card body-->
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end modal detail pendonor -->

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
<?php $this->load->view('pmi-admin/template/footer') ?>
<script type="text/javascript">
	//Pendonor
	$('#tablePendonor').dataTable({
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