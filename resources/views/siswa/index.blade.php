<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/2index.css') }}"> 
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
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-house-door me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelas.index') }}">
                        <i class="bi bi-building me-1"></i> Data Kelas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('siswa.index') }}">
                        <i class="bi bi-people me-1"></i> Data Siswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa.create') }}">
                        <i class="bi bi-person-plus me-1"></i> Tambah Siswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelas.create') }}">
                        <i class="bi bi-plus-circle me-1"></i> Tambah Kelas
                    </a>
                </li>
                <li class="nav-item">
    <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="nav-link btn btn-link text-white" style="text-decoration:none;">
            <i class="bi bi-box-arrow-right me-1"></i> Logout
        </button>
    </form>
</li>
            </ul>
        </div>
    </div>
</nav>
<script>
// Auto detect navbar dan tambah class ke body
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.navbar')) {
        document.body.classList.add('has-navbar');
        
        // Scroll effect untuk navbar
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

        <h1><b>Data Siswa<b></h1>

        <a href="{{ route('siswa.create') }}" class="btn btn-outline-dark mb-3">
            Tambah Siswa
        </a>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>ID Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($siswa as $dt)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dt->nis }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ optional($dt->kelas)->nama_kelas ?? '-' }}</td>
                        @if( $dt->jenis_kelamin == 'L')
                        <td>Laki-laki</td>
                        @else<td>Perempuan</td>
                        @endif
                       <td>
   <a href="tel:{{ preg_replace('/[^0-9+]/', '', $dt->no_telp) }}">
        <i class="bi bi-telephone-fill me-1"></i>
        {{ $dt->no_telp }}
    </a>
</td>
                       <td>
    <a href="https://www.google.com/maps?q={{ urlencode($dt->alamat) }}" 
       target="_blank"
       style="text-decoration: none; color: inherit;">
       
        <i class="bi bi-geo-alt-fill" style="color:#a8572e;"></i>
        {{ $dt->alamat }}
    </a>
</td>
<td class="d-flex justify-content-center gap-2">

    <a href="{{ route('siswa.edit', $dt->id) }}"
       class="btn btn-outline-secondary btn-sm">
        Edit
    </a>

    <form method="POST"
          action="{{ route('siswa.destroy', $dt->id) }}"
          onsubmit="return confirm('Yakin ingin menghapus siswa {{ $dt->nama }}?')">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-outline-danger btn-sm">
            Hapus
        </button>
    </form>

</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>