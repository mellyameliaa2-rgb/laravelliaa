<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/2index.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #70442a;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-book me-2"></i>Sekolah
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.dashboard') }}">
                        <i class="bi bi-house-door me-1"></i> Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.kelas.index') }}">
                        <i class="bi bi-building me-1"></i> Data Kelas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.siswa.index') }}">
                        <i class="bi bi-people me-1"></i> Data Siswa
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.navbar')) {
        document.body.classList.add('has-navbar');

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    }
});
</script>

<div class="container">
    <div class="card-custom">

        <h1><b>Data Kelas</b></h1>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th width="70">No</th>
                        <th>Nama Kelas</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($data as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->nama_kelas }}</td>
                        <td>{{ $dt->jurusan }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">
                            Tidak ada data kelas
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>