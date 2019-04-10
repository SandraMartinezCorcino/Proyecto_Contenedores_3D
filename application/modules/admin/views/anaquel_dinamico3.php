 <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <!--columna 1 -->
                                <table id='tabla_fondo'>   
                                    <center><a id="delay" class="btn btn-warning" href="#" data-original-title="" title="" style=""> Cuerpo 01 - 02 </a></center> <br>
                                    
                                    <!-- -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(1)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(2)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(1)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(2)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(1)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(2)'): ?>
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
                                    
                                    <!-- -->
                                     <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(3)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(4)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(3)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(4)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(3)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(4)'): ?>
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
                                    

                                    <!-- -->
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(5)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(6)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(5)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(6)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(5)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(6)'): ?>
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

                                    
                                    
                                    <!-- -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(7)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(8)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(7)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(8)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(7)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(8)'): ?>
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
                                   
                                    
                                    <!-- -->
                                    
                                    <TR style="text-align:center" > 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(9)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(10)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(9)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(10)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(9)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(10)'): ?>
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

                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(13)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(14)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(13)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(14)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(13)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(14)'): ?>
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

                                    
                                    
                                    <!-- D -->
                                    
                                    <TR> 
                                        <?php foreach ($carga as $key => $value): ?>
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(13)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_C(14)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(13)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_B(14)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(13)'): ?>
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
                                            <?PHP IF (($value->COD_SUB_CUERPOS) == '3_A(14)'): ?>
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



