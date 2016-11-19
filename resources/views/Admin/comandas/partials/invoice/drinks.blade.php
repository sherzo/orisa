<?php 
$siguiente = 1; #Variable para comparar
$cantidad = 1; #Cantidad de platos
?>
@foreach($bebidas as $bebida)
	@if(isset($bebidas[$siguiente])) 

		<?php 
		if($bebida->id == $bebidas[$siguiente]->id){
			
			$cantidad++;
			
			}else{ ?>
		<tr>
			<td>{{ $bebida->bebida }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $bebida->precio }} </td>
			<td>{{ $cantidad*$bebida->precio }} </td>
			
		</tr>
			<?php $cantidad = 1; #Restablesco la cantidad a 1 
				 }
				
				$siguiente++; #Incrementa en contador de comparación ?>
		@else
		<tr>
			<td>{{ $bebida->bebida }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $bebida->precio }} bs</td>
			<td>{{ $cantidad*$bebida->precio }} </td>
		</tr>
		@endif
@endforeach