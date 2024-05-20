<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Tentangkami
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<div class="d-flex">
    <div class="" style="margin-top: 180px; margin-left: 50px;">
        <h2>PT Goldstep Teknologi Indonesia</h2>
        <p>default</p>
    </div>
    <img src="img/banner.jpg" style=" max-width: 50%; height: auto; margin-left: 400px;">
</div>
<div class="container mt-5">
    <div class="col-12 d-flex flex-wrap gap-2 justify-content-center">
        <?php foreach ($tentangkami as $list) : ?>
            <div class="card shadow col" style="padding: 24px; height: auto; width: 100%; flex: 1 0 500px;">
                <div class="textarea1">
                    <p><?= $list['judul'] ?></p>
                </div>
                <div class="card-body">
                    <p><?= $list['deskripsi'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="col-12">
    <div class="col-1">
        <div class="card" style="width: 1500px; height: 260px; border: 1px solid rgb(229, 234, 239);">
            <div class="card-body d-flex">
                <div class="col-4">
                    <div class="col d-flex justify-content-center gap-3">
                        <div class="col-2 text-center d-flex justify-content-center st-1">
                            <div class="lingkaran p-2">
                                <a href="">
                                    <i class="fa fa-whatsapp text-light" style="font-size: 36px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2 text-center d-flex justify-content-center st-1">
                            <div class="lingkaran p-2">
                                <a href="">
                                    <i class="fa fa-instagram text-light" style="font-size: 36px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center mt-4">
                        <p class="txt m-0 p-0">PT.GoldStep Teknologi Indonesia</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-7 text-center">
                        <p class="txt p-0 m-0 fs-5 fw-bold">Informasi</p>
                        <div class="col-15 p-2">
                            <a href="">
                                <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Pusat Bantuan</p>
                            </a>
                            <a href="">
                                <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Privacy Policy</p>
                            </a>
                            <a href="">
                                <p class="txt p-0 m-0 fs-5 text-decoration-underline">Terms & Condition</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="col-10 text-center justify-content-center">
                        <p class="txt p-0 m-0 fs-5 fw-bold">Contact</p>
                        <div class="col-15 p-2 text-start">
                            <p class="txt p-0 m-0 fs-5 pb-2">goldstep@gmail.com</p>
                            <p class="txt p-0 m-0 fs-5 pb-2">+6281222188524</p>
                            <p class="txt p-0 m-0 fs-6">Taman Kopo Indah 3, Ruko D35 Bandung, Indonesia, 40128</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer col-12 d-flex justify-content-center pt-3">
                <p class="txt p-0 m-0 text-light fw-bold fs-4"> GoldStep</p>
                <p class="txt ps-5 m-0 text-light fs-5"> Copyright 2024 PT.Goldstep Teknologi Indonesia</p>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- </div> -->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div>
</div>

<?php $this->endSection() ?>