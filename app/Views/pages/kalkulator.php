<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>
<!-- form kalkulator start -->
<div class="body-calc fade-in">
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
            <div class="button-group">
                <button type="button" id="calculate-btn">Mulai Hitung</button>
                <button type="button" id="reset-btn">Reset</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" id="modal-btn" data-bs-toggle="modal" data-bs-target="#caraHitung">Cara Hitung Tarif</button>
            </div>
            <hr>
            <!-- Monthly Usage Result -->
            <p>Tarif Pemakaian Bulanan:</p>
            <h1 id="monthly-tariff">Rp. 0</h1>
        </form>
    </section>
</div>
<!-- form kalkulator end -->

<!-- Modal -->
<div class="modal fade" id="caraHitung" tabindex="-1" aria-labelledby="caraHitungLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="caraHitungLabel">Cara Menghitung Tarif Listrik</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2>Langkah-langkah Menghitung Tarif Listrik</h2>
                <ol>
                    <li>
                        <strong>Tentukan Pemakaian Harian:</strong><br>
                        Masukkan pemakaian harian listrik Anda dalam satuan watt. Contohnya, jika Anda menggunakan 1000 watt per hari, masukkan angka tersebut pada kolom pemakaian harian.
                    </li>
                    <li>
                        <strong>Konversi ke kWh:</strong><br>
                        Karena tarif listrik dihitung berdasarkan kilowatt-jam (kWh), Anda perlu mengonversi pemakaian harian dari watt ke kWh. Caranya adalah dengan membagi pemakaian harian (dalam watt) dengan 1000. Contohnya, jika pemakaian harian Anda adalah 1000 watt, maka pemakaian harian dalam kWh adalah 1000 / 1000 = 1 kWh.
                    </li>
                    <li>
                        <strong>Pilih Golongan Listrik:</strong><br>
                        Pilih golongan listrik Anda dari dropdown yang tersedia. Setiap golongan memiliki tarif per kWh yang berbeda-beda. Contohnya, jika Anda memilih golongan R2/450VA, maka tarif per kWh adalah Rp. 750.
                    </li>
                    <li>
                        <strong>Hitung Tarif Pemakaian Harian:</strong><br>
                        Setelah memilih golongan listrik, kalikan pemakaian harian dalam kWh dengan tarif per kWh dari golongan tersebut. Contohnya, jika pemakaian harian Anda adalah 1 kWh dan tarif golongan R2/450VA adalah Rp. 750 per kWh, maka tarif pemakaian harian Anda adalah 1 x 750 = Rp. 750.
                    </li>
                    <li>
                        <strong>Hitung Tarif Pemakaian Bulanan:</strong><br>
                        Untuk menghitung tarif pemakaian bulanan, kalikan tarif pemakaian harian dengan jumlah hari dalam satu bulan (biasanya 30 hari). Contohnya, jika tarif pemakaian harian Anda adalah Rp. 750, maka tarif pemakaian bulanan Anda adalah 750 x 30 = Rp. 22.500.
                    </li>
                </ol>
                <h2>Contoh Perhitungan</h2>
                <p>
                    Misalkan Anda menggunakan 1000 watt listrik setiap hari dan termasuk dalam golongan R2/450VA dengan tarif Rp. 750 per kWh.
                </p>
                <ul>
                    <li>Pemakaian harian: 1000 watt</li>
                    <li>Pemakaian harian dalam kWh: 1000 / 1000 = 1 kWh</li>
                    <li>Tarif per kWh untuk golongan R2/450VA: Rp. 750</li>
                    <li>Tarif pemakaian harian: 1 kWh x Rp. 750 = Rp. 750</li>
                    <li>Tarif pemakaian bulanan: Rp. 750 x 30 hari = Rp. 22.500</li>
                </ul>
                <p>
                    Dengan menggunakan langkah-langkah di atas, Anda dapat dengan mudah menghitung berapa biaya listrik bulanan Anda berdasarkan pemakaian harian dan golongan listrik Anda.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- ending declare content -->