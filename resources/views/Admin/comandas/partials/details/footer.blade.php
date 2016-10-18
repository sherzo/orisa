<div class="panel-footer">
    @if($comanda->estatus == 'En espera' AND ((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='4'))

    <button class="btn btn-primary btn-xs procesar" type="{{ $comanda->id }}"><span class="fa fa-check fa-2x"></span></button>
    @endif


	@if($comanda->estatus == 'Lista' AND ((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='5'))
	{!! Form::open(['route' => 'admin.comandas.facturar', 'method' => 'GET']) !!}
	    <input type="hidden" name="command" value="{{$comanda->id}}">
	    <button class="btn btn-primary btn-xs"><span class="fa fa-money fa-2x"></span></button>
	{!! Form::close()!!}
	@endif
</div> 