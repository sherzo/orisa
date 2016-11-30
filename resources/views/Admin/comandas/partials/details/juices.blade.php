 <!-- JUGOS -->
@if($comanda->juices != '[]')
	<li class="list-group-item bg-info"><strong><em>Jugos </em></strong></li>
	<?php
	$siguiente = 1; #Variable para comparar
	$cantidad = 1; #Cantidad de platos
	?>

	@foreach($comanda->juices as $key2 => $juice)

		@if(isset($comanda->juices[$siguiente]))
			<?php
			if($juice->id == $comanda->juices[$siguiente]->id){

				$cantidad++;

				}else{ ?>

       					<li class="list-group-item ">{{ $cantidad }} {{ $juice->jugo }}</li>

       					<?php $cantidad = 1; #Restablesco la cantidad a 1
       				 }

       		$siguiente++; #Incrementa en contador de comparación ?>

   		@else
   			<li class="list-group-item">{{ $cantidad }} {{ $juice->jugo }}</li>
   		@endif

    @endforeach
@endif
