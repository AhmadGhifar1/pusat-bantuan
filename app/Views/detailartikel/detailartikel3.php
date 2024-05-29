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
            <!-- <div class="section-header">
            </div> -->
            <div class="works-content">
                <div class="row">
                    <?php foreach ($artikel3 as $list) : ?>
                        <div class="col-md-4 col-sm-6" style="margin-top: 20px;">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <div class="single-list-topics-content4">
                                            <div class="artikel1">
                                                <h1 class="fw-bold" style="margin-top: 10px; font-size: x-large; margin-bottom: 30px"><?= $list['judul_artikel'] ?></h1>
                                                <div style="border: 1px solid;">
                                                    <p>PPPPPPPPPP</p>
                                                    <h1 class="text" style="margin-left: 15px; margin-bottom: 20px; border-bottom: 2px #cccc;"><?= $list['isi'] ?></h1>
                                                    <img src="<?= base_url('uploads/icons/' . esc($list['gambar_1'])); ?>" style="justify-content: center; width: 100%; height: 20%; margin-bottom: 10px;">
                                                </div>
                                                <div style="border: 1px solid;">
                                                    <p>PPPPPPPPP</p>
                                                    <h1 class="text" style="margin-left: 15px; margin-bottom: 20px;"><?= $list['isi2'] ?></h1>
                                                    <img src="<?= base_url('uploads/icons/' . esc($list['gambar_2'])); ?>" style="justify-content: center; width: 100%; height: 20%; margin-bottom: 10px;">
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

</body>
<?php $this->endSection() ?>