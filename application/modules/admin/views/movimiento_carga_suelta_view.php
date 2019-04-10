

<script>



    $(function () {



           setInterval(function () {
            $("#div1").load("<?php echo base_url(); ?>admin/movimiento_carga_suelta/movimiento");

        }, 500);




      /*$('#div-btn').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel01");
        });
     $('#div-btn1').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel02");
        });

        $('#div-btn2').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel03");
        });

        $('#div-btn3').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel04");
        });

        $('#div-btn4').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel05");
        });

        $('#div-btn5').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel06");
        });

        $('#div-btn6').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel07");
        });

         $('#div-btn7').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel08");
        });

          $('#div-btn8').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel09");
        });

           $('#div-btn9').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel10");
        });

              $('#div-btn10').click(function (event) {
            event.preventDefault();
            $("#extra").load("admin/movimiento_carga_suelta/actualizar_anaquel11");
        });*/



//var wilder="d";

/*--------------------------------------------------------------------------------------------------------*/
      $(function () {
        var t1;
        $(".li_zona").click(function(){
            $("#miModal").modal({
                keyboard: false
            });

        });
      $('#div-btn').click(function (event) {  
           // console.log("Fra");
            $("#oculto").val("actualizar_anaquel01"); 

        // t1= setInterval(function () {
            //$("#extra").load("admin/parkeo/actualizar_parkeo");
            event.preventDefault();
         //  }, 500);
        });

        $('#div-btn1').click(function (event) {
         //   t2=setInterval(function () {
           // console.log("Fra2");
            $("#oculto").val("actualizar_anaquel02");
               //$("#extra").load("admin/parkeo/actualizar_parkeo2");
            event.preventDefault();
          //  }, 500);
        });

        $('#div-btn2').click(function (event) {
            // console.log("Fra3");
            $("#oculto").val("actualizar_anaquel03"); 
            //$("#extra").load("admin/parkeo/actualizar_parkeo3");
            event.preventDefault();
        });

        $('#div-btn3').click(function (event) {
            //console.log("Fra4");
            $("#oculto").val("actualizar_anaquel04");
            //$("#extra").load("admin/parkeo/actualizar_parkeo4");
            event.preventDefault();
        });

        $('#div-btn4').click(function (event) {
            //console.log("Fra5");
            $("#oculto").val("actualizar_anaquel05");
           // $("#extra").load("admin/parkeo/actualizar_parkeo5");
            event.preventDefault();
        });

        $('#div-btn5').click(function (event) {
             // console.log("Fra6");
            $("#oculto").val("actualizar_anaquel06");
           // $("#extra").load("admin/parkeo/actualizar_parkeo6");
            event.preventDefault();
        });

        $('#div-btn6').click(function (event) {
            //console.log("Fra7");
            $("#oculto").val("actualizar_anaquel07");
            //$("#extra").load("admin/parkeo/actualizar_parkeo7");
            event.preventDefault();
        });

        $('#div-btn7').click(function (event) {
            //console.log("Fra7");
            $("#oculto").val("actualizar_anaquel08");
            //$("#extra").load("admin/parkeo/actualizar_parkeo7");
            event.preventDefault();
        });

        $('#div-btn8').click(function (event) {
            //console.log("Fra7");
            $("#oculto").val("actualizar_anaquel09");
            //$("#extra").load("admin/parkeo/actualizar_parkeo7");
            event.preventDefault();
        });

          $('#div-btn9').click(function (event) {
            //console.log("Fra7");
            $("#zonas").val("actualizar_anaquel10");
            //$("#extra").load("admin/parkeo/actualizar_parkeo7");
            event.preventDefault();
        });

            $('#div-btn10').click(function (event) {
            //console.log("Fra7");
            $("#zonas").val("actualizar_anaquel11");
            //$("#extra").load("admin/parkeo/actualizar_parkeo7");
            event.preventDefault();
        });

        
        var ul = document.getElementById('test');
       

        setInterval(function () {
            var valor = $("#oculto").val();
            console.log(" Franz : " + valor);
            $.ajax({
                url:"admin/movimiento_carga_suelta/" + valor,
                success:function(response){
                    $("#extra").html($(response));
                    //cerrar el modal
                    $("#miModal").modal("hide");
                }
            });
            //$("#extra").load("admin/movimiento_carga_suelta/" + valor);
        }, 2000);

    });

/*----------------------------*/


 $('#example').DataTable( {     
        dom: 'Blfrtip',
        buttons: [
            'excelHtml5'
        ],
    } );


    }


    );
