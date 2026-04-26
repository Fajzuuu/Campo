<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* CSS Khusus Halaman Venue */
    .search-section {
        background: url('gambar/ring basket.png') no-repeat center center;
        background-size: cover;
        padding: 60px 0;
        position: relative;
    }

    .search-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to right, #0d6efd 10%, rgba(13, 110, 253, 0.4) 100%);
    }

    .search-content {
        position: relative;
        z-index: 2;
    }

    .btn-temukan {
        background-color: #0b1a30;
        color: #fff;
        font-weight: bold;
        width: 100%;
        padding: 10px;
    }
    .btn-temukan:hover {
        background-color: #163057;
        color: #fff;
    }

    /* Venue Section */
    .venue-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }

    .venue-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .venue-card:hover {
        transform: translateY(-5px);
    }

    .venue-card img {
        height: 180px;
        object-fit: cover;
    }

    .sport-badge {
        font-size: 0.75rem;
        padding: 4px 10px;
        border-radius: 20px;
        font-weight: 600;
    }

    .badge-futsal { background-color: #58a75e; color: #fff; }
    .badge-badminton { background-color: #dc3545; color: #fff; }

    .venue-location {
        color: #6c757d;
        font-size: 0.9rem;
    }

    .venue-rating {
        color: #ffc107;
        font-weight: bold;
    }

    .venue-price {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .btn-pesan {
        background-color: #0d6efd;
        color: #fff;
        font-weight: 600;
        border: none;
        padding: 8px 20px;
        border-radius: 8px;
    }

    .btn-pesan:hover {
        background-color: #0b5ed7;
        color: #fff;
    }
</style>
<section class="search-section">
    <div class="search-overlay"></div>
    <div class="container search-content text-white text-center">
        <h2 class="mb-4 fw-bold">Pilih lapangan mu sekarang</h2>

        <form action="<?= base_url('proses_pencarian') ?>" method="POST" class="row justify-content-center g-3">
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">❯</span>
                <select class="form-select border-start-0 ps-0" name="jenis_olahraga" required>
                    <option value="" selected disabled>pilih olahraga</option>
                    <option value="bulutangkis">Bulutangkis</option>
                    <option value="futsal">Futsal</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">❯</span>
                <input type="date" class="form-control border-start-0 ps-0" name="tanggal_main" required placeholder="pilih tanggal" 
                    min="<?= date('Y-m-d') ?>" max="<?= date('Y-m-d', strtotime('+14 days')) ?>">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">❯</span>
                <select class="form-select border-start-0 ps-0" name="jam_main" required>
                    <option value="" selected disabled>pilih jam</option>
                    <option value="08:00">08:00</option>
                    <option value="10:00">10:00</option>
                    <option value="12:00">12:00</option>
                    <option value="14:00">14:00</option>
                    <option value="16:00">16:00</option>
                    <option value="18:00">18:00</option>
                    <option value="20:00">20:00</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <button type="submit" class="btn btn-temukan rounded-3 w-100 py-2 fs-5">Temukan</button>
        </div>
    </form>
    </div>
</section>

<section class="venue-section">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Pilih Venue</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card venue-card">
                    <img src="gambar/lap a futsal.png" alt="">
                    <div class="card-body">
                        <span class="sport-badge badge-futsal">Futsal</span>
                        <h5 class="mt-2 fw-bold">Lapangan A</h5>
                        <p class="venue-location">GOR Semarang jln Imam Bonjol</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="venue-rating">★ 4.8 (120)</span>
                            <span class="venue-price">Rp 90.000</span>
                        </div>
                        <a href="<?= base_url('detail') ?>" class="btn btn-pesan w-100 mt-3 d-block text-decoration-none text-center">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card venue-card">
                    <img src="gambar/lap b futsal.png" alt="GOR Pelita">
                    <div class="card-body">
                        <span class="sport-badge badge-futsal">Futsal</span>
                        <h5 class="mt-2 fw-bold">Lapangan B</h5>
                        <p class="venue-location">GOR Semarang jln Imam Bonjol</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="venue-rating">★ 4.5 (85)</span>
                            <span class="venue-price">Rp 90.000</span>
                        </div>
                        <a href="<?= base_url('detail') ?>" class="btn btn-pesan w-100 mt-3 d-block text-decoration-none text-center">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card venue-card">
                    <img src="gambar/lap c futsal.png" alt="Stadion Madya">
                    <div class="card-body">
                        <span class="sport-badge badge-futsal">Futsal</span>
                        <h5 class="mt-2 fw-bold">Lapangan C</h5>
                        <p class="venue-location">GOR Semarang jln Imam Bonjol</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="venue-rating">★ 4.9 (70)</span>
                            <span class="venue-price">Rp 90.000</span>
                        </div>
                        <a href="<?= base_url('detail') ?>" class="btn btn-pesan w-100 mt-3 d-block text-decoration-none text-center">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card venue-card">
                    <img src="gambar/lap a badminton.png" alt="Future Arena">
                    <div class="card-body">
                        <span class="sport-badge badge-badminton">Bulutangkis</span>
                        <h5 class="mt-2 fw-bold">Lapangan A</h5>
                        <p class="venue-location">GOR Semarang jln Imam Bonjol</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="venue-rating">★ 4.7 (95)</span>
                            <span class="venue-price">Rp 70.000</span>
                        </div>
                        <a href="<?= base_url('detail') ?>" class="btn btn-pesan w-100 mt-3 d-block text-decoration-none text-center">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card venue-card">
                    <img src="gambar/lap b badminton.png" alt="Badminton Hall">
                    <div class="card-body">
                        <span class="sport-badge badge-badminton">Bulutangkis</span>
                        <h5 class="mt-2 fw-bold">Lapangan B</h5>
                        <p class="venue-location">GOR Semarang jln Imam Bonjol</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="venue-rating">★ 4.6 (150)</span>
                            <span class="venue-price">Rp 50.000</span>
                        </div>
                        <a href="<?= base_url('detail') ?>" class="btn btn-pesan w-100 mt-3 d-block text-decoration-none text-center">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card venue-card">
                    <img src="gambar/lap c badminton.png" alt="Sport Center">
                    <div class="card-body">
                        <span class="sport-badge badge-badminton">Bulutangkis</span>
                        <h5 class="mt-2 fw-bold">Lapangan C</h5>
                        <p class="venue-location">GOR Semarang jln Imam Bonjol</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="venue-rating">★ 4.4 (70)</span>
                            <span class="venue-price">Rp 35.000</span>
                        </div>
                        <a href="<?= base_url('detail') ?>" class="btn btn-pesan w-100 mt-3 d-block text-decoration-none text-center">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>