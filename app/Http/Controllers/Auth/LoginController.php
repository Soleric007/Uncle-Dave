<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Hardcoded or from .env
        $adminUsername = env('ADMIN_USERNAME', 'admin');
        $adminPassword = env('ADMIN_PASSWORD', 'password123');

        if ($request->username === $adminUsername && $request->password === $adminPassword) {
            // Store admin_id in session (matching what AdminAuth middleware checks)
            session(['admin_id' => 1]);
            session(['admin_username' => $request->username]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Invalid username or password'])->withInput();
    }

    // Logout admin
    public function logout(Request $request)
    {
        // Clear admin session
        $request->session()->forget(['admin_id', 'admin_username']);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
