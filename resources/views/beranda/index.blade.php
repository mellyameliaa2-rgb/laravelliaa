<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - Dashboard</title>
    
    <!-- Fonts & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

<div class="container">
    <div class="card-custom">

        <h3>Dashboard Administrasi</h3>
        
        <div class="welcome-text">
            Selamat Datang di Sistem Informasi<br>
            Manajemen Data Kelas & Siswa
        </div>

        <!-- ===== STATISTIK ===== -->
        <div class="stats-container">
            <div class="stat-card">
                <i class="bi bi-building stat-icon"></i>
                <h4>{{ $jumlahKelas }}</h4>
                <p>Total Kelas</p>
            </div>

            <div class="stat-card">
                <i class="bi bi-people stat-icon"></i>
                <h4>{{ $jumlahSiswa }}</h4>
                <p>Total Siswa</p>
            </div>
        </div>

        <!-- ===== AKTIVITAS ===== -->
        <h4 class="activities-title">Menu Aktivitas</h4>

        <div class="activities-grid">
            <a href="{{ route('kelas.index') }}" class="activity-card">
                <i class="bi bi-list-task activity-icon"></i>
                <h5>Lihat Data Kelas</h5>
                <p>Melihat daftar lengkap kelas yang tersedia</p>
            </a>

            <a href="{{ route('kelas.create') }}" class="activity-card">
                <i class="bi bi-plus-circle activity-icon"></i>
                <h5>Tambah Kelas Baru</h5>
                <p>Menambahkan data kelas baru ke sistem</p>
            </a>

            <a href="{{ route('siswa.index') }}" class="activity-card">
                <i class="bi bi-person-lines-fill activity-icon"></i>
                <h5>Data Siswa</h5>
                <p>Mengelola data siswa secara keseluruhan</p>
            </a>

            <a href="{{ route('siswa.create') }}" class="activity-card">
                <i class="bi bi-person-plus activity-icon"></i>
                <h5>Tambah Siswa Baru</h5>
                <p>Menambahkan data siswa baru ke sistem</p>
            </a>
        </div>

        <div class="card-footer">
            <small>© {{ date('Y') }} Sistem Administrasi Sekolah</small>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>