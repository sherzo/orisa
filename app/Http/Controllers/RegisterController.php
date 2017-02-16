<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;

use App\Client;
use App\User;
use Sentinel;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function postRegister(Request $request)
    {
    	$this->validateLogin($request);

    	if($email = Client::where('correo', $request->email)->exists()){
    		
    		if($validation = User::whereEmail($request->email)->exists()){

    			return redirect()->back()->withErrors(["errors" => "Disculpe el correo electrónico $request->email ya se encuentra registrado"]);

    		} else {

    			$user = Sentinel::register($request->all());

                $activation = \Activation::create($user);

                $role = Sentinel::findRoleBySlug(7);

                $role->users()->attach($user);

                $this->sendEmail($user, $activation->code);

                Flash::success('Se ha enviado un correo de activación a su correo '.$request->email.' porfavor active su cuenta.');

                return redirect('iniciarsesion');
    		}

    	} else {

    		return redirect()->back()->withErrors(["errors" => "Disculpe el correo electrónico $request->email no se encuentra registrado como cliente."]);
    	}
    }

    private function sendEmail($user, $code)
    {
        \Mail::send('auth.activation', [
                'user' => $user,
                'code' => $code
            ], function ($message) use ($user) {
                $message->to($user->email);

                $message->subject("Hola, $user->first_name, activa tu cuenta.");
        });
    }
    
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required', 'email' => 'required|unique:users', 'password' => 'required|min:6|confirmed', 'password_confirmation' => 'required|min:6'
        ]);
    }
}
