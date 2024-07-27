<!-- import layout template -->
<?= $this->extend('adminlayout/template'); ?>

<!-- declare content section -->
<?= $this->section('content'); ?>
<div id="layoutSidenav">

    <!-- include the sidenav admin layout -->
    <?= $this->include('adminlayout/sidenav'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <!-- page heading -->
                <h1 class="mt-4">Dashboard</h1>
                <!-- breadcrumb navigation -->
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Selamat datang kembali, <b><?= $result->username ?></b> !!</li>
                </ol>
                <hr>
                <!-- Content from the provided image -->
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="card dashboard h-100">
                            <a href="/tableuser" class="custom-link">
                                <div class="card-body text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                    <h5 class="card-title">Data Pelanggan</h5>
                                    <p class="card-text">Mengatur Data Pelanggan Yang Terdaftar</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card dashboard h-100">
                            <a href="/tablebayar" class="custom-link">
                                <div class="card-body text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                                    </svg>
                                    <h5 class="card-title">Data Tagihan</h5>
                                    <p class="card-text">Mengatur Data Tagihan Listrik Milik Pelanggan</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- include the admin footer layout -->
        <?= $this->include('adminlayout/footer'); ?>

    </div>
</div>

<!-- end content section -->
<?= $this->endSection(); ?>

</html>