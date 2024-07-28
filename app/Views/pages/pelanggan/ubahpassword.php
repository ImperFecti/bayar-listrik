<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <!-- Section header -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Ubah Password</h4>
                </div>
                <!-- Password update form -->
                <form action="/updatepassword/<?= user_id() ?>" method="POST">
                    <!-- CSRF protection -->
                    <?= csrf_field() ?>
                    <div class="row mt-3">
                        <!-- Old password input -->
                        <div class="col-md-12">
                            <label class="labels">Password Lama</label>
                            <input type="password" class="form-control" name="password" placeholder="" value="">
                        </div>
                        <!-- New password input -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Password Baru</label>
                            <input type="password" class="form-control" name="new_password" placeholder="" value="">
                        </div>
                        <!-- Confirm new password input -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" name="confirm_password" placeholder="" value="">
                        </div>
                    </div>
                    <!-- Submit button -->
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