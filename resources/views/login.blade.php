@if ($errors->any())
    <div class="alert alert-danger text-center fw-bold">
        {{ $errors->first() }}
    </div>
@endif
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="card-custom" style="max-width:420px; width:100%;">

        <h3>Login</h3>

<form action="{{ route('login.post') }}" method="POST">
    @csrf

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email"
                       id="email"
                       name="email"
                       class="form-control"
                       placeholder="Masukkan email"
                       required>
            </div>

            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password"
                       id="password"
                       name="password"
                       class="form-control"
                       placeholder="Masukkan password"
                       required>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-outline">
                    Login
                </button>
            </div>

        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
