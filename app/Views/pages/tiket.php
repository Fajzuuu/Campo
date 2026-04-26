<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<style>
    /* Menyamakan warna background dengan halaman pembayaran */
    body {
        background-color: #f2f5f8; 
    }

    /* Menyembunyikan menu navbar agar tampilan bersih seperti desain */
    .navbar-nav {
        display: none !important;
    }

    /* Style khusus untuk kartu tiket */
    .ticket-wrapper {
        min-height: calc(100vh - 180px); /* Menyesuaikan tinggi di antara navbar dan footer */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
    }

    .ticket-card {
        background-color: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        width: 100%;
        max-width: 750px;
        padding: 50px;
    }

    .ticket-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .ticket-header h1 {
        font-weight: 900;
        color: #000;
        margin-bottom: 10px;
    }

    .ticket-header p {
        color: #6c757d;
        font-size: 1.1rem;
        line-height: 1.4;
    }

    /* Pemisah vertikal di tengah */
    .ticket-divider {
        border-right: 1px solid #cbd5e0;
    }

    .ticket-label {
        font-size: 0.85rem;
        color: #8c98a4;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 5px;
        display: block;
    }

    .ticket-value {
        font-size: 1.2rem;
        font-weight: 800;
        color: #000;
        margin-bottom: 25px;
    }

    .barcode-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .barcode-img {
        max-width: 100%;
        height: 80px;
        margin: 15px 0;
    }

    /* Responsif untuk layar HP */
    @media (max-width: 768px) {
        .ticket-card { padding: 30px 20px; }
        .ticket-divider { border-right: none; border-bottom: 1px dashed #cbd5e0; margin-bottom: 30px; padding-bottom: 20px; }
    }
</style>

<div class="ticket-wrapper">
    <div class="ticket-card">
        
        <div class="ticket-header">
            <h1>Thank you</h1>
            <p>Your ticket has been issued<br>successfully</p>
        </div>

        <div class="row">
            <div class="col-md-6 ticket-divider pe-md-4">
                <span class="ticket-label">Ticket ID</span>
                <div class="ticket-value"><?= esc($tiket['kode_tiket']); ?></div>

                <span class="ticket-label">Date & Time</span>
                <div class="ticket-value">
                    <?= date('d F Y', strtotime($tiket['tanggal_main'])); ?>
                </div>

                <span class="ticket-label">Price</span>
                <div class="ticket-value mb-0">
                    Rp <?= number_format($tiket['harga'], 0, ',', '.'); ?>
                </div>
            </div>

            <div class="col-md-6 ps-md-4">
                <div class="barcode-section text-center">
                    <span class="text-muted fw-bold">Please Scan</span>
                    
                    <img src="https://barcode.tec-it.com/barcode.ashx?data=<?= esc($tiket['kode_tiket']); ?>&code=Code128&translate-esc=on" alt="Barcode" class="barcode-img">
                    
                    <span class="text-dark small">
                        <?= date('H.i', strtotime($tiket['jam_mulai'])); ?> WIB - 
                        <?= date('H.i', strtotime($tiket['jam_selesai'])); ?> WIB
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>