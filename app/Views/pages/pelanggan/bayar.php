<!-- Import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- Declare content -->
<?= $this->section('content'); ?>

<!-- Container for the payment form -->
<div class="container rounded bg-white mt-5 mb-5 fade-in">
    <div class="row justify-content-center">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <!-- Header for the payment form -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Bayar Tagihan Listrik</h4>
                </div>
                <!-- Payment form -->
                <form action="/bayar/<?= $result->id ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="row mt-2">
                        <!-- Input for the initial meter reading -->
                        <div class="col-md-6">
                            <label class="labels">Meter Awal</label>
                            <input type="text" class="form-control" name="meter_awal" placeholder="" value="">
                        </div>
                        <!-- Input for the final meter reading -->
                        <div class="col-md-6">
                            <label class="labels">Meter Akhir</label>
                            <input type="text" class="form-control" name="meter_akhir" placeholder="" value="">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <!-- Display the kWh number (readonly) -->
                        <div class="col-md-12">
                            <label class="labels">Nomor kWh</label>
                            <input type="number" class="form-control" name="nomorkwh" placeholder="" value="<?= $result->nomorkwh ?>" readonly>
                        </div>
                        <!-- Input for the billing month -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Bulan</label>
                            <input type="text" class="form-control" name="bulan" placeholder="" value="">
                        </div>
                        <!-- Input for the billing year -->
                        <div class="col-md-12 mt-3">
                            <label class="labels">Tahun</label>
                            <input type="number" class="form-control" name="tahun" placeholder="" value="">
                        </div>
                    </div>
                    <!-- Submit button for the payment form -->
                    <button type="button" class="btn btn-primary mt-5 text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Bayar Tagihan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin membuat tagihan listrik ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary profile-button">Konfirmasi</button>
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
<!-- End of content declaration -->