<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if ($credentials['username'] === 'admin' && $credentials['password'] === 'password123') {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    }

    public function dashboard()
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('admin.index');
        }
        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.index');
    }
}