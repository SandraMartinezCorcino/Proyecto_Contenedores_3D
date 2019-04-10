
<div class="row">
                                    <div class="col-lg-3 col-md-3">

                                        <table border="1" align="center">
                                            <tr><th colspan="2" ><CENTER>BAHIA A</center></th></tr> 
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_I_4')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_D_4')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 4</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_I_3')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_D_3')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 3</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_I_2')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_D_2')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 2</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_I_1')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'A_D_1')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 1</center></th></tr>







                                        </table>

                                    </div>
                                    
                                    <div class="col-lg-3 col-md-3">
                                      <table border="1" align="center">
                                            <tr><th colspan="2" ><CENTER>BAHIA B</center></th></tr> 
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_I_4')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_D_4')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 4</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_I_3')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_D_3')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 3</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_I_2')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_D_2')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 2</center></th></tr>
                                            <tr align="center">
                                                 <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_I_1')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'B_D_1')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>


                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 1</center></th></tr>







                                        </table>
                                        
                                    </div>
                                    
                                    
                                      <div class="col-lg-3 col-md-3">
                                      <table border="1" align="center">
                                            <tr><th colspan="2" ><CENTER>BAHIA C</center></th></tr> 
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_I_4')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_D_4')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 4</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_I_3')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_D_3')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 3</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_I_2')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_D_2')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 2</center></th></tr>
                                            <tr align="center">
                                                 <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_I_1')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'C_D_1')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>


                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 1</center></th></tr>







                                        </table>
                                        
                                    </div>
                                    
                                    
                                    

                                    <div class="col-lg-3 col-md-3">
                                      <table border="1" align="center">
                                            <tr><th colspan="2" ><CENTER>BAHIA D</center></th></tr> 
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_I_4')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_D_4')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 4</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_I_3')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_D_3')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->



                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 3</center></th></tr>
                                            <tr align="center">
                                                <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_I_2')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_D_2')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>

                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 2</center></th></tr>
                                            <tr align="center">
                                                 <?php foreach ($bahia as $key => $value): ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_I_1')): ?>
                                                        <td  style="background:#333333" align="center" >      


                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>

                                                    <?PHP IF ((($value->COD_SUB_BAHIA) == 'D_D_1')): ?>
                                                        <td style="background:#333333" align="center" >      

                                                            <?php
                                                            if (($value->TIPO_ESTADO) == "OCUPADO") {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/contenedor.png">  

                                                                <?php
                                                            } else {
                                                                ?>
                                                                <img src="<?php echo base_url(); ?>img/sin_contenedor.png">    
                                                                <?php
                                                            };
                                                            ?>
                                                            <p style="color:#fff ;font-size:8px">
                                                                <?php echo ($value->COD_SUB_BAHIA); ?>
                                                            </p>
                                                        </td>
                                                    <?PHP endif; ?>


                                                    <!--A2 -->





                                                <?php endforeach ?>


                                            </tr>  
                                            <tr><th colspan="4" ><CENTER>PISO 1</center></th></tr>







                                        </table>
                                        
                                    </div>
                                </div>
