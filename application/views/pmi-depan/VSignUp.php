<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="<?= base_url(); ?>">
    <title>PMI - Malang</title>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #DA251D">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="<?php echo site_url(''); ?>" class="py-9 mb-5">
                            <img alt="Logo" src="<?= base_url() ?>assets/admin/media/logo-pmi.svg" class="h-60px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #ffffff;">Welcome to PMI Aceh Selatan</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="fw-bold fs-2" style="color: #ffffff;">Keep Calm and Donate Blood
                        </p>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(<?= base_url() ?>assets/admin/media/blood-donation.svg)"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="form w-100" id="kt_sign_in_form" action="<?= site_url('register') ?>" method="post" enctype="multipart/form-data">
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Sign Up to PMI Aceh Selatan</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                    <a href="<?php echo site_url('login'); ?>" class="link-primary fw-bolder">Sign in here?</a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!-- begin alert  -->
                            <?php
                            if ($this->session->flashdata('error_signup')) {
                                echo '
                                    <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
                                                <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <div class="d-flex flex-column">
                                            <h4 class="mb-1 text-danger">Opps!</h4>
                                            <span>' . $this->session->flashdata('error_signup') . '</span>
                                        </div>
                                    </div>
                                    ';
                            }
                            ?>
                            <!-- end alert  -->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">NIK</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text" name="nik_pendonor" placeholder="Masukan NIK" autocomplete="off" required />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Nama</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text" name="nama_pendonor" placeholder="Masukan Nama" autocomplete="off" required />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="email" name="email_pendonor" placeholder="Masukan Email" autocomplete="off" required />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <!-- <a href="../../demo3/dist/authentication/flows/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> -->
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" placeholder="Masukan Password" required />
                                <!--end::Input-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Umur</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="number" name="umur_pendonor" placeholder="Masukan Umur" required />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark mb-1">Alamat</label>
                            <div class="form-floating">
                                <input class="form-control form-control-lg form-control-solid" id="floatingInputValue" type="text" name="alamat_pendonor" required />
                                <label class="fs-5" for="floatingInputValue">Silahkan masukan alamat lengkap Anda !</label>
                            </div>
                            </div>
                            <!-- <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark mb-1">Alamat</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" name="alamat_pendonor" placeholder="Masukan Alamat Lengkap" required />
                            </div> -->
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark">Nomor Telepon</label>
                                <input class="form-control form-control-lg form-control-solid" type="number" name="telepon_pendonor" placeholder="Masukan Nomor Telepon" required />
                            </div>
                            <!--end::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-10">
                                    <span class="required">Jenis Golongan Darah</span>
                                </label>
                                <!--end::Label-->
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Jenis Golongan Darah" name="id_jenis_darah" required>
                                    <option></option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">AB</option>
                                    <option value="4">O</option>
                                </select>
                            </div>

                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Foto</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Dropzone-->
                                <img class="m-3 mx-auto rounded" id="prevAddFotoRegister" alt="" style="max-width: 200px; min-width: 50px; max-height: 200px; min-height: 50;" />
                                <input type="file" name="file" class="form-control form-control-solid" id="addImgRegister" onchange="previewAddFotoRegister();" />
                                <!--end::Dropzone-->
                            </div>

                            <div class="g-recaptcha" data-sitekey="6LcNBMggAAAAAOPrzPV9x9EuPV8rZEv9_nHoXRAt"></div>
                            <br />

                            <input type="hidden" id="imageupload" name="link">
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "<?= base_url() ?>assets/admin/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/admin/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url() ?>assets/admin/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <script>     
        function previewAddFotoRegister() {
            document.getElementById("prevAddFotoRegister").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("addImgRegister").files[0]);
            oFReader.onload = function(oFREvent) {
                document.getElementById("prevAddFotoRegister").src = oFREvent.target.result;
            };
        };
    </script>
</body>
<!--end::Body-->

</html>