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
	                                <!--begin::Info-->
	                                <div class="d-flex flex-wrap mb-6">
	                                    <!--begin::Item-->
	                                    <div class="me-9 my-1">
	                                        <!--begin::Icon-->
	                                        <!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
	                                        <!--end::Icon-->
	                                        <!--begin::Label-->
	                                        <span class="fw-bolder text-gray-400">Berita</span>
	                                        <!--begin::Label-->
	                                    </div>
	                                    <!--end::Item-->
	                                    <!--begin::Item-->
	                                    <div class="me-9 my-1">
	                                        <!--begin::Icon-->
	                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
	                                        <span class="svg-icon svg-icon-danger svg-icon-2 me-1">
	                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
	                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
	                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
	                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
	                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
	                                            </svg>
	                                        </span>
	                                        <!--end::Svg Icon-->
	                                        <!--end::Icon-->
	                                        <!--begin::Label-->
	                                        <span class="fw-bolder text-gray-400">
												<?php 
    											$newDate = date("d M Y", strtotime($berita[0]->tanggal_berita)); 
												echo $newDate;  
												?>
											</span>
	                                        <!--end::Label-->
	                                    </div>
	                                    <!--end::Item-->
	                                    <!--begin::Item-->
	                                    <div class="my-1">
	                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen055.svg-->
	                                        <span class="svg-icon svg-icon-danger svg-icon-2 me-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
	                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="currentColor" />
	                                                <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="currentColor" />
	                                                <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="currentColor" />
	                                            </svg></span>
	                                        <!--end::Svg Icon-->
	                                        <!--begin::Label-->
	                                        <span class="fw-bolder text-gray-400"><?= $berita[0]->penulis_berita ?></span>
	                                        <!--end::Label-->
	                                    </div>
	                                    <!--end::Item-->
	                                </div>
	                                <!--end::Info-->
	                                <!--begin::Title-->
	                                <h2 href="#" class="text-dark fs-2 fw-bolder"><?= $berita[0]->judul_berita ?></h2>
	                                    <!--end::Title-->
	                                    <!--begin::Container-->
	                                    <div class="overlay mt-8">
	                                        <!--begin::Image-->
	                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url(<?= $berita[0]->gambar ?>)"></div>
	                                        <!--end::Image-->
	                                    </div>
	                                    <!--end::Container-->
	                            </div>
	                            <!--end::Wrapper-->
	                            <!--begin::Description-->
	                            <div class="fs-5 fw-bold text-dark">
	                                <!--begin::Text-->
	                                <?= $berita[0]->deskripsi ?>
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
								<h4 class="text-black mb-7">Daftar Berita</h4>
								<?php
									foreach($list as $item){
										echo'
										<div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
											<a href="'.site_url('news/'.$item->id_berita).'" class="text-muted text-hover-danger pe-2">'.$item->judul_berita.'</a>
										</div>
										';
									}
								?>
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