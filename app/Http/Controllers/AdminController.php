<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Memproses login admin
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt login dengan guard 'admin'
        if (Auth::attempt($credentials, $request->remember)) {


            return redirect()->intended(route('admin.dashboard'));
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email', 'remember'));
    }

    // Logout admin
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate session


        return redirect()->route('admin.login')->with('status', 'Anda telah logout.');
    }

    // Dashboard admin
    public function index()
    {
        return view('admin.index');
    }
}
