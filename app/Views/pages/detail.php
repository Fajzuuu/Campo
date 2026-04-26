<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Galeri Foto */
    .gallery-main { height: 400px; object-fit: cover; border-radius: 12px; width: 100%; }
    .gallery-sub { height: 400px; object-fit: cover; border-radius: 12px; width: 100%; }
    
    @media (max-width: 768px) {
        .gallery-main, .gallery-sub { height: 250px; margin-bottom: 15px; }
    }

    /* Panel Harga / Booking (Sticky) */
    .booking-card {
        border: 1px solid #eaeaea;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        position: sticky;
        top: 20px; 
    }
    .btn-booking {
        background-color: #70bdeb;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        padding: 10px;
    }
    .btn-booking:hover { background-color: #5baae0; color: white; }

    /* Ikon Fasilitas */
    .facility-item { display: flex; align-items: center; margin-bottom: 15px; color: #4a5568; }
    .facility-item i { font-size: 1.2rem; margin-right: 10px; color: #000; }

    /* Pilihan Tanggal */
    .date-scroll { display: flex; overflow-x: auto; gap: 10px; padding-bottom: 10px; }
    .date-scroll::-webkit-scrollbar { height: 6px; }
    .date-scroll::-webkit-scrollbar-thumb { background: #cbd5e0; border-radius: 10px; }
    .date-box {
        min-width: 70px; border: 1px solid #eaeaea; border-radius: 8px;
        padding: 10px 5px; text-align: center; cursor: pointer; color: #4a5568;
        font-size: 0.9rem;
    }
    .date-box.active { background-color: #70bdeb; color: white; border-color: #70bdeb; font-weight: bold; }
    .date-box:hover:not(.active) { background-color: #f8f9fa; }

    /* Card Lapangan */
    .court-card { border: 1px solid #eaeaea; border-radius: 12px; overflow: hidden; margin-bottom: 20px; }
    .court-img { height: 100%; min-height: 150px; object-fit: cover; width: 100%; }
    .btn-jadwal { background-color: #70bdeb; color: white; border-radius: 20px; font-size: 0.85rem; }
    .btn-jadwal:hover { background-color: #5baae0; color: white; }

    /* Reschedule Box */
    .policy-box { border: 1px solid #eaeaea; border-radius: 12px; padding: 20px; }
    .text-danger-custom { color: #e53e3e; font-weight: bold; }

    /* Ulasan */
    .progress { height: 8px; border-radius: 10px; margin-top: 10px; }
    .progress-bar { background-color: #70bdeb; }
    .review-card { border: 1px solid #eaeaea; border-radius: 12px; padding: 15px; height: 100%; }
    .avatar-circle {
        width: 40px; height: 40px; border-radius: 50%; display: flex;
        align-items: center; justify-content: center; color: white; font-weight: bold;
    }
</style>

<div class="container mt-4 mb-5">
    <div class="row g-3 mb-5">
        <div class="col-md-7">
            <img src="gambar/lap a futsal.png" alt="Lapangan A" class="gallery-main">
        </div>
        <div class="col-md-5">
            <img src="gambar/lap b futsal.png" alt="Lapangan B" class="gallery-sub">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 pe-lg-4">
            
            <h2 class="fw-bold mb-1">GOR Semarang</h2>
            <h5 class="text-secondary mb-3">Lapangan A</h5>
            <div class="d-flex align-items-center mb-2">
                <span class="fw-bold me-2">4.50</span>
                <i class="bi bi-star-fill text-warning me-2"></i>
            </div>
            <p class="text-muted"><i class="bi bi-geo-alt"></i> Pendirikan kidul,Semarang Tengah, Semarang</p>
            <hr>
            <p class="text-muted">Lapangan Badminton yang Bersih, Kekinian, Adem dan lahan parkir luas.</p>

            <h5 class="fw-bold mt-4 mb-3">Fasilitas</h5>
            <div class="row mb-4">
                <div class="col-6 col-md-4">
                    <div class="facility-item"><i class="bi bi-building"></i> Musholla</div>
                    <div class="facility-item"><i class="bi bi-droplet"></i> Toilet</div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="facility-item"><i class="bi bi-car-front"></i> Parkir Luas</div>
                    <div class="facility-item"><i class="bi bi-shop"></i> MiniMarket</div>
                </div>
            </div>

            <h5 class="fw-bold mt-5 mb-3"><i class="bi bi-play-circle me-2"></i> Pilih Lapangan & Waktu</h5>
            
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div class="date-scroll flex-grow-1 me-3">
                    <div class="date-box">Min<br>1 Okt</div>
                    <div class="date-box active">Sen<br>2 Okt</div>
                    <div class="date-box">Sel<br>3 Okt</div>
                    <div class="date-box">Rab<br>4 Okt</div>
                    <div class="date-box">Kam<br>5 Okt</div>
                    <div class="date-box">Jum<br>6 Okt</div>
                    <div class="date-box">Sab<br>7 Okt</div>
                </div>
                <div class="d-flex gap-2 mt-2 mt-md-0">
                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-sliders"></i> Filter waktu</button>
                    <select class="form-select form-select-sm" style="width: auto;">
                        <option>Cabor</option>
                    </select>
                </div>
            </div>

            <div class="card court-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="gambar/lap b futsal.png" class="court-img" alt="Lapangan B">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="fw-bold">Lapangan B</h6>
                            <p class="text-muted small mb-2">Depan Pintu Masuk</p>
                            <div class="mb-3 text-muted small">
                                <div><i class="bi bi-geo-alt me-2"></i> Indoor</div>
                                <div><i class="bi bi-layers me-2"></i> Lantai</div>
                            </div>
                            <button class="btn btn-jadwal px-3"><i class="bi bi-clock me-1"></i> 3 Jadwal Tersedia</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card court-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="gambar/lap c futsal.png" class="court-img" alt="Lapangan C">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="fw-bold">Lapangan C</h6>
                            <p class="text-muted small mb-2">Depan Pintu Masuk</p>
                            <div class="mb-3 text-muted small">
                                <div><i class="bi bi-geo-alt me-2"></i> Indoor</div>
                                <div><i class="bi bi-layers me-2"></i> Lantai</div>
                            </div>
                            <button class="btn btn-jadwal px-3"><i class="bi bi-clock me-1"></i> 3 Jadwal Tersedia</button>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="fw-bold mt-5 mb-3"><i class="bi bi-play-circle me-2"></i> Reschedule & Pembatalan</h5>
            <div class="policy-box mb-5">
                <p class="mb-1 text-muted">Reservasi tidak dapat dibatalkan dan tidak berlaku refund.</p>
                <p class="text-danger-custom mb-0">Tidak ada refund</p>
            </div>

            <h5 class="fw-bold mt-5 mb-3"><i class="bi bi-play-circle me-2"></i> Ulasan</h5>
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="fw-bold small">Kebersihan</div>
                    <div class="progress"><div class="progress-bar" style="width: 90%;"></div></div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="fw-bold small">Kondisi Lapangan</div>
                    <div class="progress"><div class="progress-bar" style="width: 85%;"></div></div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="fw-bold small">Komunikasi</div>
                    <div class="progress"><div class="progress-bar" style="width: 95%;"></div></div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="review-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle" style="background-color: #70bdeb;">YZ</div>
                                <div class="ms-2">
                                    <div class="fw-bold small">Yuza Nugrahidta</div>
                                    <div class="text-muted" style="font-size: 0.7rem;">Ulasan - 20 September 2023</div>
                                </div>
                            </div>
                            <div class="border rounded px-2 py-1 small fw-bold">
                                <i class="bi bi-star-fill text-warning"></i> 5.0
                            </div>
                        </div>
                        <p class="small text-muted mb-0">Tempat masih baru, bersih dan rapi. Mantopp</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="review-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle" style="background-color: #cddc39;">AF</div>
                                <div class="ms-2">
                                    <div class="fw-bold small">Akmal Furkon</div>
                                    <div class="text-muted" style="font-size: 0.7rem;">Ulasan - 28 September 2023</div>
                                </div>
                            </div>
                            <div class="border rounded px-2 py-1 small fw-bold">
                                <i class="bi bi-star-fill text-warning"></i> 4.7
                            </div>
                        </div>
                        <p class="small text-muted mb-0">Mantap lapangannya</p>
                    </div>
                </div>
            </div>

        </div> <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="booking-card p-4">
                <p class="text-muted small mb-1">Mulai dari</p>
                <h4 class="fw-bold mb-4">Rp. 90.000 <span class="text-muted small fw-normal">/ jam</span></h4>
                <a href="<?= base_url('pembayaran') ?>" class="btn btn-booking w-100 d-block text-center text-decoration-none">Booking</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>