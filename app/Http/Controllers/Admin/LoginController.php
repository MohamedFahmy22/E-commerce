<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show_login_form()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {

        if (auth()->guard('admin')->attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->route('admin.dashboard');
        }
        else {
            return redirect()->route('admin.showlogin');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.showlogin');
    }

/* public function add_new_admin(){

    php artisan tinker
 $admin = new Admin();
 $admin->name = 'Fahmy';
 $admin->email = 'Fahmy@yahoo.com';
 $admin->username = 'Fahmy';
 $admin->password = Hash::make('123456789');
 $admin->company_code = 1;
 $admin->added_by = 1;
 $admin->updated_by = 2;
 $admin->updated_at = '2022-09-19 19:47:38';
 $admin->created_at = '2022-09-18 19:47:38';
 $admin->save();
 }*/
}
