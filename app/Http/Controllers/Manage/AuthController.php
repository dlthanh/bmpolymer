<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/cPanel';

    public function showLoginForm()
    {
        return view('manage.auth.login');
    }

    public function login(Request $request)
    {
        if($this->guard()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('manage.index');
        }

        return redirect()->back()
            ->withInput()
            ->with(['message' => 'Thông tin đăng nhập không chính xác']);
    }

    protected function guard()
    {
        return Auth::guard('manage');
    }
}
