<table class="table table-bordered"  id="table_id" class="display">
			<thead>
				<tr>
					<th style="text-align:center">Item</th>
					
					<th style="text-align:center">Año</th>
					
					<th style="text-align:center">Manifiesto</th>
					
					<th style="text-align:center">Vapor</th>
					
					<th style="text-align:center">B/L Master</th>
					
					<th style="text-align:center">B/L House </th>
					
					<th style="text-align:center">Ubicación</th>
					
					<th style="text-align:center">Fecha Ingreso de Almacén </th>
					
					<th style="text-align:center">Termino de Descarga</th>
					
					<th style="text-align:center">Fecha Salida de Almacén</th>
					
					<th style="text-align:center">Abandono Legal</th>
					
					<th style="text-align:center">Consignatario</th>
					
					<th style="text-align:center">Descripción de la Mercaderia</th>
					
					<th style="text-align:center">Tipo de Bulto</th>
					
					<th style="text-align:center">Cantidad</th>
					
					<th style="text-align:center">Peso</th>
					
					<th style="text-align:center">M3</th>
					
					<th style="text-align:center">Condición</th>
					
					<th style="text-align:center">Fecha</th>
					
					<th style="text-align:center">Orden de Retiro</th>
                                        
                                        <th style="text-align:center">Saldo Peso</th>
                                        
                                        <th style="text-align:center">Saldo Bulto</th>
                                        
                                         <th style="text-align:center">Saldo M3</th>
                                         
                                         <th style="text-align:center">Ubicación</th>
					
					<th style="text-align:center">Observaciones</th>
					
				</tr>
			</thead>
		
		<tbody>
				  <?php foreach ($stock as $key=>$fila): ?>
				<tr>
					<td style="text-align:center"><?php echo $key+1 ; ?> </td>
					<td style="text-align:center"><?php // echo $fila->AÑO; ?></td>
					<td style="text-align:center"><?php //echo $fila->MANIFIESTO?>   </td>
					<td style="text-align:center"><?php //echo $fila->VAPOR; ?></td> 
					<td style="text-align:center"><?php //echo $fila->BL_MASTER; ?></td>
					<td style="text-align:center"><?php //echo $fila->BL_HOUSE; ?></td></td>
					<td style="text-align:center"><?php echo $fila->UBICACION; ?></td>
					<td style="text-align:center"><?php  echo $fila-> TERMINO_DESCARGA; ?></td>			
					<td style="text-align:center"><?php //echo $fila-> TERMINO_DESCARGA; ?></td>
                                        <td style="text-align:center"><?php echo $fila->ABANDONO_LEGAL; ?></td>
					<td style="text-align:center"><?php // echo $fila->ABANDONO_LEGAL; ?></td>
					<td style="text-align:center"><?php //echo $fila->CONSIGNATORIO; ?></td>
					<td style="text-align:center"><?php // echo $fila->DESCRIPCION_MERCADERIA; ?> </td>
					<td style="text-align:center"><?php //echo $fila->TIPO_BULT; ?> </td>
					<td style="text-align:center"><?php //echo $fila->CANT; ?></td>
					<td style="text-align:center"><?php //echo $fila->PESO; ?></td>
					<td style="text-align:center"><?php //echo $fila->m3; ?></td>
					<td style="text-align:center"><?php //echo $fila->CONDICION; ?> </td>
                                        <td style="text-align:center"><?php //echo $fila->FECHA; ?> </td>
                                        <td style="text-align:center"><?php //echo $fila->ORDEN_RETIRO; ?> </td>
                                        
                                         <td style="text-align:center"><?php //echo $fila->SALDO_PESO; ?> </td>
                                          <td style="text-align:center"><?php //echo $fila->SALDO_BULTO; ?> </td>
                                           <td style="text-align:center"><?php //echo $fila->SALDO_M3; ?> </td>
                                            <td style="text-align:center"><?php //echo $fila->UBICACION_SAVAR; ?> </td>
                                            
                                        <td style="text-align:center"><?php //echo $fila->OBSERVACIONES; ?> </td>
				</tr>
				</tr>
		<?php endforeach ?> 
		
			
		</tbody>
	</table>

