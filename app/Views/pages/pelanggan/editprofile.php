<?= $this->extend('layout/template'); ?>

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
                            <input type="text" class="form-control" name="username" value="<?= $result->username ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Nama</label>
                            <input type="text" class="form-control" name="namalengkap" value="<?= $result->namalengkap ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nomor Handphone</label>
                            <input type="number" class="form-control" name="nomorhp" value="<?= $result->nomorhp ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Alamat Rumah</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $result->alamat ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Nomor kWh</label>
                            <input type="number" class="form-control" name="nomorkwh" value="<?= $result->nomorkwh ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $result->email ?>">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Golongan Listrik</label>
                            <select class="form-control" name="id_tarif">
                                <?php foreach ($tarif as $t) : ?>
                                    <option value="<?= $t['id'] ?>" <?= $result->id_tarif == $t['id'] ? 'selected' : '' ?>>
                                        <?= $t['golongan'] ?> - <?= $t['daya'] ?> - <?= $t['tarifperkwh'] ?> per kWh
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editprofileModal">Save Profile</button>
                    </div>
                    <div class="modal fade" id="editprofileModal" tabindex="-1" aria-labelledby="editprofileModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editprofileModalLabel">Konfirmasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin merubah data pribadi anda dengan yang baru?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary profile-button">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>