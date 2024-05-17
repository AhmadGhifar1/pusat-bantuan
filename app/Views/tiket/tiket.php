<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Kategori
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<!-- l -->

<body>
    <!--welcome-hero start -->
    <!-- top-area Start -->
    <!-- top-area Start -->
    <section id="home" class="welcome-hero">
        <div class="container">
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
                                                <input type="text" class="form-control" id="nama_kontak" name="nama_kontak" placeholder="Nama kontak">
                                                <label for="email" style="font-size: 15px; margin-top: 20px; color: black;" required>Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                <h4 class="fw-bold" style="margin-top: 20px;">Tiket Informasi</h4>
                                                <label for="modul" style="font-size: 15px; margin-top: 20px; color: black;" required>Modules</label>
                                                <input type="text" class="form-control" id="modul" name="modul" placeholder="Modules">
                                                <label for="klasifikasi" style="font-size: 15px; margin-top: 20px; color: black;" required>Klasifikasi</label>
                                                <input type="text" class="form-control" id="klasifikasi" name="klasifikasi" placeholder="Klasifikasi">
                                                <label for="prioritas" style="font-size: 15px; margin-top: 20px; color: black;" required>Prioritas</label>
                                                <input type="text" class="form-control" id="prioritas" name="prioritas" placeholder="Prioritas">
                                                <label for="subjek" style="font-size: 15px; margin-top: 20px; color: black;" required>Subjek</label>
                                                <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek">
                                                <label for="deskripsi" style="font-size: 15px; margin-top: 20px; color: black;" required>Deskripsi</label>
                                                <input type="text" style="height: 30%;" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                                                <button type="submit" style="margin-top: 10px; background-color: #03C988; width: 70px; height: 40px; border-radius: 7px; color: #FFFFFF; font-size: medium;">Kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="col-md-4 col-sm-6">
                        <h2><a href="#">lorem <span> ipsum </span></a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                            ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                    <h2><a href="#">lorem <span> ipsum</span> place</a></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                        ut laboremagna aliqua.
                    </p>
                    <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                        read more
                    </button> -->
                </div>
            </div>
        </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->

    <!--footer start-->
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

    <!-- </div> -->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script src="assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="assets/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

</body>
<?php $this->endSection() ?>