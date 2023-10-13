<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title_page' => 'Login Page',
        ];

        return view('auth.index', $data);
    }

    public function authenticate(AuthRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'status' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
