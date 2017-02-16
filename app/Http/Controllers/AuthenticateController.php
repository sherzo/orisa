<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\CheckpointInterface;
use Cartalyst\Sentinel\Users\UserInterface;
use Cartalyst\Sentinel\Users\EloquentUser;

use App\Http\Requests;

use App\Portal;
use Sentinel;
use Auth;
use View;

class AuthenticateController extends Controller
{
    public function index()
    {
    	$portal = Portal::where('estatus', true)->first();

		$platos = $portal->plates()->get();

		if(!Sentinel::guest() AND (Sentinel::getUser()->roles()->first()->slug) == '7')
		{
			$cliente = Sentinel::getUser()->client[0]->id;
			$reservaciones = App\Reservation::where('client_id', $cliente)->get();

		}else{

			$reservaciones = 0;
		}

		return View::make('welcome', compact('platos', 'reservaciones'));
    }

    public function postLogin(Request $request)
    {
    	$this->validateLogin($request);

    	try {

        	if($user = Sentinel::authenticate($request->all()))
            {

            if($user->status != 0){

            	$slug = Sentinel::getUser()->roles()->first()->slug;

            if($slug == '7') {

            	return redirect('/');

            } else {

        	    $slug = Sentinel::getUser()->roles()->first()->slug;
                	
                return redirect('/admin');
            }

            } else {

                return redirect()->back()->withErrors(["errors" => "Se ha producido una actividad sospechosa y se le ha denegado el acceso, porfavor verifique su correo electrónico para activar su cuenta."]);
            }

            } else {

            if(\DB::table('users')->where('email', $request->email)->exists())
            {
                $credentials = EloquentUser::where('email', $request->email)->first();

            if($credentials->attempts != 0) {

                $credentials->attempts = $credentials->attempts-1;
                $credentials->save();

            if($credentials->attempts == 0){

                $credentials->status = 0;
                $credentials->save();

            }

            if($credentials->attempts != 0) {

                return redirect()->back()->withErrors(["errors" => "Estas credenciales son incorrectas, número de intentos restantes. " . $credentials->attempts]);

            } else {

                return redirect()->back()->withErrors(["errors" => "Se ha producido una actividad sospechosa y se le ha denegado el acceso, porfavor verifique su correo electrónico para activar su cuenta."]);
            }

            } else {

                return redirect()->back()->withErrors(["errors" => "Se ha producido una actividad sospechosa y se le ha denegado el acceso, porfavor verifique su correo electrónico para activar su cuenta."]);
            }   

            } else {

                return redirect()->back()->withErrors(["errors" => "Estas credenciales son incorrectas"]);
            }

            }

        } catch (ThrottlingException $e) {

            $delay = $e->getDelay();

            return redirect()->back()->withErrors(["errors" => "Se ha producido una actividad sospechosa y se le ha denegado el acceso, porfavor verifique su correo electrónico para activar su cuenta."]);

        }
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

    }

    public function loginUsername()
    {
        return property_exists($this, 'username') ? $this->username : 'email';
    }

    public function logout()
    {
        Sentinel::logout();

        return redirect('/');
    }

    public function getLogin(){

        return view('auth.login');

    }

}
