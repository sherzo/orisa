<?php 
$siguiente = 1; #Variable para comparar
$cantidad = 1; #Cantidad de platos
?>
@foreach($platos as $plato)
	@if(isset($comanda->plates[$siguiente])) 

		<?php 
		if($plato->id == $platos[$siguiente]->id){
			
			$cantidad++;
			
			}else{ ?>
		<tr>
			<td>{{ $plato->plato }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $plato->precio }}</td>
			<td>{{ $cantidad*$plato->precio }}</td>
			
		</tr>
			<?php $cantidad = 1; #Restablesco la cantidad a 1 
				 }
				
				$siguiente++; #Incrementa en contador de comparación ?>
		@else
		<tr>
			<td>{{ $plato->plato }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $plato->precio }}</td>
			<td>{{ $cantidad*$plato->precio }}</td>
		</tr>
		@endif
@endforeach