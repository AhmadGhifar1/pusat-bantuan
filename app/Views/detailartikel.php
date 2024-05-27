<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Detail artikel
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
                    <?php foreach ($artikel as $list) : ?>
                        <div class="col-md-4 col-sm-6" style="margin-top: 20px;">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <div class="single-list-topics-content4">
                                            <div class="artikel1">
                                                <h1 class="fw-bold" style="margin-top: 10px; font-size: x-large;"><?= $list['judul_artikel'] ?></h1>
                                                <h4 class="fw-bold" style="margin-top: 30px; color: #03C988;">GoldStep Klinik</h4>
                                                <div>
                                                    <img src="<?= base_url('uploads/icons/' . esc($list['gambar_1']));?>" style="justify-content: center; width: 100%; height: 20%; margin-bottom: 10px;">
                                                    <h1 class="text" style="margin-left: 15px; margin-bottom: 20px;"><?= $list['isi'] ?></h1>
                                                </div>
                                                <div>
                                                    <img src="<?= base_url('uploads/icons/' . esc($list['gambar_2']));?>" style="justify-content: center; width: 100%; height: 20%; margin-bottom: 10px;">
                                                    <h1 class="text" style="margin-left: 15px; margin-bottom: 20px;"><?= $list['isi2'] ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>
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
    <!-- </div> -->

    <!-- </div> -->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

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