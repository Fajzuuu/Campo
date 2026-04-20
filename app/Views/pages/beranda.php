<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* CSS Khusus Halaman Beranda */
    .hero-section {
        /* Pastikan file banner.png ada di folder public/img/ jika ingin pakai file lokal */
       background: url('banner.png') no-repeat center center;
            background-size: cover;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
    }
    
    .hero-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 900;
        color: #fff;
        text-transform: uppercase;
        text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000, 4px 4px 5px rgba(0,0,0,0.5);
        margin-bottom: 20px;
    }

    .hero-subtitle {
        font-size: 1.5rem;
        color: #fff;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    }

    .search-section {
        background: url('https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
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
</style>

<section class="hero-section">
    <div class="hero-overlay"></div>
</section>

<section class="search-section">
    <div class="search-overlay"></div>
    <div class="container search-content text-white text-center">
        
        <form action="<?= base_url('proses_pencarian') ?>" method="POST" class="row justify-content-center g-3">
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">❯</span>
                    <select class="form-select border-start-0 ps-0" name="jenis_olahraga" required>
                        <option value="" selected disabled>pilih olahraga</option>
                        <option value="bulutangkis">Bulutangkis</option>
                        <option value="futsal">Futsal</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">❯</span>
                    <input type="date" class="form-control border-start-0 ps-0" name="tanggal_main" required placeholder="pilih tanggal">
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-temukan rounded-3">Temukan</button>
            </div>
        </form>
    </div>
</section>

<?= $this->endSection(); ?>