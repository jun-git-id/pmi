<!--begin::Product slider-->
<div class="tns tns-default landing-red-bg">
	<!--begin::Slider-->
	<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
		<!--begin::Item-->
		<?php
		foreach($carousel as $item){
			echo'
			<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
				<img src="'.$item->gambar.'" width="800" min-width="700" class="card-rounded shadow mw-100" alt="" />
			</div>
			';
		}
		?>		
		<!--end::Item-->
	</div>
	<!--end::Slider-->
	<!--begin::Slider button-->
	<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
		<span class="svg-icon svg-icon-3x text-white">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</button>
	<!--end::Slider button-->
	<!--begin::Slider button-->
	<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
		<span class="svg-icon svg-icon-3x text-white">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</button>
	<!--end::Slider button-->
</div>
<!--end::Product slider-->
</div>
<!--end::Wrapper-->
<!--begin::Curve bottom-->
<div class="landing-curve landing-red-color mb-10 mb-lg-10">
	<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
	</svg>
</div>
<!--end::Curve bottom-->
</div>
<!--end::Header Section-->
<!--begin::How It Works Section-->
<div class="mb-n10 mb-lg-10 z-index-2">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Heading-->
		<div class="text-center mb-10">
			<!--begin::Title-->
			<h3 class="fs-2hx text-dark" id="" data-kt-scroll-offset="{default: 100, lg: 150}">Layanan PMI Untuk Kalian</h3>
			<!--end::Title-->
		</div>
		<!--end::Heading-->
		<!--begin::Row-->
		<div class="row w-100 gy-10 mb-md-20">
			<!--begin::Col-->
			<div class="col-md-4 px-5">
				<!--begin::Story-->
				<div class="text-center mb-10 mb-md-0">
					<!--begin::Illustration-->
					<img src="<?= base_url(); ?>assets/admin/media/headquarter.gif" class="mh-125px mb-9" alt="" />
					<!--end::Illustration-->
					<!--begin::Heading-->
					<div class="d-flex flex-center mb-5">
						<!--begin::Badge-->
						<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
						<!--end::Badge-->
						<!--begin::Title-->
						<div class="fs-5 fs-lg-3 fw-bolder text-dark">Markas</div>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Description-->
					<div class="fw-bold fs-6 fs-lg-4 text-muted">Menyediakan layanan pendidikkan,
						<br />pembinaan, dan ambulans.
					</div>
					<!--end::Description-->
				</div>
				<!--end::Story-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 px-5">
				<!--begin::Story-->
				<div class="text-center mb-10 mb-md-0">
					<!--begin::Illustration-->
					<img src="<?= base_url(); ?>assets/admin/media/bloodbag.gif" class="mh-125px mb-9" alt="" />
					<!--end::Illustration-->
					<!--begin::Heading-->
					<div class="d-flex flex-center mb-5">
						<!--begin::Badge-->
						<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
						<!--end::Badge-->
						<!--begin::Title-->
						<div class="fs-5 fs-lg-3 fw-bolder text-dark">Unit Donor Darah</div>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Description-->
					<div class="fw-bold fs-6 fs-lg-4 text-muted">Menyediakan fasilitas donor darah
						<br />dan bank darah
					</div>
					<!--end::Description-->
				</div>
				<!--end::Story-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-md-4 px-5">
				<!--begin::Story-->
				<div class="text-center mb-10 mb-md-0">
					<!--begin::Illustration-->
					<img src="<?= base_url(); ?>assets/admin/media/clinic.gif" class="mh-125px mb-9" alt="" />
					<!--end::Illustration-->
					<!--begin::Heading-->
					<div class="d-flex flex-center mb-5">
						<!--begin::Badge-->
						<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
						<!--end::Badge-->
						<!--begin::Title-->
						<div class="fs-5 fs-lg-3 fw-bolder text-dark">Klinik Kesehatan</div>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Description-->
					<div class="fw-bold fs-6 fs-lg-4 text-muted">Menyediakan layanan kesehatan bagi
						<br />masyarakat dengan harga terjangkau
					</div>
					<!--end::Description-->
				</div>
				<!--end::Story-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Container-->
