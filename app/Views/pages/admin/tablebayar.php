<?= $this->extend('adminlayout/template'); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav">
    <?= $this->include('adminlayout/sidenav'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tagihan Pelanggan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">List Tagihan Listrik Pelanggan</li>
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
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-table me-1"></i>
                                Data Pembayaran
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">
                                    Tambah Tagihan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
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
                                <?php $no = 1;
                                foreach ($result as $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->id_users ?></td>
                                        <td><?= $value->bulan ?></td>
                                        <td><?= $value->tahun ?></td>
                                        <td><?= $value->meter_awal ?></td>
                                        <td><?= $value->meter_akhir ?></td>
                                        <td>
                                            <form action="<?= site_url('admin/deleteBayar/' . $value->id) ?>" method="post" style="display:inline;">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data tagihan ini?')">Delete</button>
                                            </form>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDataModal<?= $value->id ?>">
                                                Ubah
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Edit Data Modal -->
                                    <div class="modal fade" id="editDataModal<?= $value->id ?>" tabindex="-1" aria-labelledby="editDataModalLabel<?= $value->id ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="<?= site_url('admin/ubahbayar/' . $value->id) ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editDataModalLabel<?= $value->id ?>">Ubah Data Tagihan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="id_users" class="form-label">ID Pelanggan</label>
                                                            <input type="text" class="form-control" id="id_users" name="id_users" value="<?= $value->id_users ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="bulan" class="form-label">Bulan</label>
                                                            <input type="text" class="form-control" id="bulan" name="bulan" value="<?= $value->bulan ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tahun" class="form-label">Tahun</label>
                                                            <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $value->tahun ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="meter_awal" class="form-label">Meter Awal</label>
                                                            <input type="text" class="form-control" id="meter_awal" name="meter_awal" value="<?= $value->meter_awal ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="meter_akhir" class="form-label">Meter Akhir</label>
                                                            <input type="text" class="form-control" id="meter_akhir" name="meter_akhir" value="<?= $value->meter_akhir ?>" required>
                                                        </div>
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
        <?= $this->include('adminlayout/footer'); ?>
    </div>
</div>

<!-- Add Data Modal -->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= site_url('admin/tambahbayar') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data Tagihan Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="id_users" class="form-label">ID Pelanggan</label>
                        <input type="text" class="form-control" id="id_users" name="id_users" required>
                    </div>
                    <div class="mb-3">
                        <label for="bulan" class="form-label">Bulan</label>
                        <input type="text" class="form-control" id="bulan" name="bulan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" required>
                    </div>
                    <div class="mb-3">
                        <label for="meter_awal" class="form-label">Meter Awal</label>
                        <input type="text" class="form-control" id="meter_awal" name="meter_awal" required>
                    </div>
                    <div class="mb-3">
                        <label for="meter_akhir" class="form-label">Meter Akhir</label>
                        <input type="text" class="form-control" id="meter_akhir" name="meter_akhir" required>
                    </div>
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