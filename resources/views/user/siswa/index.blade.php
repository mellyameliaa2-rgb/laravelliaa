<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/2index.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #70442a;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-family: 'Playfair Display', serif; font-weight: 700;">
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
                    <a class="nav-link" href="{{ route('user.kelas.index') }}">
                        <i class="bi bi-building me-1"></i> Data Kelas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.siswa.index') }}">
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
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }
});
</script>

<div class="container">
    <div class="card-custom">

        <h1><b>Data Siswa</b></h1>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($siswa as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->nis }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ optional($dt->kelas)->nama_kelas ?? '-' }}</td>

                        <td>
                            {{ $dt->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                        </td>

                        <td>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $dt->no_telp) }}">
                                <i class="bi bi-telephone-fill me-1"></i>
                                {{ $dt->no_telp }}
                            </a>
                        </td>

                        <td>
                            <a href="https://www.google.com/maps?q={{ urlencode($dt->alamat) }}"
                               target="_blank"
                               style="text-decoration:none; color:inherit;">
                                <i class="bi bi-geo-alt-fill" style="color:#a8572e;"></i>
                                {{ $dt->alamat }}
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            Tidak ada data siswa
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>

</body>
</html>