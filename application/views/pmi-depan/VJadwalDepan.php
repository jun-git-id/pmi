<!--begin::Wrapper-->
<div class="pb-15 pt-18 landing-red-bg">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Heading-->
		<div class="text-center mt-8 mb-8" id="" data-kt-scroll-offset="{default: 100, lg: 150}">
			<!--begin::Title-->
			<h3 class="fs-2hx text-white fw-bolder mb-5">Jadwal Donor Darah PMI Aceh Selatan</h3>
			<!--end::Title-->
			<br>			
			<br>
			<?php
			if ($this->session->flashdata('success_booking')) {
				echo '
				<div class="alert alert-success d-flex align-items-center p-5 mb-10">
					<div class="d-flex flex-column">
						<span>' . $this->session->flashdata('success_booking') . '</span>
					</div>
				</div>
				';
			}else if($this->session->flashdata('error_booking')){
				echo '
				<div class="alert alert-danger d-flex align-items-center p-5 mb-10">
					<div class="d-flex flex-column">
						<span>' . $this->session->flashdata('error_booking') . '</span>
					</div>
				</div>
				';
			}
			?>
			<!--begin::Statistics-->
			<div class="d-flex flex-center">
				<div class="table">
					<table class="table table-rounded border table-row-gray-100 align-middle gy-5 gs-5" id="tableJadwal">
						<thead>
							<tr class="fw-bold fs-6 text-white border-white border-bottom">
								<th class="min-w-120px">No</th>
								<th class="min-w-120px">Tanggal</th>
								<th class="min-w-120px">Lokasi</th>
								<th class="min-w-120px">Target</th>
								<th class="min-w-140px">Jam Buka</th>
								<th class="min-w-120px">Jam Tutup</th>
								<th class="min-w-120px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($jadwal_donor as $item) {
								$newDate = date("d M Y", strtotime($item->jadwal));
								$jambuka = date("H:i", strtotime($item->jam_buka));
								$jamtutup = date("H:i", strtotime($item->jam_tutup));
								echo '
										<tr>
											<td class="text-white fs-6">' . $no . '</td>
											<td class="text-white fs-6">' . $newDate . '</td>
											<td class="text-white fs-6">' . $item->lokasi . '</td>
											<td class="text-white fs-6">' . $item->target . '</td>
											<td class="text-white fs-6">' . $jambuka . '</td>
											<td class="text-white fs-6">' . $jamtutup . '</td>
											<td> <a href="' .  base_url("booking/".$item->id_mobil) . '" class="btn btn-white btn-color-danger text-danger fs-6">
												<span class="svg-icon svg-icon-white svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor"/>
													<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor"/>
													</svg>
												</span>Booking
											</a></td>
										</tr>
									';
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!--end::Statistics-->
		</div>
		<!--end::Container-->
	</div>
	<div class="container">
		<!--begin::Heading-->
		<div class="text-center mt-8 mb-8" id="" data-kt-scroll-offset="{default: 100, lg: 150}">
			<!--begin::Title-->
			<h3 class="fs-2hx text-white fw-bolder mb-5">Jadwal Mobil Keliling Donor Darah PMI Aceh Selatan</h3>
			<!--end::Title-->
			<br>
			<br>
			<!--begin::Statistics-->
			<div class="d-flex flex-center">
				<div class="table">
					<table class="table table-rounded border table-row-gray-100 align-middle gy-5 gs-5" id="tableJadwalMobil">
						<thead>
							<tr class="fw-bold fs-6 text-white border-white border-bottom">
								<th class="min-w-120px">No</th>
								<th class="min-w-120px">Tanggal</th>
								<th class="min-w-120px">Lokasi</th>
								<th class="min-w-120px">Target</th>
								<th class="min-w-140px">Jam Buka</th>
								<th class="min-w-120px">Jam Tutup</th>
								<th class="min-w-120px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($jadwal_mobil as $item) {
								$newDate = date("d M Y", strtotime($item->jadwal));
								$jambuka = date("H:i", strtotime($item->jam_buka));
								$jamtutup = date("H:i", strtotime($item->jam_tutup));
								echo '
										<tr>
											<td class="text-white fs-6">' . $no . '</td>
											<td class="text-white fs-6">' . $newDate . '</td>
											<td class="text-white fs-6">' . $item->lokasi . '</td>
											<td class="text-white fs-6">' . $item->target . '</td>
											<td class="text-white fs-6">' . $jambuka . '</td>
											<td class="text-white fs-6">' . $jamtutup . '</td>
											<td> <a href="' .  base_url("booking/".$item->id_mobil) . '" class="btn btn-white btn-color-danger text-danger fs-6">
												<span class="svg-icon svg-icon-white svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor"/>
													<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor"/>
													</svg>
												</span>Booking
											</a></td>
										</tr>
									';
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!--end::Statistics-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Wrapper-->