</script>

<style type="text/css">
    .text_encima {
        position: absolute;
        color: #ffff;
        font-size: 16px;
        font-family: arial;
        font-weigh:900px;
        margin-top:0px;
        margin-left:70px;
        background:#5c3e0f;


    }
    #extra {
        overflow-x: scroll;
    }

</style>



<div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading">Movimiento de Carga Suelta</a></li>
    </ul>
    <div class="custom-search hidden-sm hidden-xs">
        <input type="text" class="search-query" placeholder="Search here ...">
        <i class="fa fa-search"></i>
    </div>
</div>



<!-- Sub Nav End -->
<!-- Dashboard Wrapper Start -->
<div class="dashboard-wrapper">

    <!-- Left Sidebar Start -->
    <div class="left-sidebar">

        <!-- Row Start -->
        <div class="row">
            
                     <div class="right-sidebar">
                <div class="wrapper">
                    <div class="list-group no-margin">
                        <span id="mymodal" data-toggle="modal" data-target="#myModal">  
                            <a href="javascript:;" class="list-group-item">
                                <span class="pull-right">
                                    <i class="fa fa-file fa-3x text-info"></i>
                                </span>
                                <h4 class="list-group-item-heading">Historial</h4>
                                <p class="list-group-item-text">Movimiento de Carga Suelta</p>
                                <br>
                            </a>

                        </span>

                    </div>
                </div>

            </div>
            <br> <br> <br> <br> <br>
            
            
            
            <div class="col-lg-12 col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Movimiento de Carga Suelta
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
                    <div class="widget-body">
                        
                        
                        
                        
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel" >REGISTRO DE CARGA SUELTA</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row-fluid">

                                            <input type="hidden" class="datos_a_enviar" name="datos_a_enviar" />
                                          
                                            <table class="table table-bordered"  id="example" class="display">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Item</th>
                                        <th style="text-align:center">RFID</th>
                                        <th style="text-align:center">FECHA DE INGRESO</th>
                                        <th style="text-align:center">UBICACION</th>
                                        

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($mov_carga_sueltas as $key => $value): ?>
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




                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div id="div1">


                        </div>
                    </div>
                    <!-- UBICACIONES -->
                </div>

                <!--UBICACIONES-->

                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            ANAQUELES
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
					<div class="menu2" id="test">
                    <input type="hidden" guarda="" id="oculto" name="" value="actualizar_anaquel01">
                    <ul class="nav nav-tabs nav-justified">

                        <li role="presentation" franz="actualizar_anaquel01" class="li_zona" id="div-btn"><a href="#"  >ANAQUEL 1</a></li>
                        <li role="presentation" franz="actualizar_anaquel02" class="li_zona" id="div-btn1"><a href="#"  >ANAQUEL 2</a></li>
                        <li role="presentation" franz="actualizar_anaquel03" class="li_zona" id="div-btn2"><a href="#"  >ANAQUEL 3</a></li>
                        <li role="presentation" franz="actualizar_anaquel04" class="li_zona" id="div-btn3"><a href="#"  >ANAQUEL 4</a></li>
                        <li role="presentation" franz="actualizar_anaquel05" class="li_zona" id="div-btn4"><a href="#"  >ANAQUEL 5</a></li>
                        <li role="presentation" franz="actualizar_anaquel06" class="li_zona" id="div-btn5"><a href="#"  >ANAQUEL 6</a></li>
                        <li role="presentation" franz="actualizar_anaquel07" class="li_zona" id="div-btn6"><a href="#"  >ANAQUEL 7</a></li>
                        <li role="presentation" franz="actualizar_anaquel08" class="li_zona" id="div-btn7"><a href="#"  >ANAQUEL 8</a></li>
                        <li role="presentation" franz="actualizar_anaquel09" class="li_zona" id="div-btn8"><a href="#"  >ANAQUEL  9</a></li>
                        <li role="presentation" franz="actualizar_anaquel10" class="li_zona" id="div-btn9"><a href="#"  >ANAQUEL  10</a></li>
                        <li role="presentation" franz="actualizar_anaquel11" class="li_zona" id="div-btn10"><a href="#"  >ANAQUEL  11</a></li> 
                    </ul>
					</div> 


                    <br> <br>

                    <div id="extra">

                    </div> 
                </div>

                <!--  <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            ANAQUELES
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
                    <div id="plano"> 
                    
                    
                    </div>
                </div>--> 
            
            
            
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="miModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Cargando...</h4>
      </div>
      <div class="modal-body">
        <p>Cargando...</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
