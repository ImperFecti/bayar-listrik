<!-- Import layout template -->
<?= $this->extend('adminlayout/template'); ?>

<!-- Declare content section -->
<?= $this->section('content'); ?>
<div id="layoutSidenav">

    <!-- Include the sidebar for admin layout -->
    <?= $this->include('adminlayout/sidenav'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Akun Pelanggan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pelanggan Yang Terdaftar Di Database</li>
                </ol>
                <!-- Display success message if exists -->
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>
                <!-- Display error message if exists -->
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Data Bayar
                            </div>
                            <div>
                                <!-- Add User Button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Data table -->
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Role/Group</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through each user and display their data -->
                                <?php $no = 1;
                                foreach ($result as $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->username ?></td>
                                        <td><?= $value->namalengkap ?></td>
                                        <td><?= $value->email ?></td>
                                        <td><?= $value->nomorhp ?></td>
                                        <td><?= $value->alamat ?></td>
                                        <td><?= $value->group_name ?></td>
                                        <td>
                                            <!-- Form to delete user -->
                                            <form action="<?= site_url('admin/deleteUser/' . $value->id) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                                            </form>
                                            <!-- Edit button -->
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal<?= $value->id ?>">
                                                Ubah
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Edit User Modal -->
                                    <div class="modal fade" id="editUserModal<?= $value->id ?>" tabindex="-1" aria-labelledby="editUserModalLabel<?= $value->id ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="<?= site_url('admin/ubahpelanggan/' . $value->id) ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editUserModalLabel<?= $value->id ?>">Ubah Data User</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="username<?= $value->id ?>" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="username<?= $value->id ?>" name="username" value="<?= $value->username ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="namalengkap<?= $value->id ?>" class="form-label">Nama Lengkap</label>
                                                            <input type="text" class="form-control" id="namalengkap<?= $value->id ?>" name="namalengkap" value="<?= $value->namalengkap ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email<?= $value->id ?>" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email<?= $value->id ?>" name="email" value="<?= $value->email ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nomorhp<?= $value->id ?>" class="form-label">Nomor HP</label>
                                                            <input type="text" class="form-control" id="nomorhp<?= $value->id ?>" name="nomorhp" value="<?= $value->nomorhp ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="alamat<?= $value->id ?>" class="form-label">Alamat</label>
                                                            <input type="text" class="form-control" id="alamat<?= $value->id ?>" name="alamat" value="<?= $value->alamat ?>" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Import admin footer -->
        <?= $this->include('adminlayout/footer'); ?>

    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= site_url('admin/tambahpelanggan') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Tambah User Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namalengkap" name="namalengkap">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorhp" class="form-label">Nomor HP</label>
                        <input type="number" class="form-control" id="nomorhp" name="nomorhp">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="group_name" class="form-label">Role/Group</label>
                        <input type="text" class="form-control" id="group_name" name="group_name" required>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- End of content section -->

</html>