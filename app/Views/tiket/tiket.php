<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Tiket
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<!-- l -->

<body>
    <!--welcome-hero start -->
    <!-- top-area Start -->
    <!-- top-area Start -->
    <section id="home" class="welcome-hero">
        <div class="container-fluid">
            <div class="welcome-hero-txt">
                <h2>PT GOLDSTEP INDONESIA <br> that all you need </h2>
            </div>
            <div class="welcome-hero-serch-box">
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
                                <i class="fa fa-search" style="font-size: 36px; color: #FFFFFF;"></i>
                                <i data-feather="search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; margin-left: 8%;">
                <a href="/beranda" style="color: #FFFFFF;">Beranda \ </a>
                <a href="/beranda" style="color: #FFFFFF;"> Tiket</a>
            </div>
        </div>

    </section><!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--list-topics start -->
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container-fluid">
            <div class="section-header">
            </div><!--/.section-header-->
            <div class="works-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6" style="margin-top: 20px;">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <div class="single-list-topics-content3">
                                        <div class="artikel1">
                                            <form action="/tiket/store" method="post">
                                                <h1 class="fw-bold" style="margin-top: 10px; font-size: x-large;">Kirim Tiket</h1>
                                                <p>
                                                <h4 class="fw-bold" style="margin-top: 30px;">Kontak Information</h4>
                                                </p>
                                                <label for="nama_kontak" style="font-size: 15px; margin-top: 20px; color: black;" required>Nama Kontak</label>
                                                <input type="text" class="form-control" id="nama_kontak" name="nama_kontak" style="margin-top: 10px;" placeholder="Nama kontak">
                                                <label for="email" style="font-size: 15px; margin-top: 20px; color: black;" required>Email</label>
                                                <input type="email" class="form-control" id="email" name="email" style="margin-top: 10px;" placeholder="Email">
                                                <h4 class="fw-bold" style="margin-top: 20px;">Tiket Informasi</h4>
                                                <label for="subjek" style="font-size: 15px; margin-top: 20px; color: black;" required>Subjek</label>
                                                <input type="text" class="form-control" id="subjek" name="subjek" style="margin-top: 10px;" placeholder="Subjek">
                                                <label for="subjek" style="font-size: 15px; margin-top: 20px; color: black;" required>Deskripsi</label>
                                                <textarea class="form-control" placeholder="deskripsi" id="deskripsi" name="deskripsi" style="height: 300px; margin-top: 10px;"></textarea>
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
<?php $this->endSection() ?>