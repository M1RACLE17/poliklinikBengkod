<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return view ('auth.login');
    }

    public function showRegister(){
        return view ('auth.register');
    }

    public function loginPost(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == 'dokter') {
                return redirect()->route('dokter.dashboard');
            }
            elseif (Auth::user()->role == 'pasien') {
                return redirect()->route('pasien.dashboard');
            }
            elseif (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            else {
                return redirect()->route('login');
            }
 
           
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
   public function storeAkun(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15|regex:/^([0-9\s\-\+\(\)]*)$/',
            'no_ktp' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Hitung jumlah pasien yang sudah ada
        $jumlahPasien = User::where('role', 'pasien')->count() + 1;
        
        // Format no_rm: YYYYMM-XXX
        $no_rm = now()->format('Ym') . '-' . str_pad($jumlahPasien, 3, '0', STR_PAD_LEFT);

        // // Generate email dan password default
        // $email = 'pasien' . $jumlahPasien . '@example.com';
        // $password = bcrypt('password123'); // password default, bisa diganti sesuai kebutuhan

        User::create([
            'nama' => $validateData['nama'],
            'email' => $validateData['email'],
            'password' => bcrypt($validateData['password']),
            'alamat' => $validateData['alamat'],
            'no_hp' => $validateData['no_hp'],
            'no_ktp' => $validateData['no_ktp'],
            // 'email' => $email,
            // 'password' => $password,
            'role' => 'pasien',
            'no_rm' => $no_rm,
        ]);

        return redirect()->route('login')->with('success', 'Akun pasien berhasil dibuat!');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
