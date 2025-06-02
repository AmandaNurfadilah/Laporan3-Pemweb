<?php
// Tangkap data yang mungkin dikirim
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tidak Lengkap - Laporan Praktikum</title>
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
        
        .error-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .error-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(231, 76, 60, 0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
            z-index: 0;
        }
        
        .error-icon {
            font-size: 80px;
            color: var(--accent);
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            animation: shake 0.5s infinite;
        }
        
        @keyframes shake {
            0%, 100% {transform: translateX(0);}
            25% {transform: translateX(-5px);}
            75% {transform: translateX(5px);}
        }
        
        .error-header {
            color: var(--accent);
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }
        
        .error-details {
            background-color: #f8d7da;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            text-align: left;
            position: relative;
            z-index: 2;
            border: 1px solid #f5c6cb;
        }
        
        .btn-back {
            background: linear-gradient(to right, var(--primary), #2980b9);
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            position: relative;
            z-index: 2;
        }
        
        .btn-back:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
        
        .error-list {
            list-style: none;
            padding-left: 0;
        }
        
        .error-list li {
            padding: 8px 0;
            border-bottom: 1px solid #f5c6cb;
            display: flex;
            align-items: center;
        }
        
        .error-list li:last-child {
            border-bottom: none;
        }
        
        .error-list li i {
            color: var(--accent);
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        
        <div class="error-header">
            <h1>Data Tidak Lengkap!</h1>
            <p class="lead">Silakan lengkapi semua field yang diperlukan</p>
        </div>
        
        <div class="error-details">
            <h4><i class="fas fa-exclamation-circle me-2"></i> Detail Kesalahan:</h4>
            <ul class="error-list mt-3">
                <?php if(empty($nama)): ?>
                    <li>
                        <i class="fas fa-times-circle"></i>
                        Nama lengkap belum diisi
                    </li>
                <?php endif; ?>
                <?php if(empty($email)): ?>
                    <li>
                        <i class="fas fa-times-circle"></i>
                        Email belum diisi
                    </li>
                <?php endif; ?>
            </ul>
            <p class="mt-3 mb-0">Pastikan Anda mengisi semua field sebelum melanjutkan.</p>
        </div>
        
        <a href="index.html" class="btn btn-back">
            <i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Login
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>