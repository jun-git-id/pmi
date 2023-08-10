<!--begin::Wrapper-->
<div class="pb-15 pt-18 landing-red-bg">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mt-8 mb-8" id="" data-kt-scroll-offset="{default: 100, lg: 150}">
            <!--begin::Title-->
            <h3 class="fs-2hx text-white fw-bolder mb-5">Ketersediaan Darah</h3>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="fs-5 fw-bold text-white">
                <br />
                Stok dapat berubah sewaktu-waktu. Untuk konfirmasi stok, silahkan menghubungi UDD
            </div>
            <!--end::Description-->
            <!--begin::Description-->
            <div class="fs-5 fw-bold text-white">
                <br />
                <?php 
                    $newDate = date("d M Y H:i:s", strtotime($last_update));
                ?>
                Terakhir diupdate pada <?= $newDate ?>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->
        <!--begin::Statistics-->
        <div class="d-flex flex-center">
            <div class="table">
                <table class="table table-rounded border table-row-gray-100 align-middle gy-5 gs-5">
                    <thead class="p-xxl-5">
                        <tr class="fw-bold fs-4 text-white border-bottom border-gray-200">
                            <th class="mx-10">Produk</th>
                            <th class="mx-10">A</th>
                            <th class="mx-10">B</th>
                            <th class="mx-10">AB</th>
                            <th class="mx-10">O</th>
                            <th class="mx-10">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody class="text-white p-xxl-5 fs-6">
                        <?php
                            $count = 0;
                            $limit = 4;
                            foreach($darah as $item){
                                $jumlah = 0;
                                echo '
                                    <tr>
                                        <td class="mx-10">'.$item->jenis_darah.'</td>
                                ';
                                for($count; $count < $limit; $count++){
                                    $jumlah += $detail[$count]->stok;
                                    echo '
                                        <td class="mx-10">
                                            '.$detail[$count]->stok.'
                                        </td>       
                                    ';
                                }
                                $limit += 4;
                                echo '
                                        <td class="text-white fw-bolder">
                                            '.$jumlah.'
                                        </td>
                                    </tr>
                                ';
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