<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return inertia::render('Admin/Auth/Login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => 1])) {
            return redirect()->route('admin.dashboard'); // Redirect to the admin dashboard
        }
        return redirect()->route("admin.login")->with('error', 'Invalid credentials.');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();

        return redirect()->route('admin.login');
    }
}