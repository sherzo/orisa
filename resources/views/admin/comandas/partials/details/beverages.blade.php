<!-- TRAGOS -->
@if($comanda->beverages != '[]')
	<li class="list-group-item bg-info"><strong><em>Tragos </em></strong><span class="fa fa-glass"></span></li>
	<?php
	$siguiente = 1; #Variable para comparar
	$cantidad = 1; #Cantidad de platos
	?>

	@foreach($comanda->beverages as $key2 => $beverage)

		@if(isset($comanda->beverages[$siguiente]))
			<?php
			if($beverage->id == $comanda->beverages[$siguiente]->id){

				$cantidad++;

				}else{ ?>

       					<li class="list-group-item ">{{ $cantidad }} {{ $beverage->trago }}</li>

       					<?php $cantidad = 1; #Restablesco la cantidad a 1
       				 }

       		$siguiente++; #Incrementa en contador de comparación ?>

   		@else
   			<li class="list-group-item">{{ $cantidad }} {{ $beverage->trago }}</li>
   		@endif

    @endforeach
@endif
