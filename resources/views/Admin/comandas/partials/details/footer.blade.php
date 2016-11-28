<div class="panel-footer">
  @if($comanda->estatus == 'En espera' AND ((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='4'))

    <a class="btn btn-primary btn-xs" href="{{ route('admin.comandas.lista', $comanda->id) }}"><span class="fa fa-check fa-2x" title="Comanda Lista"></span></a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a class="btn btn-success btn-xs" title="Agregar a la comanda" href="{{ route('admin.comandas.add', $comanda->id) }}"><span class="fa fa-plus fa-2x"></span></a>
  @endif

    @if(((Auth::user()->roles_id)=='1' || (Auth::user()->roles_id)=='5'))

    	{!! Form::open(['route' => 'admin.comandas.facturar', 'method' => 'GET']) !!}

        <div id="contenedor{{$comanda->id}}"></div>
    	   <input type="hidden" name="command" value="{{$comanda->id}}">

      {!! Form::close()!!}

    @endif
</div>
