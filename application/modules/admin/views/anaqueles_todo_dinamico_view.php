
                    <div id="plano_completo">

                        <div class="row">


                            <div class="col-lg-3 col-md-3">
                                <div>
                                    <p align="right">
                                        <img src="<?php echo base_url(); ?>img/sin_entrada.png"> 
                                    </p>
                                </div>
                                <table border="1" align="center">
                                    <tr><th colspan="2" ><CENTER>ANAQUEL 10</center></th><tr>
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(1)')): ?>
                                                <td  style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(1)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(1)')): ?>
                                                <td style="background:#333333" align="center">      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 1 </p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 2 </p> </td>
                                    </tr>

                                </table>


                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(3)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>   
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(3)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(3)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 3</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 4 </p> </td>
                                    </tr>

                                </table>

                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(5)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>   
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(5)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(5)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 5</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 6</p> </td>
                                    </tr>

                                </table>

                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(7)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(7)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(7)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 7</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 8 </p> </td>
                                    </tr>

                                </table>

                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(9)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(9)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(9)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 9</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 10 </p> </td>
                                    </tr>

                                </table>


                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(11)')): ?>
                                                <td  style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff ;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(11)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(11)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '10_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 11</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 12 </p> </td>
                                    </tr>

                                </table>

                            </div>



                            <div class="col-lg-6 col-md-6">
                                <div>
                                    <p align="right">
                                        <img src="<?php echo base_url(); ?>img/sin_entrada.png"> 
                                    </p>
                                </div>
                                <table border="1" align="center">

                                    <!-- ANAQUEL 9 -->

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>  
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 


                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '9_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>

                                    </tr> 
                                    <tr><th colspan="10" ><CENTER>ANAQUEL 09</center></th><tr>
                                        <!--ANAQUEL 8 -->




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:10px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>  
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    

                                        <?php endforeach ?>
                                    </tr> 




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 



                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '8_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr><th colspan="10" ><CENTER>ANAQUEL 08</center></th><tr>




                                </table>
                                <br> 
                                <P><CENTER>PASADISO 4</CENTER></P>
                                <br>
                                <table border="1" align="center">

                                    <!-- ANAQUEL 9 -->

                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>   
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    
                                        <?php endforeach ?>
                                    </tr> 


                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '7_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>

                                    </tr> 
                                    <tr><th colspan="12" ><CENTER>ANAQUEL 07</center></th><tr>
                                        <!--ANAQUEL 8 -->




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <img src="<?php echo base_url(); ?>img/vacio.jpg">
                                                    <p style="color:#fff;font-size:10px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP
                                            IF ((($value->COD_SUB_CUERPOS) == '6_C(12'
                                                    . ')')):
                                                ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>     
                                        <?php endforeach ?>
                                    </tr> 




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 



                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(11)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '6_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr><th colspan="12" ><CENTER>ANAQUEL 06</center></th><tr>




                                </table>

                                <br> 
                                <CENTER><P>PASADISO 3</P></CENTER>
                                <br>

                                <table BORDER="1" align="center">

                                    <!-- ANAQUEL 5 -->

                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      
                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?> 
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>   
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    
                                        <?php endforeach ?>
                                    </tr> 


                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '5_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>

                                    </tr> 
                                    <tr><th colspan="12" ><CENTER>ANAQUEL 05</center></th><tr>
                                        <!--ANAQUEL 8 -->




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:10px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>     
                                        <?php endforeach ?>
                                    </tr> 




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 



                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '4_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr><th colspan="12" ><CENTER>ANAQUEL 04</center></th><tr>




                                </table>

                                <br> 
                                <center><P>PASADISO 2</P></center>
                                <br>

                                <table border="1" align="center">

                                    <!--anaquel 2 -->

                                    <!-- ANAQUEL 3 -->
                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_D(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>       

                                        <?php endforeach ?>
                                    </tr> 



                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_C(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>       

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>   
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>  
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_B(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>        
                                        <?php endforeach ?>
                                    </tr> 


                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '3_A(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    
                                        <?php endforeach ?>

                                    </tr> 
                                    <tr><th colspan="14" ><CENTER>ANAQUEL 03</center></th><tr>
                                        <!--ANAQUEL 8 -->




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:10px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_C(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>     
                                        <?php endforeach ?>
                                    </tr> 




                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_B(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <img src="<?php echo base_url(); ?>img/vacio.jpg">
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>    
                                        <?php endforeach ?>
                                    </tr> 



                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                   
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                    
                                                    <p style="color:#fff;font-size:8px">
                                                        <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(3)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?> 
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(5)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(7)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(9)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(11)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>  

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(13)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '2_A(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>     
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr><th colspan="14" ><CENTER>ANAQUEL 02</center></th><tr>




                                </table>

                                <br> 
                                <p><center>PASADISO 1</center></p>
                                <br>
                                <!--ANAQUEL 1 -->

                            </div>

                            <div class="col-lg-3 col-md-3">

                                <div>
                                    <p align="right">
                                        <img src="<?php echo base_url(); ?>img/sin_entrada.png"> 
                                    </p>
                                </div>
                                <table border="1" align="center" >
                                    
                                    <tr><th colspan="2" ><CENTER>ANAQUEL 11</center></th><tr>
                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(1)')): ?>
                                                <td  style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  



                                    <tr >
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(1)')): ?>
                                                <td  style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(1)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(2)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(1)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(2)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 1 </p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 2 </p> </td>
                                    </tr>

                                </table>


                                <table border="1" align="center" >
                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(3)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  



                                    <tr >
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(3)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(3)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(3)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(4)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 3</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 4 </p> </td>
                                    </tr>

                                </table>
                                <br>
                                <table border="1" align="center">
                                    <tr >
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(5)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  


                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(5)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(5)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(6)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(5)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(6)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 5</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 6</p> </td>
                                    </tr>

                                </table>

                                <table border="1" align="center">

                                    <tr >
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(7)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  


                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(7)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(7)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(8)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(7)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(8)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 7</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 8 </p> </td>
                                    </tr>

                                </table>

                                <table border="1" align="center">

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(9)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 


                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(9)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                    
                                                    <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(9)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(10)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(9)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(10)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 9</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 10 </p> </td>
                                    </tr>

                                </table>


                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(11)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  



                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(11)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(11)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(12)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(11)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(12)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 11</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 12 </p> </td>
                                    </tr>

                                </table>


                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(13)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  



                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(13)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(13)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(14)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(13)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(14)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 13</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 14 </p> </td>
                                    </tr>

                                </table>


                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(15)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(16)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  



                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(15)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(16)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(15)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(16)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(15)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(16)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 15</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 16 </p> </td>
                                    </tr>

                                </table>

                                <table border="1" align="center">
                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(17)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_D(18)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  



                                    <tr align="center">
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(17)')): ?>
                                                <td  style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_C(18)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff ;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr>  

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(17)')): ?>
                                                <td style="background:#333333" align="center">      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_B(18)')): ?>
                                                <td style="background:#333333" align="center" >      


                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>
                                        <?php endforeach ?>
                                    </tr> 

                                    <tr>
                                        <?php foreach ($carga as $key => $value): ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(18)')): ?>
                                                <td style="background:#333333" align="center">      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>
                                                </td>
                                            <?PHP endif; ?>

                                            <?PHP IF ((($value->COD_SUB_CUERPOS) == '11_A(17)')): ?>
                                                <td style="background:#333333" align="center" >      

                                                    <?php
                                                    if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                        <?php
                                                    };
                                                    ?>                                                     <p style="color:#fff;font-size:8px">
                                                    <?php echo ($value->COD_SUB_CUERPOS); ?>
                                                    </p>

                                                </td>
                                            <?PHP endif; ?>

                                        <?php endforeach ?>
                                    </tr> 

                                    <tr >
                                        <td align="center" > <p style="font-size: 10px ">cuerpo 17</p> </td>
                                        <td align="center"> <p style="font-size: 10px">cuerpo 18 </p> </td>
                                    </tr>

                                </table>
                            </div>


                        </div>


                    </div>
<br>
<br>
                    <DIV ID="ANAQUEL11" >
                        <TABLE border="1" align="center">

                            <!-- D -->
<tr><th colspan="29" ><CENTER>ANAQUEL 01</center></th><tr>
                            <tr>
                                <?php foreach ($carga as $key => $value): ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(1)')): ?>
                                        <td style="background:#333333" align="center">      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>
                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(2)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(3)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(4)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(5)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                          
                                            <p style="color:#fff;font-size:8px">
                                                <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(6)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                           
                                            <p style="color:#fff;font-size:8px">
                                                <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(7)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(8)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(9)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(10)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(11)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(12)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(13)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(14)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(15)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(16)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(17)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(18)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(19)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(20)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(21)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(22)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>

                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(23)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(24)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    
                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(25)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(26)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(27)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(28)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_D(29)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                <?php endforeach ?>         

                            </tr> 


                            <!--  C -->
                            <tr>
                                <?php foreach ($carga as $key => $value): ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(1)')): ?>
                                        <td style="background:#333333" align="center">      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>
                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(2)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(3)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(4)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(5)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(6)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                                 <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(7)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(8)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(9)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(10)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(11)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(12)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(13)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(14)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(15)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(16)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(17)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(18)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(19)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(20)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(21)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(22)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>

                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(23)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(24)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    
                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(25)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(26)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(27)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(28)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_C(29)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                <?php endforeach ?>         

                            </tr> 

                            <!-- B-->
                            <tr>
                                <?php foreach ($carga as $key => $value): ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(1)')): ?>
                                        <td style="background:#333333" align="center">      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>
                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(2)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(3)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(4)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(5)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(6)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(7)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(8)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(9)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(10)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(11)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(12)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(13)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(14)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(15)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(16)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(17)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(18)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(19)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(20)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(21)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(22)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>

                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(23)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(24)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    
                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(25)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(26)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(27)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(28)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_B(29)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                <?php endforeach ?>         

                            </tr> 




                            <!-- 1_A -->
                            <tr>
                                <?php foreach ($carga as $key => $value): ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(1)')): ?>
                                        <td style="background:#333333" align="center">      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>
                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(2)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(3)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(4)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(5)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(6)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(7)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(8)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(9)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(10)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(11)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(12)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(13)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(14)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(15)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?> 

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(16)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(17)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(18)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(19)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(20)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(21)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>  

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(22)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>

                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(23)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(24)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    
                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(25)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(26)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(27)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>   

                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(28)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                            <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>


                                    <?PHP IF ((($value->COD_SUB_CUERPOS) == '1_A(29)')): ?>
                                        <td style="background:#333333" align="center" >      

                                            <?php
                                            if (($value->ESTADO_CUERPOS) == "OCUPADO") {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/ocupado.jpg">  

                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php echo base_url(); ?>img/vacio.jpg">    
                                                <?php
                                            };
                                            ?>                                             <p style="color:#fff;font-size:8px">
                                                <?php echo ($value->COD_SUB_CUERPOS); ?>
                                            </p>

                                        </td>
                                    <?PHP endif; ?>    

                                <?php endforeach ?>         

                            </tr> 

                        </TABLE>

                    </DIV>


