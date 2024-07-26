<!-- import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Bayar Tagihan Listrik</h4>
                </div>
                <form action="/bayar/<?= $result->id ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Meter Awal</label>
                            <input type="text" class="form-control" name="meter_awal" placeholder="" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Meter Akhir</label>
                            <input type="text" class="form-control" name="meter_akhir" placeholder="" value="">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nomor kWh</label>
                            <input type="number" class="form-control" name="nomorkwh" placeholder="" value="<?= $result->nomorkwh ?>" readonly>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Bulan</label>
                            <input type="text" class="form-control" name="bulan" placeholder="" value="">
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="labels">Tahun</label>
                            <input type="number" class="form-control" name="tahun" placeholder="" value="">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<!-- ending declare content -->