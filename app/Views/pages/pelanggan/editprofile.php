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
                <form action="/updateprofile/<?= user_id() ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="" value="<?= $result['username'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Nama</label>
                            <input type="text" class="form-control" name="namalengkap" placeholder="" value="<?= $result['namalengkap'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nomor Handphone</label>
                            <input type="number" class="form-control" name="nomorhp" placeholder="" value="<?= $result['nomorhp'] ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Alamat Rumah</label>
                            <input type="text" class="form-control" name="alamat" placeholder="" value="<?= $result['alamat'] ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Nomor kWh</label>
                            <input type="number" class="form-control" name="nomorkwh" placeholder="" value="<?= $result['nomorkwh'] ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="" value="<?= $result['email'] ?>">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- ending declare content -->