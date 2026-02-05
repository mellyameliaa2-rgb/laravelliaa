<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS KAMU TERAKHIR -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">
    <div class="card-custom">

        <h3><b>Edit Kelas<b></h3>

        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text"
                       class="form-control"
                       id="nama_kelas"
                       name="nama_kelas"
                       value="{{ $kelas->nama_kelas }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text"
                       class="form-control"
                       id="jurusan"
                       name="jurusan"
                       value="{{ $kelas->jurusan }}"
                       required>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-outline-dark">
                    Update
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
