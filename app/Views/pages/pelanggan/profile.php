<!-- Import layout template -->
<?= $this->extend('layout/template'); ?>

<!-- Declare content section -->
<?= $this->section('content'); ?>

<!-- Profile page section -->
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <!-- Alert -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('warning')) : ?>
            <div class="alert alert-warning" role="alert">
                <?= session()->getFlashdata('warning') ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <!-- End Alert -->
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <!-- User profile card -->
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <!-- Profile picture and basic info -->
                        <div class="col-md-4 gradient-custom text-center text-white d-flex flex-column justify-content-center align-items-center" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <h3 class="mt-5"><?= $result->namalengkap ?></h3>
                            <p><?= $result->username ?></p>
                            <!-- Edit profile link with an icon -->
                            <a href="/editprofile" class="custom-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                </svg>
                            </a>
                        </div>
                        <!-- User details -->
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6>Profile Pelanggan</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <!-- Email information -->
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>
                                        <p class="text-muted"><?= $result->email ?></p>
                                    </div>
                                    <!-- Phone number information -->
                                    <div class="col-6 mb-3">
                                        <h6>Nomor Handphone</h6>
                                        <p class="text-muted"><?= $result->nomorhp ?></p>
                                    </div>
                                    <!-- kWh number information -->
                                    <div class="col-6 mb-3">
                                        <h6>Nomor kWh</h6>
                                        <p class="text-muted"><?= $result->nomorkwh ?></p>
                                    </div>
                                    <!-- Address information -->
                                    <div class="col-6 mb-3">
                                        <h6>Alamat Rumah</h6>
                                        <p class="text-muted"><?= $result->alamat ?></p>
                                    </div>
                                </div>
                                <h6>Status Listrik Rumah</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <!-- Electrical classification information -->
                                    <div class="col-6 mb-3">
                                        <h6>Golongan Listrik Rumah</h6>
                                        <p class="text-muted">R2/450VA</p>
                                    </div>
                                    <!-- Payment status information -->
                                    <div class="col-6 mb-3">
                                        <h6>Status pembayaran</h6>
                                        <p class="text-muted">Terbayarkan Bulan Juni</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
<!-- End of content section -->