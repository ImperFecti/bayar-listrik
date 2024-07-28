<!-- Import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- Declare content -->
<?= $this->section('content'); ?>

<!-- Container for the profile settings form -->
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <!-- Header for the profile settings form -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <!-- Profile settings form -->
                <form action="/updateprofile/<?= user_id() ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="row mt-2">
                        <!-- Input for username -->
                        <div class="col-md-6">
                            <label class="labels">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="" value="<?= $result['username'] ?>">
                        </div>
                        <!-- Input for full name -->
                        <div class="col-md-6">
                            <label class="labels">Nama</label>
                            <input type="text" class="form-control" name="namalengkap" placeholder="" value="<?= $result['namalengkap'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <!-- Input for phone number -->
                        <div class="col-md-12">
                            <label class="labels">Nomor Handphone</label>
                            <input type="number" class="form-control" name="nomorhp" placeholder="" value="<?= $result['nomorhp'] ?>">
                        </div>
                        <!-- Input for home address -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Alamat Rumah</label>
                            <input type="text" class="form-control" name="alamat" placeholder="" value="<?= $result['alamat'] ?>">
                        </div>
                        <!-- Input for kWh number -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Nomor kWh</label>
                            <input type="number" class="form-control" name="nomorkwh" placeholder="" value="<?= $result['nomorkwh'] ?>">
                        </div>
                        <!-- Input for email -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="" value="<?= $result['email'] ?>">
                        </div>
                    </div>
                    <!-- Submit button for the profile settings form -->
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- End of content declaration -->