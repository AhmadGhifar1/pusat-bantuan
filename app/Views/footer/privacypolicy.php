<?php $this->extend('layouts/home') ?>

<?php $this->section('layouts') ?>
Privacy Policy
<?php $this->endSection() ?>
<?php $this->section('content') ?>


<div class="privacy" style="margin-bottom: 20px; margin-top: 20px;">
    <?php foreach ($policy as $list) : ?>
        <header>
            <h1 class="fs-3 fw-bold" style="text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ececec;">Kebijakan Privasi</h1>
        </header>
        <section>
            <!-- <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Pendahuluan</h2> -->
            <p class="fs-6" style="padding-bottom: 30px;"><?= $list['isi'] ?></p>
        </section>
        <!-- <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Informasi yang Kami Kumpulkan</h2>
            <p class="fs-6">Kami mengumpulkan informasi yang Anda berikan secara langsung kepada kami, seperti saat Anda membuat akun atau berlangganan buletin kami. Informasi yang kami kumpulkan meliputi:</p>
            <ul class="fs-6" style="padding-bottom: 30px;">
                <li>Nama</li>
                <li>Alamat email</li>
                <li>Nomor telepon</li>
            </ul>
        </section>
        <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Bagaimana Kami Menggunakan Informasi Anda</h2>
            <p class="fs-6">Informasi yang kami kumpulkan digunakan untuk berbagai keperluan, termasuk:</p>
            <ul class="fs-6" style="padding-bottom: 30px;">
                <li>Menyediakan dan memelihara layanan kami</li>
                <li>Memproses transaksi</li>
                <li>Mengirimkan komunikasi promosi</li>
            </ul>
        </section>
        <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Keamanan Informasi</h2>
            <p class="fs-6" style="padding-bottom: 30px;">Kami berkomitmen untuk melindungi informasi pribadi Anda. Kami menggunakan berbagai langkah keamanan untuk menjaga informasi Anda dari akses, penggunaan, atau pengungkapan yang tidak sah.</p>
        </section>
        <section>
            <h2 class="fs-7" style="border-bottom: 2px solid #ececec; padding-bottom: 10px;">Perubahan Kebijakan Privasi</h2>
            <p class="fs-6" style="padding-bottom: 30px;">Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Kami akan memberitahukan Anda tentang perubahan tersebut melalui email atau pemberitahuan di situs kami.</p>
        </section> -->
    <?php endforeach; ?>
</div>

<!-- </div> -->

<!-- </div> -->

<!-- </div> -->

<!-- </div> -->

<?php $this->endSection() ?>