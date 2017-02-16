<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Reminder;
use Mail;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
    	return view('auth.emails.password');
    }

    public function postForgotPassword (Request $request)
    {
    	$user = User::whereEmail($request->email)->first();

    	if(count($user) != 0) {

    		return redirect()->back()->withErrors(["errors" => "Se ha enviado un código de restablecimiento a tu correo electrónico."]);
    		
    		$reminder = Reminder::exists($user) ?: Reminder::create($user);

    		$this->sendEmail($user, $reminder->code);
    	}
    }

    private function sendEmail($user, $code)
    {
    	Mail::send('auth.passwords.email', [
    		'user' => $user,
    		'code' => $code
    	], function ($message) {

    		$message->to($user->email);

    		$message->subject('Hola, '.$user->first_name.' restablece tu contraseña.');
    	});
    }
}	
