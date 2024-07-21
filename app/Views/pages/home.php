<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>
<!-- landing page start -->
<div class="container-lg" id="Home">
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
</div>
<!-- landing page end -->

<?= $this->extend('pages/price'); ?>


<?= $this->endSection(); ?>
<!-- ending declare content -->