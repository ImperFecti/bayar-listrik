<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="card fade-in">
    <div class="card-body">
        <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
                <div class="col-xl-9">
                    <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #<?= esc($tagihan->id) ?></strong></p>
                </div>
                <hr>
            </div>

            <div class="container">
                <div class="col-md-12">
                    <div class="text-center">
                        <img src="https://info-ambon.com/wp-content/uploads/2019/07/LOGO-PLN.png" alt="PLN Logo" draggable="false" height="50" />
                        <p class="pt-0">APLIKASI PEMBAYARAN LISTRIK PASCABAYAR</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <ul class="list-unstyled">
                            <li class="text-muted">To: <span style="color:#5d9fc5 ;"><?= esc($result->namalengkap) ?></span></li>
                            <li class="text-muted"><i class="fas fa-phone"></i> <?= esc($result->nomorhp) ?></li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <p class="text-muted">Invoice</p>
                        <ul class="list-unstyled">
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">ID:</span>#<?= esc($tagihan->id) ?></li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Creation Date: </span><?= esc($tagihan->tahun) ?></li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">Unpaid</span></li>
                        </ul>
                    </div>
                </div>

                <div class="row my-2 mx-1 justify-content-center">
                    <table class="table table-striped table-borderless">
                        <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Jumlah Meter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tagihan listrik <?= esc($tagihan->golongan) ?>/<?= esc($tagihan->daya) ?>VA - Rp. <?= esc($tagihan->tarifperkwh) ?> per kWh </td>
                                <td><?= esc($tagihan->bulan) ?></td>
                                <td><?= esc($tagihan->tahun) ?></td>
                                <td><?= esc($tagihan->meter_akhir - $tagihan->meter_awal) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <p class="ms-3">Tagihan Listrik Bulan <?= esc($tagihan->bulan) ?> Tahun <?= esc($tagihan->tahun) ?> Listrik Golongan <?= esc($tagihan->golongan) ?>/<?= esc($tagihan->daya) ?>VA - Rp. <?= esc($tagihan->tarifperkwh) ?> per kWh</p>
                    </div>
                    <div class="col-xl-3">
                        <ul class="list-unstyled">
                            <li class="text-muted ms-3"><span class="text-black me-4">Meter Awal</span><?= esc($tagihan->meter_awal) ?></li>
                            <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Meter Akhir</span><?= esc($tagihan->meter_akhir) ?></li>
                        </ul>
                        <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span style="font-size: 25px;">Rp. <?= ($tagihan->meter_akhir - $tagihan->meter_awal) * $tagihan->tarifperkwh; ?></span></p>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-xl-10">
                        <p>Terima Kasih Telah Melakukan Pembayaran Listrik di Aplikasi Pembayaran Listrik Pascabayar</p>
                    </div>
                    <div class="col-xl-2">
                        <button type="button" class="btn btn-primary text-capitalize" data-bs-toggle="modal" data-bs-target="#uploadModal">Pay Now</button>
                    </div>
                </div>
                <!-- Modal for Uploading Proof of Payment -->
                <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="uploadModalLabel">Upload Bukti Pembayaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('pelanggan/uploadbukti/' . $tagihan->id) ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="mb-3">
                                        <label for="buktiPembayaran" class="form-label">Pilih Gambar Bukti Pembayaran</label>
                                        <input class="form-control" type="file" id="buktiPembayaran" name="bukti_pembayaran" accept="image/*" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>