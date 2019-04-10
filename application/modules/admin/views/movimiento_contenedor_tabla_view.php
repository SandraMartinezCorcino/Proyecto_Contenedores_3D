<table class="table table-bordered"  id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">ITEM</th>
                                        <th style="text-align:center">AÑO</th>
                                        <th style="text-align:center">MANIFIESTO</th>
                                        <th style="text-align:center">VAPOR</th>
                                        <th style="text-align:center">B/L MASTER</th>
                                        <th style="text-align:center">B/L HOUSE</th>
                                        <th style="text-align:center">FECHA INGRESO </th>
                                        <th style="text-align:center">HORA INGRESO </th>
                                        <th style="text-align:center"> TERMINO DESCARGA</th>
                                        <th style="text-align:center">ABANDONO LEGAL</th>
                                        <th style="text-align:center">CONSIGNATORIO</th>
                                        <th style="text-align:center">DESCRIPCION DE LA MERCADERIA </th>
                                        <th style="text-align:center">N° CONTENEDOR </th>
                                        <th style="text-align:center">UBICACION</th>
                                       <!-- <th style="text-align:center">FECHA SALIDA </th>-->
                                        <th style="text-align:center">TAMAÑO </th>	
                                        <th style="text-align:center">TIPO </th>
                                        <th style="text-align:center">PESO </th>
                                        <th style="text-align:center">TIPO/CARGA </th>
                                        <th style="text-align:center">CONDICIÓN </th>
                                        <th style="text-align:center">AUTORIZACIÓN DE RETIRO</th>
                                        <th style="text-align:center">USUARIO</th>
                                        <th style="text-align:center">OBSERVACIONES</th>	
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($movimiento_contenedor as $key => $fila): ?>
                                        <tr>
                                            <td style="text-align:center"><?php echo $key + 1; ?></td>
                                            <td style="text-align:center"> <?php //echo $fila->ANHO; ?></td>
                                            <td style="text-align:center"> <?php //echo $fila->MANIFIESTO; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->VAPOR; ?></td> 
                                            <td style="text-align:center"><?php echo $fila->bl_master_cont; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->BL_HOUSE; ?></td>
                                            <td style="text-align:center"><?php echo substr($fila->fecha, 0, 10); ?></td>
                                            <td style="text-align:center"><?php echo substr($fila->fecha,11) ; ?></td> 
                                            <td style="text-align:center"> <?php //echo $fila->TERMINO_DESCARGA; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->ABANDONO_LEGAL; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->CLIENT_C_CODIGO_CONSIGNATARIO; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->DESCR_MERCADERIA; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->CONTEN_C_CODIGO; ?></td>
                                            <td style="text-align:center"><?php echo $fila->ubicacion; ?></td>
                                          <!--  <td style="text-align:center"><?php echo substr($fila->fecha_salida, 0, 10); ?></td>-->
                                            <td style="text-align:center"><?php //echo $fila->TAMAÑO; ?> pies</td>	
                                            <td style="text-align:center"> <?php //echo $fila->TIPO; ?></td>
                                            <td style="text-align:center"><?php //echo $fila->doorde_n_peso_manifestado; ?> </td>
                                            <td style="text-align:center"><?php //echo $fila->TIPO_CARGA; ?> </td>
                                            <td style="text-align:center"> <?php //echo $fila->CONDICION; ?></td>
                                            <td style="text-align:center">Si</td>
                                            <td style="text-align:center">radical</td>
                                            <td style="text-align:center">Observacion </td>


                                        </tr>
                                    <?php endforeach ?>

                                </tbody>

                            </table>