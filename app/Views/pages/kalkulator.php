<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>
<!-- form kalkulator start -->
<div class="body-calc">
    <section class="calculator">
        <h1>Kalkulator Hitung Listrik per kWh</h1>
        <form id="calculator-form">
            <!-- Input Pemakaian Harian -->
            <div class="input-group">
                <label for="daily-usage">Pemakaian Harian:</label>
                <input type="number" id="daily-usage" placeholder="Masukkan pemakaian harian" required min="1">
                <span>: 1000 = <span id="daily-kwh">0</span> kWh </span>
            </div>
            <!-- Dropdown Pilih Golongan Listrik -->
            <div class="input-group">
                <label for="golongan">Pilih Golongan Listrik:</label>
                <select id="golongan" required>
                    <option value="" disabled selected>Pilih Golongan Listrik</option>
                    <option value="750">R2/450VA - Rp. 750 per kWh</option>
                    <option value="1000">R3/450VA - Rp. 1000 per kWh</option>
                    <option value="1000">R1/450VA - Rp. 1000 per kWh</option>
                    <option value="1400">R3/900VA - Rp. 1400 per kWh</option>
                    <option value="1500">R1/900VA - Rp. 1500 per kWh</option>
                    <option value="1500">R2/900VA - Rp. 1500 per kWh</option>
                    <option value="1500">R3/1300VA - Rp. 1500 per kWh</option>
                    <option value="2000">B1/1500VA - Rp. 2000 per kWh</option>
                </select>
            </div>
            <!-- Daily Usage -->
            <div class="input-group">
                <label for="tariff">Tarif Pemakaian Harian:</label>
                <input type="text" id="daily-tariff" value="Rp. 0" readonly>
            </div>
            <!-- Calculator Buttons -->
            <button type="button" id="calculate-btn">Mulai Hitung</button>
            <button type="button" id="reset-btn">Reset</button>
            <hr>
            <!-- Monthly Usage Result -->
            <p>Tarif Pemakaian Bulanan:</p>
            <h1 id="monthly-tariff">Rp. 0</h1>
        </form>
    </section>
</div>
<!-- form kalkulator end -->
<?= $this->endSection(); ?>
<!-- ending declare content -->