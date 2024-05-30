<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Tentangkami
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<body>
    

<div class="d-flex">
    <div class="col-3" style="margin-top: 180px; margin-left: 50px;">
        <h2>PT Goldstep Teknologi Indonesia</h2>
        <p>default</p>
    </div>
    <img src="assets/img/banner.jpg" style=" max-width: 50%; height: auto; margin-left: 400px;">
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
</body>
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

<!-- </div> -->

<!-- </div> -->

<!-- </div> -->

<?php $this->endSection() ?>