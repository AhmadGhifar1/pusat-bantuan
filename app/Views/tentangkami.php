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


    <!-- </div> -->

    <!-- </div> -->

    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
        </div>

    </div>
</div>

<?php $this->endSection() ?>