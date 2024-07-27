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
                <h1 class="mt-4">Data Tagihan Pelanggan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pelanggan Yang Terdaftar Di Database</li>
                </ol>
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Bayar
                    </div>
                    <div class="card-body">
                        <!-- Data table -->
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Role/Group</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($result as $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['username'] ?></td>
                                        <td><?= $value['namalengkap'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['nomorhp'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td><?= $value['group_name'] ?></td>
                                        <td>
                                            <form action="<?= site_url('admin/deleteUser/' . $value['id']) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
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

<?= $this->endSection(); ?>
<!-- End of content section -->

</html>