<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@if($errors->any())
<script>
    alert("{{ $errors->first() }}");
</script>
@endif

<div class="container">
    <div class="card-custom">

        <h3>Isi Data Diri</h3>

        <form action="{{ route('user.siswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
            </div>

            <div class="mb-3">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="id_kelas">Kelas</label>
                <select class="form-control" id="id_kelas" name="id_kelas" required>
                    <option value="">-- Pilih Kelas --</option>
                    @foreach($kelas as $k)
                        <option value="{{ $k->id }}">
                            {{ $k->nama_kelas }} - {{ $k->jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>

                <div class="d-flex gap-4 mt-2">
                    <div class="form-check">
                        <input class="form-check-input"
                               type="radio"
                               name="jenis_kelamin"
                               value="L"
                               required>
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                               type="radio"
                               name="jenis_kelamin"
                               value="P">
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="no_telp">No. Telp</label>
                <input type="text" class="form-control" name="no_telp" required>
            </div>

            <div class="button-group">
                <button type="submit" class="btn">Simpan</button>
                <a href="{{ route('user.dashboard') }}" class="btn">Kembali</a>
            </div>

        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>