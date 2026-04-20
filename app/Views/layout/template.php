<?php
$hlm = "Home";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'CAMPO - Booking Lapangan Olahraga'; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        /* CSS Khusus Navbar (Global) */
        .navbar-custom {
            background-color: #82c4f5;
            padding: 0.5rem 0;
        }
        .navbar-custom .navbar-brand img {
            width: 120px;
            height: 60px;
        }
        .nav-link, .navbar-brand {
            color: #333 !important;
            font-weight: bold;
        }
        .nav-link.active {
            color: #000 !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
                <img src="<?= base_url('logo campo.png') ?>" alt="Logo Campo" class="me-2" onerror="this.src='https://ui-avatars.com/api/?name=C&background=random&color=fff&rounded=true'; this.style.width='40px'; this.style.height='40px';">
                campo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link <?= ($uri == '' || $uri == '/') ? 'active' : '' ?>" href="<?= base_url('/') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($uri == 'venue') ? 'active' : '' ?>" href="<?= base_url('venue') ?>">Venue</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($uri == 'masuk') ? 'active' : '' ?>" href="<?= base_url('masuk') ?>">Masuk</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($uri == 'daftar') ? 'active' : '' ?>" href="<?= base_url('daftar') ?>">Daftar</a></li>
                    
                    <li class="nav-item ms-3 text-center">
                        <img src="https://ui-avatars.com/api/?name=Mawar&background=fff&color=000&rounded=true" alt="Mawar" width="35" height="35" class="rounded-circle">
                        <div style="font-size: 0.8rem; font-weight: bold; margin-top: 2px;">Mawar</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>