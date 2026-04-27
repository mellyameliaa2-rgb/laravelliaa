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

<div class="container-fluid px-5 py-4">
    <div class="card-custom">

<style>
.logout-pill {
    width: 88px;
    height: 88px;
    border-radius: 50%;
    border: none;
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #291609;
    font-size: 18px;
    transition: all 0.25s ease;
}

.logout-pill:hover {
    background: #925e42;
    color: #572d07;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(220,53,69,0.3);
}
</style>
    
 <div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="fw-bold m-0">Dashboard User</h3>

<form action="{{ route('logout') }}" method="POST" onsubmit="return confirmLogout()">
    @csrf
   <button type="submit" class="logout-pill">
        <i class="bi bi-box-arrow-right" style="font-size: 40px;"></i>
    </button>
</form>

<script>
function confirmLogout() {
    return confirm('Yakin ingin logout?');
}
</script>
</div>

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

        <!-- ===== MENU USER ===== -->
        <h4 class="activities-title">Menu User</h4>

        <div class="activities-grid">

            <a href="{{ route('user.kelas.index') }}" class="activity-card">
                <i class="bi bi-list-task activity-icon"></i>
                <h5>Lihat Kelas</h5>
                <p>Melihat daftar kelas yang tersedia</p>
            </a>

            <a href="{{ route('user.siswa.index') }}" class="activity-card">
                <i class="bi bi-person-lines-fill activity-icon"></i>
                <h5>Lihat Data Siswa</h5>
                <p>Melihat data siswa</p>
            </a>

        </div>

        <div class="card-footer">
            <small>© {{ date('Y') }} Sistem Data Manajemen Sekolah</small>
        </div>

    </div>
</div>

</body>
</html>