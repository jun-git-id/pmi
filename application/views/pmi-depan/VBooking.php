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
                    <h5 class="fs-1 text-dark mt-10 mb-20" id="">Silahkan mengisi form isian dibawah ini untuk booking jadwal donor !</h5>
                    <!--end::Title-->
                    <form action="<?= site_url('storeBooking') ?>" method="post">
                        <?php
                        $newDate = date("d F Y", strtotime($jadwal[0]->jadwal));
                        $jambuka = date("H:i", strtotime($jadwal[0]->jambuka));
                        $jamtutup = date("H:i", strtotime($jadwal[0]->jamtutup));
                        ?>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Lokasi</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="lokasi" class="form-control form-control-lg form-control-solid " value="<?= $jadwal[0]->lokasi ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Tanggal</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" class="form-control form-control-lg form-control-solid " value="<?= $newDate ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Jam Buka</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="" class="form-control form-control-lg form-control-solid " value="<?= $jambuka ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Jam Tutup</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="" class="form-control form-control-lg form-control-solid " value="<?= $jamtutup ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6 required">Nama Lengkap</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nama" class="form-control form-control-lg form-control-solid " value="<?=$_SESSION['name'] ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6 required">Nomor Telepon</label>
                            <div class="col-lg-8 fv-row">
                                <input type="number" name="telp" class="form-control form-control-lg form-control-solid " value="<?=$_SESSION['notelp'] ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6 required">Alamat</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="alamat" class="form-control form-control-lg form-control-solid " value="<?=$_SESSION['alamat'] ?>" readonly />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6 required">Instansi</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="instansi" class="form-control form-control-lg form-control-solid " placeholder="Masukan Instansi" required />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6 required">Booking Waktu</label>
                            <div class="col-lg-8 fv-row">
                                <input id="jam_hadir" class="form-control form-control-solid" placeholder="Masukan Waktu Kehadiran" name="jam_datang" required />
                            </div>
                        </div>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input " type="checkbox" value="" id="CheckDatang" required/>
                            <label class="form-check-label" for="CheckDatang">
                                Data yang saya masukan adalah benar dan saya menyetujui dan bersedia datang ke Unit Donor Darah untuk melakukan Check-Up dan Donor Darah.
                            </label>
                        </div>
                </div>
                <!--end::Heading-->
                <div class="text-center">
                    <input type="hidden" name="tanggal" value="<?= $jadwal[0]->jadwal ?>">
                    <input type="hidden" name="id_mobil" value="<?= $jadwal[0]->id_mobil ?>">
                    <input type="hidden" name="id_pendonor" value="<?= $_SESSION['id'] ?>">
                    <button type="submit" class="btn btn-danger  btn-color-white me-1">Booking Jadwal</button>
                </div>
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Projects Section-->
<!--begin::Pricing Section-->
<div class="mt-sm-n20 pt-5">
    <!--begin::Curve top-->
    <div class="landing-curve landing-red-color">
        <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
        </svg>
    </div>
    <!--end::Curve top-->
</div>
<!--end::Pricing Section-->

<script src="<?= base_url(); ?>assets/admin/plugins/global/plugins.bundle.js"></script>
<script>
    $("#jam_hadir").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        minTime: "<?= $jambuka ?>",
        maxTime: "<?= $jamtutup ?>",
    });
</script>