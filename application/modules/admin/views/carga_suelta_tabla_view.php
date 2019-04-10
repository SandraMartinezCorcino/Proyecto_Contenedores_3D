<table class="table table-bordered"  id="table_id" class="display">
			<thead>
				<tr>
					<th style="text-align:center">Item</th>
					<th style="text-align:center">RFID</th>
                    <th style="text-align:center">BL_HIJO</th>
                     <th style="text-align:center">FECHA Y HORA</th>
					
					
				</tr>
			</thead>
		<tbody>
	        <?php foreach ($carga_suelta_all as $key=>$value): ?>
	     		<tr>
						<td style="text-align:center"><?php echo $key+1 ;?></td>
						<td style="text-align:center"><?php echo ($value->COD_RFID) ; ?></td>
                        <td style="text-align:center"><?php echo ($value-> BL_HIJO ) ; ?></td>
                        <td style="text-align:center"><?php echo ($value-> FECHA_VINCULACION ) ; ?></td>

				
                                                
                                               
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

