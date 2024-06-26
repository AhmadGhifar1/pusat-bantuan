<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Tiket
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('../assets/sweetalert2/dist/sweetalert2.min.css') ?>">

<!-- l -->

<body>
    <!--welcome-hero start -->
    <!-- top-area Start -->
    <!-- top-area Start -->
    <<section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt" style="margin-top: 20px;">
                <h2>PT GOLDSTEP INDONESIA <br> that all you need </h2>
            </div>
            <div class="welcome-hero-serch-box" style="margin-top: 50px;">
                <div class="welcome-hero-form">
                    <div class="single-welcome-hero-form">
                        <!-- <h3>what?</h3> -->
                        <form action="index.html">
                            <input type="text" placeholder="Ex: porduct, feature" />
                        </form>
                        <!-- <div class="welcome-hero-form-icon">
                            <i class="flaticon-list-with-dots"></i>
                        </div> -->
                        <div class="welcome-hero-serch">
                            <button class="welcome-hero-btn" onclick="window.location.href='#'">
                                <i class="" style="font-size: 36px; color: #FFFFFF;"></i>
                                <i data-feather="search"></i>
                            </button>
                        </div>
                    </div>
                    <div style="display: flex; margin-left: 8%;">
                        <a href="/beranda" style="color: #FFFFFF;">Beranda \ </a>
                        <a href="/beranda" style="color: #FFFFFF;"> Tiket</a>
                    </div>
                </div>
            </div>
        </div>

        </section><!--/.welcome-hero-->

        <!--welcome-hero end -->

        <!--list-topics start -->
        <!--list-topics end-->

        <!--works start -->
        <section id="works" class="works">
            <div class="container">
                <div class="section-header">
                </div><!--/.section-header-->
                <div class="works-content">
                    <div class="row">
                        <div class="col-md-7 col-sm-12" style="margin-top: 20px;">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <div class="single-list-topics-content3">
                                            <div class="artikel1">
                                                <form action="/tiket/store" method="post">
                                                    <?= csrf_field() ?>
                                                    <h1 class="fw-bold" style="margin-top: 10px; font-size: x-large;">Kirim Tiket</h1>
                                                    <p>
                                                    <h4 class="fw-bold" style="margin-top: 30px;">Kontak Information</h4>
                                                    </p>
                                                    <div>
                                                        <label for="nama_kontak" style="font-size: 15px; margin-top: 20px; color: black;" required>Nama Kontak</label>
                                                        <input type="text" class="form-control" id="nama_kontak" name="nama_kontak" style="margin-top: 10px;" placeholder="Nama kontak" value="<?= old('nama_kontak') ?>">
                                                        <?php if (isset($validation) && $validation->hasError('nama_kontak')) : ?>
                                                            <div style="color:red;">
                                                                <?= $validation->getError('nama_kontak') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div>
                                                        <label for="email" style="font-size: 15px; margin-top: 20px; color: black;" required>Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" style="margin-top: 10px;" placeholder="Email" value="<?= old('email') ?>">
                                                        <?php if (isset($validation) && $validation->hasError('email')) : ?>
                                                            <div style="color:red;">
                                                                <?= $validation->getError('email') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <h4 class="fw-bold" style="margin-top: 20px;">Tiket Informasi</h4>
                                                    <div>
                                                        <label for="subjek" style="font-size: 15px; margin-top: 20px; color: black;" required>Subjek</label>
                                                        <input type="text" class="form-control" id="subjek" name="subjek" style="margin-top: 10px;" placeholder="Subjek" value="<?= old('subjek') ?>">
                                                        <?php if (isset($validation) && $validation->hasError('subjek')) : ?>
                                                            <div style="color:red;">
                                                                <?= $validation->getError('subjek') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div>
                                                        <label for="deskripsi" style="font-size: 15px; margin-top: 20px; color: black;" required>Deskripsi</label>
                                                        <textarea class="form-control" placeholder="deskripsi" id="deskripsi" name="deskripsi" style="height: 300px; margin-top: 10px;"></textarea>
                                                        <?php if (isset($validation) && $validation->hasError('deskripsi')) : ?>
                                                            <div style="color:red;">
                                                                <?= $validation->getError('deskripsi') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <button type="submit" style="margin-top: 10px; background-color: #03C988; width: 70px; height: 40px; border-radius: 7px; color: #FFFFFF; font-size: medium;">Kirim</button>
                                                </form>
                                            </div>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            </div><!--/.container-->

        </section><!--/.works-->
        <!--works end -->

        <!-- </div> -->

        <!-- </div> -->

        <!-- </div> -->

</body>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('../assets/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<?= session()->getFlashdata('sweetalert'); ?>
<?php $this->endSection() ?>