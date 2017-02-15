<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\CheckpointInterface;

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

		if(!Sentinel::guest() AND (Sentinel::getUser()->roles()->first()->slug) == 'Tipo 5')
		{
			$cliente = Sentinel::getUser()->client[0]->id;
			$reservaciones = App\Reservation::where('client_id', $cliente)->get();
		}else{

			$reservaciones = 0;
		}

		return View::make('auth.login', compact('platos', 'reservaciones'));
    }

    public function postLogin(Request $request)
    {
    	$this->validateLogin($request);

    	//dd($request->all());

    	try {

        	if(Sentinel::authenticate($request->all()))
            {
            	$slug = Sentinel::getUser()->roles()->first()->slug;
            	//dd($slug);
            	if($slug == 'Tipo 5') {

            		return redirect('/');

            	} else {

            		return redirect('/admin');
            	}
                
            } else {

                return redirect()->back()->withErrors(["errors" => "Estas credenciales son incorrectas"]);
            }

        } catch (ThrottlingException $e) {
            dd($e);
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

}
