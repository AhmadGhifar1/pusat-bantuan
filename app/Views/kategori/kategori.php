<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Kategori
<?php $this->endSection('') ?>
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
                        <?php foreach ($kategori as $list) : ?>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <!-- <td> -->
                                        <!-- <h2><a href="#">lorem <span> ipsum </span> do</a></h2> -->
                                        <!-- <li> -->
                                        <div class="single-list-topics-content2">
                                            <div class="single-list-topics-icon2">
                                                <img src="<?= base_url('uploads/icons/' . esc($list['ikon'])); ?>" class="img-fluid rounded" alt="..." width="60px" />
                                            </div>
                                            <div class="artikel1">
                                                <h2><a href="/subkategori/<?= $list['id'] ?>"><?= $list['nama_kategori'] ?></a></h2>
                                            </div>
                                        </div>
                                        <!-- </li> -->
                                        <!-- </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->

    </section><!--/.works-->
    <!--works end -->

    <!-- </div> -->

    <!-- </div> -->

    <!-- </div> -->

</body>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<?php $this->endSection() ?>