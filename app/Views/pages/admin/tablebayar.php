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
                <h1 class="mt-4">Tagihan Pelanggan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">List Tagihan Listrik Pelanggan</li>
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
                        <i class="fas fa-table me-1"></i>
                        Data Tagihan
                    </div>
                    <div class="card-body">
                        <!-- Data table -->
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pelanggan</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Meter Awal</th>
                                    <th>Meter Akhir</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through each bill and display its data -->
                                <?php $no = 1;
                                foreach ($result as $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['id_users'] ?></td>
                                        <td><?= $value['bulan'] ?></td>
                                        <td><?= $value['tahun'] ?></td>
                                        <td><?= $value['meter_awal'] ?></td>
                                        <td><?= $value['meter_akhir'] ?></td>
                                        <td>
                                            <!-- Form to delete bill -->
                                            <form action="<?= site_url('admin/deleteBayar/' . $value['id']) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data tagihan ini?')">Delete</button>
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