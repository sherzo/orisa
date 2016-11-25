<div class="panel-footer">
    @if($comanda->estatus == 'En espera' AND ((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='4'))
    <button class="btn btn-primary btn-xs procesar" type="{{ $comanda->id }}"><span class="fa fa-check fa-2x" title="Comanda Lista"></span></button>
    @endif

    @if(((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='5'))

    	{!! Form::open(['route' => 'admin.comandas.facturar', 'method' => 'GET']) !!}

        <div id="contenedor{{$comanda->id}}"></div>
    	   <input type="hidden" name="command" value="{{$comanda->id}}">

      {!! Form::close()!!}

    @endif
</div>
