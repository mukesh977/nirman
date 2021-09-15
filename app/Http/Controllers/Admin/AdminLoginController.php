<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    protected $login_view = 'backend.auth.login';


    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    // }


    public function show_login_form()
    {
        return view($this->login_view);
    }



    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ],$request->remember)) {
            return redirect()->intended(route('admin.home'));
        }

        return redirect()
        ->back()
        ->withInput($request->only('email', 'remember'))
        ->with('error_msg', 'Credential Mismatch');
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('admin.show_login_form')
            ->with('success_msg', 'Admin has been logged out!');
    }
}
