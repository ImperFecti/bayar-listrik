<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Brand/logo and website name -->
        <a class="navbar-brand" href="/">
            <img src="https://info-ambon.com/wp-content/uploads/2019/07/LOGO-PLN.png" alt="PLN Logo" draggable="false" height="30" />
        </a>
        WEBSITE BAYAR LISTRIK ONLINE

        <!-- Toggler button for responsive navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Admin link visible to users in the 'admin' group -->
                <?php if (in_groups("admin")) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                <?php endif; ?>

                <!-- Home page link -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <!-- Tariff page link -->
                <li class="nav-item">
                    <a class="nav-link" href="/price">Tarif per kWh</a>
                </li>

                <!-- Calculator page link -->
                <li class="nav-item">
                    <a class="nav-link" href="/kalkulator">Kalkulator Listrik</a>
                </li>

                <!-- Electricity bill link visible to users in the 'pelanggan' group -->
                <?php if (in_groups("pelanggan")) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/tagihanlistrik">Tagihan Listrik</a>
                    </li>
                <?php endif; ?>

                <!-- Payment page link visible to users in the 'pelanggan' group -->
                <?php if (in_groups("pelanggan")) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/bayarlistrik">Bayar Tagihan</a>
                    </li>
                <?php endif; ?>

                <!-- User dropdown menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- User icon from Bootstrap -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>

                    <!-- Dropdown menu items -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <?php if (logged_in()) : ?>
                            <!-- Links for logged-in users -->
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/editprofile">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="/ubahpassword">Ubah Password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        <?php else : ?>
                            <!-- Links for users not logged in -->
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href="/register">Register</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->