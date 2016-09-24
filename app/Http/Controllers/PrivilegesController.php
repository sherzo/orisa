<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Module;
use App\Modules_has_action;
use App\User;
use App\Users_modules_action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;


class PrivilegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::findOrFail($id);
        $user->each(function($user){
            $user->modules_actions;
        });

         // dd($user->modules_actions);

        

        $modules_actions = Modules_has_action::all();
        $modules_actions->each(function($modules_actions){
            $modules_actions->modulo;
            $modules_actions->accion;
        });

        $modules = Module::all();

        return view('admin.privileges.edit', compact('modules_actions', 'modules', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->each(function($user){
            $user->modules_actions;
        });

        // $user_modules_actions = Users_modules_action::where('user_id', $user->id)->get();

        // dd($user_modules_actions);
        // $coinciden = $user->modules_actions->diff($request->privileges);
        // dd($coinciden);

        // Elimino los privilegios anteriores del usuario
        foreach ($user->modules_actions as $key => $value) {
            DB::table('Users_modules_actions')->where('id', $value->id)->delete();
        }

        // Creo lo nuevos privilegios del usuario
        foreach ($request->privileges as $key => $value) {
            $privilege = new Users_modules_action();
            $privilege->user_id = $id;
            $privilege->module_action_id = $value;
            $privilege->save();
        }

        Flash::success('<strong>Exito </strong> se cambiaron los privilegios correctamente.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
