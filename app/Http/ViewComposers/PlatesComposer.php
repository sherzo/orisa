<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Portal;

class PlatesComposer {

	/**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
	public function compose(View $view)
	{
		$portal = Portal::where('estatus', true)->first();

	    $platos = (empty($portal) === false) ? $platos = $portal->plates()->get() : [];

	    $view->with(['portal' => $portal, 'platos' => $platos]);
	}
}