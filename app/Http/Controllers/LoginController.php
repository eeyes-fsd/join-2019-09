<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController as BaseController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class LoginController extends BaseController
{
    public function create()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        if ($request->has('password') && $request->password === config('admin.password')) {
            $user = User::find(1);
            Auth::login($user);

            return redirect()->intended('/admin');
        }

        throw new AccessDeniedHttpException('密码错误');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
