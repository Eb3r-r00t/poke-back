<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'type' => ['required', 'in:user,customer'],
        ]);

        ['type' => $type] = $credentials;
        unset($credentials['type']);

        if (Auth::guard($type)->attempt($credentials)) {
            $request->session()->regenerate();

            return response(['status' => 'success']);
        }

        return response(['status' => 'invalid credentials'], 403);
    }

    public function logout(Request $request)
    {
        $guard = Auth::guard('user')->check() ? 'user' : 'customer';

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Auth::guard($guard)->logout();

        return response(['status' => 'success']);
    }
}
