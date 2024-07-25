<!-- import layout template -->
<?= $this->extend('layout/adminlayout/bsadmintemplate'); ?>

<!-- declare content -->
<?= $this->section('content'); ?>
<div id="layoutSidenav">

    <?= $this->include('layout/adminlayout/sidenavadmin'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Pelanggan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Informasi Pribadi Data Pelanggan</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Pelanggan
                    </div>
                    <div class="card-body">
                        <?php echo $result->output; ?>
                    </div>
                </div>
            </div>
        </main>

        <!-- import admin footer -->
        <?= $this->include('layout/adminlayout/adminfooter'); ?>

    </div>
</div>

<?= $this->endSection(); ?>
<!-- ending declare content -->

</html>