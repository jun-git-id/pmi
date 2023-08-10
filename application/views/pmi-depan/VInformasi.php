	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid mb-20" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Post card-->
			<div class="card">
				<!--begin::Body-->
				<div class="card-body p-lg-20 pb-lg-0">
					<!--begin::Layout-->
					<div class="d-flex flex-column flex-xl-row">
						<!--begin::Content-->
						<div class="flex-lg-row-fluid me-xl-15">
							<!--begin::Post content-->
							<div class="mb-17">
								<!--begin::Wrapper-->
								<div class="mb-8">
									<!--begin::Title-->
									<h2 href="#" class="text-dark  fs-2 fw-bolder"><?= $informasi[0]->judul_informasi ?>
										<!--end::Title-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Description-->
								<div class="fs-5 fw-bold text-dark">
									<!--begin::Text-->
									<?= $informasi[0]->deskripsi ?>
									<!--end::Text-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Post content-->
						</div>
						<!--end::Content-->
						<!--begin::Sidebar-->
						<div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
							<!--begin::Catigories-->
							<div class="mb-16">
								<h4 class="text-black mb-7">Daftar Menu</h4>
								<!--begin::Item-->
								<?php
									foreach($list as $item){
										echo'
											<div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
												<!--begin::Text-->
												<a href="'.site_url('informasi-pmi/'.$item->id_informasi).'" class="text-muted text-hover-danger pe-2">'.$item->judul_informasi.'</a>
												<!--end::Text-->
												<!--end::Number-->
											</div>
										';
									}
								?>
								<!--end::Item-->
							</div>
							<!--end::Catigories-->
						</div>
						<!--end::Sidebar-->
					</div>
					<!--end::Layout-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Post card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->