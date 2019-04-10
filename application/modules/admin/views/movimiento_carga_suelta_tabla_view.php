<table class="table table-bordered"  id="table_id" class="display">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Item</th>
                                        <th style="text-align:center">RFID</th>
                                        <th style="text-align:center">FECHA DE INGRESO</th>
                                        <th style="text-align:center">UBICACION</th>
                                        

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($mov_carga_suelta as $key => $value): ?>
                                        <tr>
                                            <td style="text-align:center"><?php echo $key +1; ?></td>
                                            <td style="text-align:center"><?php echo ($value->COD_RFID); ?></td>
                                            <td style="text-align:center"><?php echo ($value->FECHA ); ?></td>
                                            
                                            <td style="text-align:center"><?php echo ($value->COD_SUB_CUERPOS ); ?></td>
                                            

                                        </tr>
                                    <?php endforeach ?>
                                </tbody>



                                </tbody>

                            </table>

