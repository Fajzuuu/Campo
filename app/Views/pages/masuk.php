<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Tata Letak Halaman Login */
    .login-wrapper {
        min-height: calc(100vh - 76px); 
        display: flex;
        flex-wrap: wrap;
    }
    .login-form-section {
        flex: 1 1 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 5% 10%;
        background-color: #f8f9fa; 
    }
    .login-image-section {
        flex: 1 1 50%;
        /* Link gambar sudah kuperbarui ke link barumu dan dikembalikan sebagai background agar responsif */
        background: url('https://i.pinimg.com/736x/45/b0/e0/45b0e05edc2b378d1522fd57a63f1fb6.jpg') no-repeat center center;
        background-size: cover;
    }

    @media (max-width: 768px) {
        .login-image-section { display: none; }
        .login-form-section { flex: 1 1 100%; padding: 10% 5%; }
    }

    /* Tipografi Form */
    .login-title {
        font-size: 2.2rem;
        font-weight: 900;
        color: #0b1a30;
        text-align: center;
        margin-bottom: 1rem;
    }
    .login-subtitle {
        text-align: center;
        color: #4a5568;
        font-size: 1.1rem;
        margin-bottom: 2.5rem;
        line-height: 1.5;
    }

    /* Garis pemisah */
    .divider-text {
        display: flex;
        align-items: center;
        text-align: center;
        color: #718096;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }
    .divider-text::before, .divider-text::after {
        content: ''; flex: 1; border-bottom: 1px solid #cbd5e0;
    }
    .divider-text:not(:empty)::before { margin-right: 1em; }
    .divider-text:not(:empty)::after { margin-left: 1em; }

    /* Elemen Input */
    .form-control {
        padding: 0.8rem 1rem;
        border-color: #a0aec0;
        border-radius: 4px;
    }
    .input-group, .form-control.email-input {
        margin-bottom: 1rem;
    }
    
    /* Tombol icon mata */
    .btn-eye {
        border: 1px solid #a0aec0; 
        background-color: white;
        color: #718096;
    }
    .btn-eye:hover, 
    .btn-eye:active, 
    .btn-eye:focus {
        background-color: #f8f9fa !important;
        border-color: #a0aec0 !important; 
        color: #718096 !important;
        box-shadow: none !important; 
        z-index: 1; 
    }

    /* Elemen Bawah */
    .forgot-password {
        text-align: center;
        font-size: 0.95rem;
        color: #718096;
        margin-bottom: 1.5rem;
    }
    .forgot-password a {
        color: #0b1a30; font-weight: bold; text-decoration: underline;
    }

    .btn-login {
        background-color: #70bdeb; 
        color: white;
        font-weight: bold;
        font-size: 1.1rem;
        padding: 0.8rem;
        border-radius: 8px;
        border: none;
        width: 100%;
        transition: all 0.3s;
    }
    .btn-login:hover { background-color: #5baae0; color: white; }

    .register-link {
        text-align: center; font-size: 0.95rem; margin-top: 1.5rem;
        color: #718096; padding-bottom: 1.5rem; border-bottom: 1px solid #cbd5e0; 
    }
    .register-link a { color: #0b1a30; font-weight: bold; text-decoration: underline; }
</style>

<div class="container-fluid p-0">
    <div class="login-wrapper">
        <div class="login-form-section">
            <div style="max-width: 450px; margin: 0 auto; width: 100%;">
                <h1 class="login-title">Selamat Datang.</h1>
                <p class="login-subtitle">Ribuan orang telah merasakan<br>pengalaman seru berolahraga bersama<br>kami. Sekarang giliran kamu!</p>
                
                <div class="divider-text">Login menggunakan Akun</div>
                
                <form action="#" method="POST">
                    <input type="email" class="form-control email-input" name="email" placeholder="Email" required>
                    
                    <div class="input-group">
                        <input type="password" class="form-control border-end-0" name="password" id="passwordField" placeholder="Password" required>
                        <button class="btn btn-eye border-start-0" type="button" id="togglePassword">
                            <i class="bi bi-eye-slash" id="eyeIcon"></i>
                        </button>
                    </div>
                    
                    <div class="forgot-password">
                        Lupa Password? <a href="#">Klik Disini</a>
                    </div>
                    
                    <button type="submit" class="btn btn-login">Login</button>
                    
                    <div class="register-link">
                        Belum Memiliki Akun? Yuk Daftar <a href="<?= base_url('daftar') ?>">Disini</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="login-image-section"></div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('passwordField');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        eyeIcon.classList.toggle('bi-eye');
        eyeIcon.classList.toggle('bi-eye-slash');
    });
</script>

<?= $this->endSection(); ?>