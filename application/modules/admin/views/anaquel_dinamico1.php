 <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <!--columna 1 -->
                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 01 - 02 </a></center> <br>
                                    
                                    <!-- -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(1)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(2)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(1)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(2)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(1)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(2)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(1)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(2)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>
                            <!-- FIN COLUMNA 1  -->

                            <!--  COLUMNA 2  -->
                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 03 - 04 </a></center> <br>
                                      <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(3)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(4)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- -->
                                      <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(3)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(4)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- 7-a-3 y 7-a-4 -->
                                    
                                    
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(3)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(4)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(3)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#5c3e0f; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(4)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>

                            <!--COLUMNA 3-->

                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 05 - 06 </a></center> <br>
                                    
<TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(5)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(6)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(5)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(6)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(5)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(6)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(5)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(6)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>


                            <!-- FIN COLUMNA -->


                            <!--COLUMNA 4 -->

                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 07 - 08 </a></center> <br>

                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(7)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(8)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    <!-- -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(7)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(8)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(7)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(8)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(7)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(8)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>


                            <!--FIN COLUMNA -->
                        </DIV>
                        <br> <br>
                        <div class="row">

                            <!-- COLUMNA 5 -->
                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 9 - 10 </a></center> <br>
                                   
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(9)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(9)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- -->
                                    
                                    <TR style="text-align:center" > 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(9)'): ?>
                                                <TD>
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>   
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(10)'): ?>
                                                <TD> 

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>


                                                </TD> 
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(9)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(10)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(9)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(10)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>

                            <!-- FIN COLUMNA -->


                            <!-- COLUMNA 6 -->

                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 11 - 12 </a></center> <br>
<TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(11)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(12)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(11)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(12)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(11)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(12)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(11)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(12)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>

                            <!-- FIN COLUMNA -->
                            
                            <!--COLUMNA 7 -->
                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 13 - 14 </a></center> <br>
<TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(13)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(14)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(13)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(14)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(13)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(14)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(13)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(14)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>
                            
                            
                            <!--COLUMNA 8 -->
                            
                            
                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 15 - 16 </a></center> <br>
<TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(15)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(16)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(15)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(16)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(15)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(16)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(15)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(16)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>
                            <!-- FIN COLUMNA -->


                        </div>
                        
                        
                        
                        
                        <br> <br>
                        <div class="row">

                            <!-- COLUMNA 5 -->
                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 17 - 18 </a></center> <br>
                                   
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(17)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(18)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- -->
                                    
                                    <TR style="text-align:center" > 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(17)'): ?>
                                                <TD>
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>   
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(18)'): ?>
                                                <TD> 

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>


                                                </TD> 
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(17)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(18)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(17)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(18)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima" style="text-align:center; background:#8a6d3b; color: #ffffff"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>

                            <!-- FIN COLUMNA -->


                            <!-- COLUMNA 6 -->

                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 19 - 20 </a></center> <br>
<TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(19)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(20)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(19)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(20)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(19)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(20)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(19)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(20)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>

                            <!-- FIN COLUMNA -->
                            
                            <!--COLUMNA 7 -->
                            <div class="col-lg-3 col-md-3">

                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 21 - 22 </a></center> <br>
<TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(21)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_D(22)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>
                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(21)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_C(22)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(21)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_B(22)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <!-- 7-a-3 y 7-a-4 -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(21)'): ?>
                                                <TD>

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel11.jpeg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>

                                                </TD>    
                                            <?PHP endif; ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '1_A(22)'): ?>
                                                <TD> 
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2_lleno.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/anaquel2.jpeg">    
                                                        <?php
                                                    };
                                                    ?>
                                                    <p class="text_encima"><?PHP ECHO $value->COD_SUB_CUERPOS; ?></p>
                                                </TD>   
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </TR>

                                    <TR>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_DERECHA.jpg">  
                                        </TD>
                                        <TD>
                                            <img src="<?php echo base_url(); ?>img/PATA_IQUIERDA.jpg">  
                                        </TD>
                                    </TR>

                                </table>
                            </div>
                            
                            
                            <!--COLUMNA 8 -->
                            
                            
                            
                            <!-- FIN COLUMNA -->


                        </div>



