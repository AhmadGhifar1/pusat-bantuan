<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Privacy Policy
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<div class="container">
    <div class="privacy" style="margin-bottom: 20px; margin-top: 20px;">
        <?php foreach ($policy as $list) : ?>
            <header>
                <h1 class="fs-4 fw-bold" style="text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ececec;">Kebijakan Privasi</h1>
            </header>
            <section>
                <!-- <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Pendahuluan</h2> -->
                <p class="fs-6" style="padding-bottom: 30px;"><?= $list['isi'] ?></p>
            </section>
        <?php endforeach; ?>
    </div>
</div>

<!-- </div> -->

<!-- </div> -->

<!-- </div> -->

<!-- </div> -->

<?php $this->endSection() ?>