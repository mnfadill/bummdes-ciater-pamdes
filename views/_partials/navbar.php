<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">BumDes Ciater</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= $data == 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa--alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= $data == 'profile' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('profile') ?>">
            <i class="fas fa-fw fa--alt"></i>
            <span>Profile Desa</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Tagihan Pembayaran PamDes
    </div>

    <li class="nav-item <?= $data == 'merk' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('merk') ?>">
            </i>
            <span>Data Nama Tagihan
            </span>
        </a>
    </li>
    <li class="nav-item <?= $data == 'mobil' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('mobil') ?>">

            <span>Data Tagihan Masyarakat</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Data Bayar
    </div>

    <li class="nav-item <?= $data == 'pemesan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('pemesan') ?>">

            <span>Data Pembayaran</span>
        </a>
    </li>
    <!-- <li class="nav-item <?= $data == 'jenis_bayar' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('jenis_bayar') ?>">

            <span>Data Jenis Bayar</span>
        </a>
    </li> -->

    <!-- <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Master Pesanan
    </div>

    <li class="nav-item <?= $data == 'perjalanan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('perjalanan') ?>">

            <span>Data Perjalanan</span>
        </a>
    </li>
    <li class="nav-item <?= $data == 'pesanan' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('pesanan') ?>">

            <span>Data Pesanan</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Pengaturan
    </div> -->

    <li class="nav-item <?= $data == 'akun' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('akun') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manajemen Akun</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>