<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>

<div class="card fade-in">
    <div class="card-body">
        <div class="container mb-5 mt-3">
            <div class="row d-flex align-items-baseline">
                <div class="col-xl-9">
                    <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #123-123</strong></p>
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
                            <li class="text-muted">To: <span style="color:#5d9fc5 ;"><?= $result->namalengkap ?></span></li>
                            <li class="text-muted"><i class="fas fa-phone"></i><?= $result->nomorhp ?></li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <p class="text-muted">Invoice</p>
                        <ul class="list-unstyled">
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">ID:</span>#123-456</li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span class="fw-bold">Creation Date: </span>Jun 23,2021</li>
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
                                <th scope="col">Tahun Price</th>
                                <th scope="col">Jumlah Meter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tagihan listrik R2/450VA - Rp. 750 per kWh </td>
                                <td>Januari</td>
                                <td>2024</td>
                                <td>11500</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <p class="ms-3">Tagihan Listrik Bulan 4 Tahun 2024 Listrik Golongan R2/450VA - Rp. 750 per kWh</p>

                    </div>
                    <div class="col-xl-3">
                        <ul class="list-unstyled">
                            <li class="text-muted ms-3"><span class="text-black me-4">Meter Awal</span>12000</li>
                            <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Meter Akhir</span>23500</li>
                        </ul>
                        <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span style="font-size: 25px;">Rp. 200.000</span></p>
                    </div>
                </div>
                <hr>
                <div class="col-xl-2">
                    <button type="button" class="btn btn-primary text-capitalize" style="background-color:#60bdf3 ;">Pay Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- ending declare content -->