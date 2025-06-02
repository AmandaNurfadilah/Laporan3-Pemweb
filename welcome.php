<?php
// Validasi data
if(empty($_POST['nama']) || empty($_POST['email'])) {
    header("Location: incomplete.php");
    exit();
}

// Tangkap data
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);

// Dapatkan waktu login
date_default_timezone_set('Asia/Jakarta');
$hari = date('l');
$tanggal = date('d F Y');
$jam = date('H:i:s');

// Konversi hari ke Bahasa Indonesia
$hari_indonesia = [
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu'
];
$hari = $hari_indonesia[$hari];

// Konversi bulan ke Bahasa Indonesia
$bulan_indonesia = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];
$tanggal = str_replace(array_keys($bulan_indonesia), array_values($bulan_indonesia), $tanggal);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Laporan Praktikum</title>
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
        
        .welcome-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .welcome-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(52, 152, 219, 0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
            z-index: 0;
        }
        
        .welcome-header {
            color: var(--secondary);
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }
        
        .user-card {
            background: linear-gradient(to bottom, #ffffff, #f8f9fa);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 2;
            border: 1px solid #e9ecef;
        }
        
        .info-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        
        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .info-icon {
            background: var(--primary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .info-content h5 {
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .info-content p {
            margin-bottom: 0;
            color: #7f8c8d;
            font-size: 18px;
        }
        
        .login-time {
            font-size: 1.3rem;
            background: linear-gradient(to right, var(--primary), var(--dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
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
        
        .success-icon {
            font-size: 80px;
            color: var(--success);
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        
        <div class="welcome-header">
            <h1>Selamat Datang, <?php echo $nama; ?>!</h1>
            <p class="lead">Anda telah berhasil login ke sistem</p>
        </div>
        
        <div class="user-card">
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="info-content">
                    <h5>Nama Lengkap</h5>
                    <p><?php echo $nama; ?></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info-content">
                    <h5>Email</h5>
                    <p><?php echo $email; ?></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="info-content">
                    <h5>Waktu Login</h5>
                    <p><?php echo "$hari, $tanggal"; ?></p>
                    <p class="login-time">Pukul <?php echo $jam; ?></p>
                </div>
            </div>
        </div>
        
        <div class="alert alert-success" style="position: relative; z-index: 2;">
            <h4 class="alert-heading"><i class="fas fa-check-circle me-2"></i> Login Berhasil!</h4>
            <p>Data Anda telah tervalidasi dengan baik. Selamat menggunakan sistem.</p>
        </div>
        
        <a href="index.html" class="btn btn-back">
            <i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Login
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>