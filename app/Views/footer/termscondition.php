<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Termscondition
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<div class="container">
    <div class="privacy" style="margin-bottom: 20px; margin-top: 20px;">
        <?php foreach ($terms as $list) : ?>
            <header>
                <h1 class="fs-4 fw-bold" style="text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ececec;">Syarat dan Ketentuan</h1>
            </header>
            <section>
                <p class="fs-6" style="padding-bottom: 30px;"><?= $list['isi'] ?></p>
            </section>
        <?php endforeach; ?>
    </div>
</div>


<!-- </div> -->

<!-- </div> -->
<!-- </div> -->
<?php $this->endSection() ?>