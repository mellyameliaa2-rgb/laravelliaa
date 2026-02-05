<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Kelas</title>

    <!-- BOOTSTRAP DULU -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS KAMU TERAKHIR -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>



<div class="container">
    <div class="card-custom">

        <h3><b>Tambah Kelas<b></h3>

        <form action="{{ route('kelas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="masukkan nama kelas" required >
            </div>

            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="masukkan nama jurusan" required>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-outline-dark">
                    Simpan
                </button>

                <a href="{{ route('kelas.index') }}" class="btn btn-outline-dark">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
