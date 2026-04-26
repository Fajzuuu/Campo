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
            z-index: 1030;
        }
        .navbar-custom .navbar-brand img {
            height: 35px;
            width: auto; 
            object-fit: contain;
            margin-right: 8px;
        }
        .nav-link, .navbar-brand {
            color: #333 !important;
            font-weight: bold;
        }
        .nav-link.active {
            color: #000 !important;
        }
        /* CSS Khusus Footer */
        .footer-custom {
            background-color: #82c4f5; /* Disamakan dengan warna biru navbar */
            color: white;
            padding: 20px 0;
            font-size: 0.9rem;
            margin-top: 50px;
        }
        .footer-custom a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer-custom a:hover {
            text-decoration: underline;
        }
        .footer-custom .social-icons a {
            color: white;
            font-size: 1.2rem;
            margin-left: 10px;
            text-decoration: none;
        }
        .footer-custom .social-icons a:hover {
            color: #e2e8f0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
                <img src="<?= base_url('gambar/campo logo.png') ?>" alt="Logo Campo">
                <img src="<?= base_url('gambar/campo teks.png') ?>" alt="Campo" width="5px">
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
                        <img src="https://ui-avatars.com/api/?name=User&background=fff&color=000&rounded=true" alt="User" width="35" height="35" class="rounded-circle">
                        <div style="font-size: 0.8rem; font-weight: bold; margin-top: 2px;">User</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer class="footer-custom mt-auto">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            
            <div class="mb-3 mb-md-0 d-flex flex-wrap align-items-center justify-content-center">
                <span class="me-3">&copy; 2026 Campo All Right Reserved</span>
                <a href="#">Privacy Policy</a>
                <a href="#">Legal</a>
            </div>
            
            <div class="d-flex align-items-center">
                <span class="me-3">campo.id</span>
                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>