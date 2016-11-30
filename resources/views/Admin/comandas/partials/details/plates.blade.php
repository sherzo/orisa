@if($comanda->plates != '[]')
	<li class="list-group-item bg-info"><strong><em>Platos </em></strong><span class="fa fa-cutlery"></span></li>
	<?php
	$siguiente = 1; #Variable para comparar
	$cantidad = 1; #Cantidad de platos
	?>

	@foreach($comanda->plates as $key2 => $plate)

		@if(isset($comanda->plates[$siguiente]))
			<?php
			if($plate->id == $comanda->plates[$siguiente]->id){

				$cantidad++;

				}else{ ?>

       					<li class="list-group-item ">{{ $cantidad }} {{ $plate->plato }}</li>

       					<?php $cantidad = 1; #Restablesco la cantidad a 1
       				 }

       		$siguiente++; #Incrementa en contador de comparación ?>

   		@else
   			<li class="list-group-item">{{ $cantidad }} {{ $plate->plato }}</li>
   		@endif

    @endforeach
@endif
