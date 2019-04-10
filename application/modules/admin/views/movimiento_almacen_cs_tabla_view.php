<table class="table table-bordered"  id="table_id" class="display">
    <thead>
        <tr>
            <th style="text-align:center">Item</th>
            <th style="text-align:center">BL-HIJO</th>
            <th style="text-align:center">RFID</th>
            <th style="text-align:center">FECHA DE INGRESO</th>
            <th style="text-align:center">ESTADO</th>
            

        </tr>
    </thead>

    <tbody>

        <?php foreach ($movimiento_almacen as $key => $value): ?>
            <tr>
                <td style="text-align:center"><?php echo $key +1; ?></td>
                <td style="text-align:center"><?php echo ($value->BL_HIJO); ?></td>
                <td style="text-align:center"><?php echo ($value->COD_RFID_CARGA); ?></td>
                <td style="text-align:center"><?php echo ($value->FECHA_MOV_CARGA_ENTRADA ); ?></td>
                
                <td style="text-align:center"><?php echo ($value->ESTADO_CARGA ); ?></td>
                

            </tr>
        <?php endforeach ?>
    </tbody>



</tbody>

</table>