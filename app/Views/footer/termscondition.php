<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Termscondition
<?php $this->endSection() ?>
<?php $this->section('content') ?>

<div class="privacy" style="margin-bottom: 20px; margin-top: 20px;">
    <?php foreach ($terms as $list) : ?>
        <header>
            <h1 class="fs-6 fw-bold" style="text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ececec;">Syarat dan Ketentuan</h1>
        </header>
        <section>
            <p class="fs-6" style="padding-bottom: 30px;"><?= $list['isi'] ?></p>
        </section>
        <!-- <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Penggunaan Situs</h2>
            <p class="fs-6" style="padding-bottom: 30px;">Anda setuju untuk menggunakan situs ini hanya untuk tujuan yang sah dan dengan cara yang tidak melanggar hak-hak pihak lain, serta tidak membatasi atau menghalangi pengguna lain dalam menikmati situs ini.</p>
        </section>
        <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Konten</h2>
            <p class="fs-6" style="padding-bottom: 30px;">Konten di situs ini hanya untuk informasi umum dan penggunaan pribadi Anda. Kami berhak untuk mengubah konten kapan saja tanpa pemberitahuan.</p>
        </section>
        <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Pembatasan Tanggung Jawab</h2>
            <p class="fs-6" style="padding-bottom: 30px;">Kami tidak bertanggung jawab atas kerugian atau kerusakan yang timbul dari penggunaan atau ketidakmampuan menggunakan situs ini atau dari kesalahan atau kelalaian dalam konten.</p>
        </section>
        <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Perubahan Syarat dan Ketentuan</h2>
            <p class="fs-6" style="padding-bottom: 30px;">Kami dapat memperbarui syarat dan ketentuan ini dari waktu ke waktu. Anda diharapkan untuk memeriksa halaman ini secara berkala untuk memastikan Anda menyetujui setiap perubahan.</p>
        </section> -->
    <?php endforeach; ?>
</div>


<!-- </div> -->

<!-- </div> -->
<!-- </div> -->
<?php $this->endSection() ?>