<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laporan Praktikum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2c3e50;
            --accent: #e74c3c;
            --success: #2ecc71;
            --light: #ecf0f1;
            --dark: #34495e;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1000px;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }
        
        .login-container:hover {
            transform: translateY(-5px);
        }
        
        .login-header {
            background: linear-gradient(to right, var(--secondary), var(--dark));
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }
        
        .logo-icon {
            background: white;
            color: var(--secondary);
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .login-form {
            padding: 40px;
        }
        
        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px 20px;
            font-size: 16px;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
        }
        
        .btn-login {
            background: linear-gradient(to right, var(--primary), #2980b9);
            border: none;
            padding: 15px 20px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            width: 100%;
            margin-top: 10px;
        }
        
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
        
        .features {
            padding: 30px;
            background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
            border-left: 1px solid #dee2e6;
        }
        
        .features h3 {
            color: var(--secondary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary);
        }
        
        .feature-item {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }
        
        .feature-icon {
            background: var(--primary);
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
            font-size: 18px;
        }
        
        .feature-text {
            font-size: 16px;
            color: var(--dark);
        }
        
        .login-footer {
            background-color: var(--secondary);
            color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        
        .animation-container {
            text-align: center;
            margin: 20px 0;
        }
        
        .animation-icon {
            font-size: 48px;
            color: var(--primary);
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
        
        .input-group {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #95a5a6;
            font-size: 18px;
        }
        
        .welcome-message {
            background: linear-gradient(45deg, var(--success), #27ae60);
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .features {
                border-left: none;
                border-top: 1px solid #dee2e6;
            }
            
            .login-header, .login-form {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <span>SISTEM LOGIN PRAKTIKUM</span>
            </div>
            <h1>Masuk ke Akun Anda</h1>
            <p class="mb-0">Silakan masukkan kredensial Anda untuk mengakses sistem</p>
        </div>
        
        <div class="row g-0">
            <div class="col-md-6">
                <div class="login-form">
                    <div class="animation-container">
                        <div class="animation-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                    </div>
                    
                    <form action="welcome.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
                                <span class="input-icon">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Masukkan email Anda" required>
                                <span class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-login">
                                <i class="fas fa-sign-in-alt me-2"></i> Login Sekarang
                            </button>
                        </div>
                    </form>
                    
                    <div class="mt-4 text-center">
                        <div class="welcome-message">
                            Sistem Login Praktikum - PHP & Bootstrap
                        </div>
                        <p class="text-muted">Pastikan Anda memasukkan data dengan benar untuk menghindari kesalahan</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="features">
                    <h3><i class="fas fa-tasks me-2"></i> Persyaratan Sistem</h3>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="feature-text">
                            Form login dengan PHP (method POST) tanpa menggunakan database
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="feature-text">
                            Redirect ke halaman khusus jika data tidak lengkap
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="feature-text">
                            Menampilkan informasi login (nama, email, waktu)
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="feature-text">
                            Menggunakan Bootstrap untuk desain responsif
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="feature-text">
                            Animasi dan efek visual modern
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <h4><i class="fas fa-info-circle me-2"></i> Informasi Login</h4>
                        <p class="text-muted">Setelah login berhasil, sistem akan menampilkan:</p>
                        <ul class="text-muted">
                            <li>Nama lengkap pengguna</li>
                            <li>Alamat email yang digunakan</li>
                            <li>Waktu login (hari, tanggal, jam)</li>
                            <li>Konfirmasi login berhasil</li>
                        </ul>
                    </div>
                    
                    <div class="alert alert-info mt-4">
                        <i class="fas fa-exclamation-circle me-2"></i> 
                        <strong>Perhatian:</strong> Sistem tidak menyimpan data login di database. 
                        Semua data hanya ditampilkan pada halaman hasil login.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="login-footer">
            <p class="mb-0">© 2023 Laporan Praktikum - Sistem Login PHP | Dibuat dengan Bootstrap 5 dan PHP</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>