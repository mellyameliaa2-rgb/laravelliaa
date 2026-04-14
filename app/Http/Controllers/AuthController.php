<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    // LOGIN
    public function login(Request $request): RedirectResponse
    {
        // VALIDASI
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        // AMBIL DATA
        $credentials = $request->only('email', 'password');

        // CEK LOGIN
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // 🔥 ROLE CHECK
            if ($user->role_id == 1) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('user.dashboard');
        }

        // ❌ LOGIN GAGAL
        return back()->withErrors([
            'login' => 'Email atau password salah'
        ])->onlyInput('email');
    }

    // LOGOUT
    public function logout(): RedirectResponse
{
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');
}
}