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
			<td>{{ $plato->precio }} bs</td>
			<td>{{ $cantidad*$plato->precio }} bs</td>
			
		</tr>
			<?php $cantidad = 1; #Restablesco la cantidad a 1 
				 }
				
				$siguiente++; #Incrementa en contador de comparación ?>
		@else
		<tr>
			<td>{{ $plato->plato }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $plato->precio }} bs</td>
			<td>{{ $cantidad*$plato->precio }} bs</td>
		</tr>
		@endif
@endforeach

@foreach($tragos as $trago)
	<tr>
		<td>{{ $trago->trago }} </td>
		
		<td>{{ $trago->precio }} bs</td>
		
	</tr>
@endforeach

@foreach($bebidas as $bebida)
	<tr>
		<td>{{ $bebida->bebida }} </td>
		
		<td>{{ $bebida->precio }} bs</td>
		
	</tr>
@endforeach

@foreach($jugos as $jugo)
	<tr>
		<td>{{ $jugo->jugo }} </td>
		
		<td>{{ $jugo->precio }} bs</td>
		
	</tr>
@endforeach
