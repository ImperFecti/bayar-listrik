<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>
<!-- price tags section start -->
<section class="pricing fade-in" id="Tarif">
    <h1>Harga Listrik Per kWh</h1>
    <p>Temukan tarif tagihan listrik yang sesuai dengan kebutuhan Anda. Kami menyediakan list harga sesuai dengan tarif per kWh di tahun 2024 ini.</p>
    <a class="button-79" role="button" href="/kalkulator">Hitung Tarif Listrik per kWh</a>
    <br><br>
    <div class="plans">
        <div class="plan">
            <h2>R2/450VA</h2>
            <p class="price">Rp.750<span>/Bulan</span></p>
            <p><b>R2:</b> Golongan untuk rumah tangga tetapi dengan daya yang lebih besar dibandingkan R1 dengan tarif <b>Rp.750/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>R3/450VA</h2>
            <p class="price">Rp.1.000<span>/Bulan</span></p>
            <p><b>R3:</b> Golongan ini untuk rumah tangga besar dengan daya listrik yang lebih tinggi dengan tarif <b>Rp.1.000/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>R1/450VA</h2>
            <p class="price">Rp.1.000<span>/Bulan</span></p>
            <p><b>R1:</b> Golongan untuk rumah tangga kecil dengan daya listrik yang rendah dengan tarif <b>Rp.1.000/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>R3/900VA</h2>
            <p class="price">Rp.1.400<span>/Bulan</span></p>
            <p><b>R3:</b> Golongan ini untuk rumah tangga besar dengan daya listrik yang lebih tinggi dengan tarif <b>Rp.1.400/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>R1/900VA</h2>
            <p class="price">Rp.1.500<span>/Bulan</span></p>
            <p><b>R1:</b> Golongan untuk rumah tangga kecil dengan daya listrik yang rendah dengan tarif <b>Rp.1.500/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>R2/900VA</h2>
            <p class="price">Rp.1.500<span>/Bulan</span></p>
            <p> <b>R2:</b> Golongan ini juga untuk rumah tangga, tetapi dengan daya yang lebih besar dibandingkan R1 dengan tarif <b>Rp.1.500/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>R3/1300VA</h2>
            <p class="price">Rp.1.500<span>/Bulan</span></p>
            <p><b>R3:</b> Golongan ini untuk rumah tangga besar dengan daya listrik yang lebih tinggi dengan tarif <b>Rp.1.500/kWh.</b></p>
        </div>
        <div class="plan">
            <h2>B1/1500VA</h2>
            <p class="price">Rp.2.000<span>/Bulan</span></p>
            <p> <b>B1:</b> Golongan ini untuk bisnis atau komersial dengan daya listrik yang cukup besar dengan tarif <b>Rp.2.000/kWh</b></p>
        </div>
    </div>
</section>

<div class="contact fade-in" id="Contact">
    <div class="contact-header">
        <h2>Ada Pertanyaan ?</h2>
        <p>Bila anda memiliki pertanyaan silahkan untuk menghubungi admin di bawah ini.</p>
    </div>
    <div class="contact-grid">
        <div class="contact-card fade-in">
            <h3>Admin 1</h3>
            <a href="mailto:admin1@example.com">admin1@example.com</a>
            <p>(+62) 091 2890 7774</p>
        </div>
        <div class="contact-card fade-in">
            <h3>Admin 2</h3>
            <a href="mailto:admin2@example.com">admin2@example.com</a>
            <p>(+62) 612 1827 0097</p>
        </div>
    </div>
</div>
<!-- price tags section end -->
<?= $this->endSection(); ?>
<!-- ending declare content -->