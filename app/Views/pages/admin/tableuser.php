<!-- Import layout template -->
<?= $this->extend('layout/adminlayout/bsadmintemplate'); ?>

<!-- Declare content section -->
<?= $this->section('content'); ?>
<div id="layoutSidenav">

    <!-- Include the sidebar for admin layout -->
    <?= $this->include('layout/adminlayout/sidenavadmin'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Customer Data</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Personal Information of Customer Data</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Customer Data
                    </div>
                    <div class="card-body">
                        <!-- Data table -->
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($result as $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['username'] ?></td>
                                        <td><?= $value['namalengkap'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['nomorhp'] ?></td>
                                        <td><?= $value['alamat'] ?></td>
                                        <td></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <!-- Import admin footer -->
        <?= $this->include('layout/adminlayout/adminfooter'); ?>

    </div>
</div>

<?= $this->endSection(); ?>
<!-- End of content section -->

</html>