<table class="table table-bordered"  id="table_id" class="display">
			<thead>
				<tr>
					<th style="text-align:center">Item</th>
					<th style="text-align:center">Nave</th>
					<th style="text-align:center">Bl - Mater</th>
					<th style="text-align:center">Viaje / Rumbo</th>
					<th style="text-align:center">Operación</th>
					<th style="text-align:center">Contenedor</th>	
					<th style="text-align:center">Tipo</th>
					<th style="text-align:center">Tamaño</th>
					<th style="text-align:center">Ubicación</th>
					<th style="text-align:center">Fecha</th>
					<th style="text-align:center">Hora</th>
					<th style="text-align:center">Tipo de Carga</th>
					<th style="text-align:center">Condición</th>
					<th style="text-align:center">Nueva Ubicación</th>
					<th style="text-align:center">Stacker</th>
					<th style="text-align:center">Usuario</th>
					
					<th style="text-align:center">Observaciones</th>
				</tr>
			</thead>
		<tbody>
			 
			 <?php foreach ($mov_ctns as $key => $fila): ?>
				<tr>
					<td style="text-align:center"><?php echo $key+1 ; ?></td>
					<td style="text-align:center"><?php echo $fila->NAVE_C_CODIGO; ?></td>
					<td style="text-align:center"><?php echo $fila->OPERAC_C_CODIGO; ?></td>
					<td style="text-align:center"><?php echo $fila->NAVIRU_C_VIAJE?>  / <?php echo $fila->rumbo_c_codigo ?>  </td>

					<td style="text-align:center"><?php echo $fila->OPERAC_C_CODIGO; ?></td>
					<td style="text-align:center"><?php echo ($fila->CONTEN_C_CODIGO) ; ?></td>
					<td style="text-align:center"><?php echo ($fila->TIPO) ; ?></td>
					<td style="text-align:center"><?php echo ($fila->TAMAÑO) ; ?> pies</td>
					<td style="text-align:center"><?php echo ($fila->ubicacion) ; ?></td>
					<td style="text-align:center"><?php echo substr($fila->fecha,0,10); ?></td>
					<td style="text-align:center"><?php echo substr($fila->fecha,11) ; ?></td>
					<td style="text-align:center">IMO</td>
					<td style="text-align:center">Inmovilizado</td>
					<td style="text-align:center"><?php echo ($fila->nueva_ubicacion) ; ?></td>
					<td style="text-align:center"><?php echo ($fila->STACKERS) ; ?></td>
					<td style="text-align:center"><?php echo ($fila->usuario) ; ?></td>
					<td style="text-align:center">Observaciones 1</td>
				</tr>
				<?php endforeach ?>	
			</tbody>
		
	</table>

