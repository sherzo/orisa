<div class="panel-footer">
  @if($comanda->estatus == 'En espera' AND (Sentinel::getUser()->roles()->first()->slug =='1') || (Sentinel::getUser()->roles()->first()->slug =='4'))

    <a class="btn btn-primary btn-xs" href="{{ route('admin.comandas.lista', $comanda->id) }}"  data-toggle="tooltip" data-placement="right" title="Lista"><span class="fa fa-check fa-2x"></span></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="btn btn-success btn-xs" href="{{ route('admin.comandas.add', $comanda->id) }}" data-toggle="tooltip" data-placement="right" title="Agregar"><span class="fa fa-plus fa-2x"></span></a>
  @endif

    @if(((Sentinel::getUser()->roles()->first()->slug) =='1' || ( Sentinel::getUser()->roles()->first()->slug) =='5'))

    	{!! Form::open(['route' => 'admin.comandas.facturar', 'method' => 'GET']) !!}

        <div id="contenedor{{$comanda->id}}"></div>
    	   <input type="hidden" name="command" value="{{$comanda->id}}" data-toggle="tooltip" title="Facturar">

      {!! Form::close()!!}

    @endif
</div>