</div>
<!--end::How It Works Section-->
<!--begin::Statistics Section-->
<div class="mt-sm-n10">
	<!--begin::Curve top-->
	<div class="landing-curve landing-red-color">
		<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
		</svg>
	</div>
	<!--end::Curve top-->
	<!--begin::Wrapper-->
	<div class="pb-15 pt-18 landing-red-bg">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mt-8 mb-8" id="" data-kt-scroll-offset="{default: 100, lg: 150}">
				<!--begin::Title-->
				<h3 class="fs-2hx text-white fw-bolder mb-5">Jadwal Mobil Donor</h3>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="fs-5 fw-bold text-white">
					<br />
					Jadwal Mobil Donor PMI Aceh Selatan yang akan datang !
				</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->
			<!--begin::Statistics-->
			<div class="d-flex flex-center">
				<div class="table">
					<table class="table table-rounded border table-row-gray-100 align-middle gy-5 gs-5 " id="tableJadwalDepan">
						<thead>
							<tr class="fw-bold fs-6 text-white border-bottom border-white">
								<th class="min-w-120px">No</th>
								<th class="min-w-120px">Tanggal</th>
								<th class="min-w-120px">Lokasi</th>
								<th class="min-w-120px">Target</th>
								<th class="min-w-140px">Jam Buka</th>
								<th class="min-w-120px">Jam Tutup</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach($jadwal_mobil as $item){
									$newDate = date("d F Y", strtotime($item->jadwal));
									$jambuka = date("H:i", strtotime($item->jam_buka));
									$jamtutup = date("H:i", strtotime($item->jam_tutup));
									echo'
										<tr>
											<td class="text-white fs-6">'.$no.'</td>
											<td class="text-white fs-6">'.$newDate.'</td>
											<td class="text-white fs-6">'.$item->lokasi.'</td>
											<td class="text-white fs-6">'.$item->target.'</td>
											<td class="text-white fs-6">'.$jambuka.'</td>
											<td class="text-white fs-6">'.$jamtutup.'</td>
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
	<!--begin::Curve bottom-->
	<div class="landing-curve landing-red-color">
		<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
		</svg>
	</div>
	<!--end::Curve bottom-->
</div>
<!--end::Statistics Section-->
<!--begin::Projects Section-->
<div class="mb-lg-n15 position-relative z-index-2 ">
	<!--begin::Container-->
	<div class="container">
		<!--begin::Card-->
		<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
			<!--begin::Card body-->
			<div class="card-body p-lg-20">
				<!--begin::Heading-->
				<div class="text-left mb-5 mb-lg-10">
					<!--begin::Title-->
					<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/pmi.png" class="logo-default h-50px h-lg-60px" />
					<h3 class="fs-2hx text-dark mt-10 mb-20" id="" data-kt-scroll-offset="{default: 100, lg: 150}">Terima kasih atas dukunganmu!</h3>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="fs-5 fw-bold text-dark">Terima kasih telah mengambil bagian membantu menghadirkan fasilitas kesehatan yang berkualitas
						<br />
						dan terjangkau bagi warga Malang, bersama PMI. Dukunganmu amat berarti!
					</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Projects Section-->
<!--begin::Pricing Section-->
<div class="mt-sm-n20">
	<!--begin::Curve top-->
	<div class="landing-curve landing-red-color">
		<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
		</svg>
	</div>
	<!--end::Curve top-->
	<!--begin::Wrapper-->
	<div class="pt-20 landing-red-bg">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Plans-->
			<div class="d-flex flex-column container pt-lg-10">
				<!--begin::Heading-->
				<div class="mb-13 text-center">
					<h1 class="fs-2hx fw-bolder text-white mb-5" id="" data-kt-scroll-offset="{default: 100, lg: 150}">Kondisi Darurat? <br /> Telepon Ambulans</h1>
					<div class="flex-equal text-center ms-1">
						<a href="" class="btn btn-white mt-5 btn-color-danger fs-3"><i class="fonticon-outgoing-call fs-2 me-2"></i>112</a>
					</div>
				</div>
				<!--end::Heading-->
			</div>
			<!--end::Plans-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Pricing Section-->