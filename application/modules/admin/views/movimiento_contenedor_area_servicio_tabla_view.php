<table class="table table-bordered"  id="table_id" class="input-mini" class="display">
			<thead>
				<tr>
					<th style="text-align:center">Item</th>
					<th style="text-align:center">Nave</th>
					<th style="text-align:center">Bl-Master</th>
					<th style="text-align:center">Viaje / Rumbo</th>
					<th style="text-align:center">Operación</th>
					<th style="text-align:center">Servicios</th>
					<th style="text-align:center">Fecha de Ingreso</th>
					<th style="text-align:center">Hora de Ingreso</th>
					<th style="text-align:center">Fecha de Salida</th>					
					<th style="text-align:center">Hora de Salida</th>
					<th style="text-align:center">Contenedor</th>
					<th style="text-align:center">Tipo</th>
					<th style="text-align:center">Tamaño</th>
					<th style="text-align:center">Ubicación</th>
					<th style="text-align:center">Tipo de Carga</th>
					<th style="text-align:center">Condición</th>
					<th style="text-align:center">Observaciones</th>
					<th style="text-align:center">Tiempo</th>
				
				</tr>
			</thead>
		<tbody>
		 
			  <?php foreach ($mov_area as $key=>$fila): ?>
				<tr> 
					<td style="text-align:center"><?php echo $key+1 ; ?> </td>
					<td style="text-align:center"><?php echo $fila->NAVE_C_CODIGO; ?></td>
					<td style="text-align:center"><?php echo $fila->bl_master_cont; ?></td>
					<td style="text-align:center"><?php echo $fila->NAVIRU_C_VIAJE?>  / <?php echo $fila->rumbo_c_codigo ?>  </td>
					<td style="text-align:center"><?php echo $fila->OPERAC_C_CODIGO; ?></td> 
					<td style="text-align:center"><?php echo $fila->SERVICIO; ?></td>
					<td style="text-align:center"><?php echo substr($fila->fecha,0,10); ?></td>
					<td style="text-align:center"><?php echo substr($fila->fecha,11); ?></td>
					<td style="text-align:center"><?php echo substr($fila-> fecha_salida,0,10); ?></td>					
					<td style="text-align:center"><?php echo substr($fila-> fecha_salida,11); ?></td>
					<td style="text-align:center"><?php echo $fila->CONTEN_C_CODIGO ; ?></td>
					<td style="text-align:center"><?php echo $fila->TIPO; ?></td>
					<td style="text-align:center"><?php echo $fila->TAMAÑO; ?> pies</td>
					<td style="text-align:center"><?php echo $fila->ubicacion; ?></td>
					<td style="text-align:center"><?php echo $fila->TIPO_CARGA; ?></td>
					<td style="text-align:center"><?php echo $fila->CONCAR_C_CODIGO; ?></td>
					<td style="text-align:center"><?php echo $fila->OBSERVACIONES; ?></td>
					<td style="text-align:center"><?php echo $fila->tiempo; ?> horas</td>
				</tr>
		<?php endforeach ?>	
		
		</tbody>
	</table>

