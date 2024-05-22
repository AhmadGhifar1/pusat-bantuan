<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <title><?= $this->renderSection('layouts') ?></title>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/home.css">


</head>

<body>
    <!-- top-area Start -->
    <style>
        .nav-item.active .nav-link {
            color: #03C988;
        }
    </style>
    <section class="top-area sticky-top">
        <div class="header-area ">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">Gold<span>Step</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp" style="margin-left: 80%;">
                            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/beranda') ? 'active' : ''; ?>"">
                                    <a class=" nav-link fs-6" aria-current="page" href="/beranda">Beranda</a>
                            </li>
                            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/tiket') ? 'active' : ''; ?>"">
                                    <a class=" nav-link fs-6" href="/tiket">Tiket</a>
                            </li>
                            <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/tentangkami') ? 'active' : ''; ?>"">
                                    <a class=" nav-link fs-6" href="/tentangkami">Tentang kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </section><!-- /.top-area-->


    <!-- top-area End -->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div><!--/.scroll-Top-->

    <div class="container-fluid">
        <main class="">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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

    <div class="col-12">
        <div class="col-1">
            <?php foreach ($kontak as $list) : ?>
                <div class="card" style="width: 1530px; height: 260px; border: 1px solid rgb(229, 234, 239);">
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
                                <p class="txt m-0 p-0"><?= $list['nama'] ?></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="col-7 text-center">
                                <p class="txt p-0 m-0 fs-5 fw-bold">Informasi</p>
                                <div class="col-15 p-2">
                                    <a href="">
                                        <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Pusat Bantuan</p>
                                    </a>
                                    <a href="/privacypolicy">
                                        <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Privacy Policy</p>
                                    </a>
                                    <a href="/termscondition">
                                        <p class="txt p-0 m-0 fs-5 text-decoration-underline">Terms & Condition</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="col-10 justify-content-center">
                                <p class="txt p-0 m-0 fs-5 fw-bold" style="text-align: left;">Contact</p>
                                <div class="col-10 p-0 text-start">
                                    <p class="txt p-0 m-0 fs-5 pb-2"><?= $list['email'] ?></p>
                                    <p class="txt p-0 m-0 fs-5 pb-2"><?= $list['nomor_telepon'] ?></p>
                                    <p class="txt p-0 m-0 fs-6"><?= $list['alamat'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer col-12 d-flex justify-content-center pt-3">
                        <p class="txt p-0 m-0 text-light fw-bold fs-4"> GoldStep</p>
                        <p class="txt ps-5 m-0 text-light fs-5"> Copyright 2024 PT.Goldstep Teknologi Indonesia</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</body>

</html>