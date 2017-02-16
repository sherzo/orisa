<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function postRegister(Request $request)
    {
    	# code...
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required', 'email' => 'required|unique:users', 'password' => 'required|min:6|confirmed', 'password_confirmation' => 'required|min:6'
        ]);
    }
}
