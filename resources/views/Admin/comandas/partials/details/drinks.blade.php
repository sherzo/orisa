<!-- BEBIDAS -->

@if($comanda->drinks != '[]')
	<li class="list-group-item bg-info"><strong><em>Bebidas </em></strong><span class="fa fa-coffee"></span></li>
	<?php
	$siguiente = 1; #Variable para comparar
	$cantidad = 1; #Cantidad de platos
	?>

	@foreach($comanda->drinks as $key2 => $drink)

		@if(isset($comanda->drinks[$siguiente]))
			<?php
			if($drink->id == $comanda->drinks[$siguiente]->id){

				$cantidad++;

				}else{ ?>

       					<li class="list-group-item ">{{ $cantidad }} {{ $drink->bebida }}</li>

       					<?php $cantidad = 1; #Restablesco la cantidad a 1
       				 }

       		$siguiente++; #Incrementa en contador de comparación ?>

   		@else
   			<li class="list-group-item">{{ $cantidad }} {{ $drink->bebida }}</li>
   		@endif

    @endforeach
@endif
