<?php 
$siguiente = 1; #Variable para comparar
$cantidad = 1; #Cantidad de platos
?>
@foreach($tragos as $trago)
	@if(isset($tragos[$siguiente])) 

		<?php 
		if($trago->id == $tragos[$siguiente]->id){
			
			$cantidad++;
			
			}else{ ?>
		<tr>
			<td>{{ $trago->trago }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $trago->precio }} bs</td>
			<td>{{ $cantidad*$trago->precio }} bs</td>
			
		</tr>
			<?php $cantidad = 1; #Restablesco la cantidad a 1 
				 }
				
				$siguiente++; #Incrementa en contador de comparación ?>
		@else
		<tr>
			<td>{{ $trago->trago }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $trago->precio }} bs</td>
			<td>{{ $cantidad*$trago->precio }} bs</td>
		</tr>
		@endif
@endforeach