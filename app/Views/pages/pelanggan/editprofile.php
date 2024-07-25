<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border-right">
            <!-- Alert -->
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('warning')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('warning') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <!-- End Alert -->
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="/updateprofile" method="POST">
                    <?= csrf_field() ?>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="<?= esc($user->username) ?>" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Nama</label>
                            <input type="text" class="form-control" name="namalengkap" placeholder="<?= esc($user->namalengkap) ?>" value="">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nomor Handphone</label>
                            <input type="text" class="form-control" name="nomorhp" placeholder="<?= esc($user->nomorhp) ?>" value="">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Alamat Rumah</label>
                            <input type="text" class="form-control" name="alamat" placeholder="<?= esc($user->alamat) ?>" value="">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="<?= esc($user->email) ?>" value="">
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