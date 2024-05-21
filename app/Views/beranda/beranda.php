<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Beranda
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<!-- l -->

<body>
    <!--welcome-hero start -->
    <!-- top-area Start -->
    <!-- top-area Start -->
    <section id="home" class="welcome-hero">
        <div class="container">
            <div class="welcome-hero-txt" style="margin-top: 20px;">
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
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
            <div class="carousel-item">
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="list-topics" class="list-topics">
        <div class="container">
            <div class="list-topics-content">
                <ul>
                    <?php foreach ($kategori as $list) : ?>
                        <li>
                            <div class="single-list-topics-content">
                                <div class="single-list-topics-icon">
                                    <i class="flaticon-restaurant"></i>
                                </div>
                                
                                <h2><a href="/kategori"><?= $list['nama_kategori'] ?></a></h2>
                                <p><?= $list['deskripsi_kategori'] ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div><!--/.container-->
    </section><!--/.list-topics-->
    <!--list-topics end-->

    <!--works start -->
    <section id="works" class="works">
        <div class="container">
            <div class="section-header">
                <h2>Artikel Terbaru </h2>
            </div>
            <!--/.section-header-->

            <div class="container-fluid mt-4">
                <div class="row">
                    <?php foreach ($artikel as $list) : ?>
                        <div class="col-4">
                            <a href="" style="text-decoration: none">
                                <div class="card shadow" style="margin-top: 40px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4 d-flex align-items-center">
                                                <img src="https://fastly.picsum.photos/id/760/200/200.jpg?hmac=MlH81fLiPAKVmDN5qADWkd_299jLg9vp9uVnRn3uxp8" class="img-fluid rounded" alt="..." />
                                            </div>
                                            <div class="col-8">
                                                <h4 class="mb-1 text-success"><?= $list['judul_artikel'] ?></h4>
                                                <h6><?= $list['id_kategori'] ?></h6>
                                                <p class="mb-1">
                                                    <?= $list['isi'] ?>
                                                </p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label class="text-body-tertiary"><?= $list['pembuat'] ?></label>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <label class="text-body-tertiary"><?= $list['tanggal_unggah'] ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- </body> -->

        </div>
        </div><!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!--explore start -->

    <!--footer start-->
    <!-- <footer id="footer" class="footer">
        <div class="container">
            <div class="footer-menu">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">Lorem<span>Ipsum</span></a>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- <div class="hm-footer-copyright">
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            &copy;copyright. designed and developed by <a href="https://www.themesine.com/">lorem</a>
                        </p>
                    </div>
                    <div class="col-sm-7">
                        <div class="footer-social">
                            <span><i class="fa fa-phone"> +1 (222) 777 8888</i></span>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-email"></i></a>
                        </div>
                    </div>
                </div>

            </div>  -->

    <!-- </div> -->

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