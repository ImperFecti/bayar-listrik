<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>
<!-- hero section start -->
<section class="hero fade-in">
    <main class="container-xl">
        <h1>Aplikasi Pembayaran Listrik Pascabayar</h1>
        <h2>Nikmati Kemudahan Pembayaran Tagihan Listrik Tanpa Ribet</h2>
        <h5>
            Kami menyediakan solusi pembayaran tagihan listrik yang cepat, aman, dan nyaman. Dengan beberapa klik saja, Anda dapat menyelesaikan pembayaran tagihan listrik Anda kapan saja dan di mana saja.
        </h5>
        <br>
        <a class="button-57" role="button" href="/tagihanlistrik"><span class="text">Tagihan Listrik</span><span>Lihat Tagihan</span></a>
    </main>
</section>
<!-- hero section end -->

<!-- mini navbar start -->
<div class="nvbr fade-in sticky-top">
    <div class="nvbr-container ">
        <a href="#Home" class="nvbr-item">
            <span>01</span>
            Keunggulan Website Ini
        </a>
        <a href="#Tarif" class="nvbr-item">
            <span>02</span>
            Harga Listrik per kWh
        </a>
        <a href="/kalkulator" class="nvbr-item">
            <span>03</span>
            Kalkulator Hitung Listrik
        </a>
        <a href="#Contact" class="nvbr-item">
            <span>04</span>
            Contact Admin
        </a>
    </div>
</div>
<!-- mini navbar end -->

<!-- home section start -->
<div class="container-lg fade-in" id="Home">
    <h2 style="text-align: center;">"Kami menyediakan solusi pembayaran tagihan listrik yang cepat, aman, dan nyaman. Dengan beberapa klik saja, Anda dapat menyelesaikan pembayaran tagihan listrik Anda kapan saja dan di mana saja."</h2> <br>
    <hr>
    <table class="table table-hover table-borderless">
        <thead>
            <tr>
                <th class="text-center">
                    <h3>Keunggulan Website Ini:</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Mudah Digunakan</h5> Antarmuka yang user-friendly untuk pengalaman pengguna yang optimal.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Aman</h5> Transaksi Anda dilindungi dengan sistem keamanan terbaik.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>Cepat</h5> Proses pembayaran yang cepat tanpa antrian panjang.
                </td>
            </tr>
            <tr>
                <td style="padding: 30px 20px;">
                    <h5>24/7</h5> Layanan tersedia kapan saja, di mana saja.
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
</div>
<!-- home section end -->

<!-- import content price from pages -->
<?= $this->extend('pages/price'); ?>

<?= $this->endSection(); ?>
<!-- ending declare content -->