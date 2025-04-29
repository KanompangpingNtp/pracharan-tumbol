<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // if (Auth::attempt($request->only('email', 'password'))) {
        //     $request->session()->regenerate();

        //     return redirect()->route('Dashbord');
        // }

        // return back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ]);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            $status = Auth::user()->status;

            if ($status == 1) {
                return redirect()->route('Dashbord');
            } elseif ($status == 2) {
                return redirect()->route('EserviceAdminAccount');
            } elseif ($status == 3) {
                return redirect()->route('EserviceUserAccount');
            } else {
                Auth::logout(); // ถ้าสถานะไม่ตรงตามที่กำหนด ให้ออกจากระบบ
                return redirect()->route('showLoginForm')->withErrors(['status' => 'ไม่มีสิทธิ์เข้าถึงระบบ']);
            }
        }

        return back()->withErrors([
            'email' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 3,
        ]);

        return redirect('/login')->with('success', 'ลงทะเบียนสำเร็จ! กรุณาเข้าสู่ระบบ');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('HomeDataPage');
    }
}
