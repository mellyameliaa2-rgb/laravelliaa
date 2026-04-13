<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - User Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

<div class="container">
    <div class="card-custom">

        <h3> Dashboard User </h3>

        <div class="welcome-text">
            Selamat Datang di Sistem Informasi<br>
            Data Kelas & Siswa
        </div>

        <!-- ===== INFORMASI SEDERHANA ===== -->
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

        <!-- ===== MENU USER (DIBATASI) ===== -->
        <h4 class="activities-title">Menu User</h4>

        <div class="activities-grid">

            <a href="{{ route('kelas.index') }}" class="activity-card">
                <i class="bi bi-list-task activity-icon"></i>
                <h5>Lihat Kelas</h5>
                <p>Melihat daftar kelas yang tersedia</p>
            </a>

            <a href="{{ route('siswa.index') }}" class="activity-card">
                <i class="bi bi-person-lines-fill activity-icon"></i>
                <h5>Lihat Data Siswa</h5>
                <p>Melihat data siswa</p>
            </a>

        </div>

        <div class="card-footer">
            <small>© {{ date('Y') }} Sistem Administrasi Sekolah</small>
        </div>

    </div>
</div>

</body>
</html>