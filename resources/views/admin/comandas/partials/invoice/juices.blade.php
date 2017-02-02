<?php 
$siguiente = 1; #Variable para comparar
$cantidad = 1; #Cantidad de platos
?>
@foreach($jugos as $jugo)
	@if(isset($jugos[$siguiente])) 

		<?php 
		if($jugo->id == $jugos[$siguiente]->id){
			
			$cantidad++;
			
			}else{ ?>
		<tr>
			<td>{{ $jugo->jugo }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $jugo->precio }} bs</td>
			<td>{{ $cantidad*$jugo->precio }}</td>
			
		</tr>
			<?php $cantidad = 1; #Restablesco la cantidad a 1 
				 }
				
				$siguiente++; #Incrementa en contador de comparación ?>
		@else
		<tr>
			<td>{{ $jugo->jugo }} </td>
			<td>{{ $cantidad }}</td>
			<td>{{ $jugo->precio }} bs</td>
			<td>{{ $cantidad*$jugo->precio }}</td>
		</tr>
		@endif
@endforeach