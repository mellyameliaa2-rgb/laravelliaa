<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>
        body {
            background: #f5f7fa;
        }

        .card-custom {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        /* ICON SOSIAL */
        .social-icons a {
            display: inline-block;
            transition: all 0.3s ease;
            animation: float 2s infinite ease-in-out;
        }

        .social-icons a:hover {
            transform: translateY(-5px) scale(1.2);
        }

        /* WARNA */
        .facebook { color: #1877f2; }
        .instagram { color: #e1306c; }
        .whatsapp { color: #25d366; }
        .google { color: #db4437; }

        /* ANIMASI */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0px); }
        }

        /* DELAY BIAR GELOMBANG */
        .social-icons a:nth-child(1) { animation-delay: 0s; }
        .social-icons a:nth-child(2) { animation-delay: 0.2s; }
        .social-icons a:nth-child(3) { animation-delay: 0.4s; }
        .social-icons a:nth-child(4) { animation-delay: 0.6s; }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    <div class="card-custom text-center" style="max-width:420px; width:100%;">

        <h3 class="mb-3">Login</h3>

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <!-- EMAIL -->
            <div class="mb-3 text-start">
                <label>Email</label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                >

                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- PASSWORD -->
            <div class="mb-3 text-start">
                <label>Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Masukkan password"
                >

                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- ERROR LOGIN -->
            @error('login')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
        </form>

        <!-- SOCIAL ICON -->
        <div class="mt-3">
            <p class="mb-2 text-muted">Follow us</p>

            <div class="d-flex justify-content-center gap-4 fs-3 social-icons">
                <a href="#"><i class="bi bi-facebook facebook"></i></a>
                <a href="#"><i class="bi bi-instagram instagram"></i></a>
                <a href="#"><i class="bi bi-whatsapp whatsapp"></i></a>
                <a href="#"><i class="bi bi-google google"></i></a>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>