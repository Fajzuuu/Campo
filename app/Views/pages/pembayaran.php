<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Mengubah warna background khusus halaman ini agar mirip desain */
    body {
        background-color: #f2f5f8; 
    }

    /* Menyembunyikan menu navbar agar user fokus bayar (seperti di desain) */
    .navbar-nav {
        display: none !important;
    }

    .payment-wrapper {
        padding: 40px 0 80px 0;
    }

    /* Style untuk baris input data (Bentuk kapsul/pill) */
    .data-row {
        background-color: #ffffff;
        border-radius: 50px;
        padding: 12px 25px;
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        border: 1px solid #eaeaea;
    }
    
    .data-row .label {
        color: #8c98a4;
        font-size: 0.95rem;
    }

    .data-row .val-input {
        border: none;
        text-align: right;
        background: transparent;
        outline: none;
        color: #4a5568;
        font-weight: 500;
        width: 60%;
    }
    
    /* Menghilangkan panah pada input number jika ada */
    .data-row .val-input::-webkit-outer-spin-button,
    .data-row .val-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Tombol Bayar */
    .btn-bayar {
        background-color: #70bdeb;
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        padding: 12px 40px;
        border-radius: 30px;
        border: none;
        width: 100%;
        max-width: 300px;
        margin-top: 20px;
        transition: all 0.3s;
    }
    .btn-bayar:hover {
        background-color: #5baae0;
        color: white;
    }

    /* Bagian Kanan (Ringkasan) */
    .summary-title {
        font-weight: bold;
        color: #000;
        margin-bottom: 20px;
    }
    .summary-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 16px;
        margin-bottom: 15px;
    }
    .summary-info {
        color: #333;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    .total-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 40px;
        border-top: 2px solid #eaeaea;
        padding-top: 20px;
    }
    .total-label { font-weight: 900; font-size: 1.5rem; }
    .total-price { font-weight: 900; font-size: 1.5rem; }
</style>

<div class="container payment-wrapper">
    <div class="row">
        <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
            <h2 class="fw-bold mb-4">Masukkan data anda</h2>
            
            <form action="<?= base_url('tiket') ?>" method="POST">
                <div class="mb-5">
                    <div class="data-row">
                        <span class="label">Tanggal Pesan</span>
                        <input type="text" class="val-input" name="tanggal" value="2 Oktober 2026" readonly>
                    </div>
                    <div class="data-row">
                        <span class="label">Dimulai dari jam</span>
                        <input type="text" class="val-input" name="jam_mulai" value="08.00 WIB" readonly>
                    </div>
                    <div class="data-row">
                        <span class="label">Berakhir</span>
                        <input type="text" class="val-input" name="jam_selesai" value="11.00 WIB" readonly>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="data-row">
                        <span class="label">Nama</span>
                        <input type="text" class="val-input" name="nama" value="your name" required>
                    </div>
                    <div class="data-row">
                        <span class="label">Email</span>
                        <input type="email" class="val-input" name="email" value="youremail@gmail.com" required>
                    </div>
                    <div class="data-row">
                        <span class="label">No Handphone</span>
                        <input type="number" class="val-input" name="nohp" value="081000000" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-bayar">Bayar</button>
                </div>
            </form>
        </div>

        <div class="col-lg-5 offset-lg-1">
            <h2 class="summary-title">GOR Badminton Argo</h2>
            
            <img src="gambar/lap a futsal.png" alt="Venue" class="summary-img">
            
            <div class="summary-info">
                <div class="d-flex align-items-center mb-1">
                    <span class="fw-bold me-2">4.53</span>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="mb-0">Pendirikan kidul, Semarang<br>Tengah, Semarang</p>
                
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span>08.00 WIB - 11.00 WIB</span>
                    <span class="fw-bold">Rp.90.000</span>
                </div>
            </div>

            <div class="total-section">
                <div class="total-label">TOTAL</div>
                <div class="total-price">Rp.90.000</div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>