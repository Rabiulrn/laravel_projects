<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegistration()
    {
        return view('registration');
    }

    public function userLogin()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // Logic to authenticate user
    }

    public function logout(Request $request)
    {
        // Logic to logout user
    }
}
