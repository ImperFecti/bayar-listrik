<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="tagihan-body">
    <h1 class="">Tagihan Listrik</h1>
    <!-- Header Tabel -->
    <table class="table table-laporan table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Meter Awal</th>
                <th>Meter Akhir</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($tagihan) && is_array($tagihan)) : ?>
                <?php foreach ($tagihan as $index => $row) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $row->bulan ?></td>
                        <td><?= $row->tahun ?></td>
                        <td><?= $row->meter_awal ?></td>
                        <td><?= $row->meter_akhir ?></td>
                        <td>
                            <a href="<?= site_url('/buktitagihan/' . $row->id) ?>" class="btn btn-info">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">No data available</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>