<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="username" value=""></div>
                    <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" value="" placeholder="nama lengkap"></div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nomor Handphone</label><input type="text" class="form-control" placeholder="masukkan nomor hp" value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">Alamat Rumah</label><input type="text" class="form-control" placeholder="masukkan alamat rumah" value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="text" class="form-control" placeholder="masukkan alamat email" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="input-group">
                        <label for="golongan">Pilih Golongan Listrik:</label>
                        <select id="golongan">
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
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection(); ?>
<!-- ending declare content -->