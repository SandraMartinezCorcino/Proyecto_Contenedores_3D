
 <script>



	$(function () {
   $('#table_id').DataTable({

    language: {
      "decimal":        "",
      "emptyTable":     "No hay datos en la tabla",
      "info":           "Mostrando _START_ a _END_ de _TOTAL_ entradas",
      "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
      "infoFiltered":   "(filtrando de _MAX_ total de entradas)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Mostrar _MENU_ entradas",
      "loadingRecords": "Cargando...",
      "processing":     "Procesando...",
      "search":         "Buscar:",
      "zeroRecords":    "No se encontraron registros coincidentes",
      "paginate": {
        "first":      "Primero",
        "last":       "Ultimo",
        "next":       "Siguiente",
        "previous":   "Anterior"
      },
      "aria": {
        "sortAscending":  ": Activar para ordenar la columna ascendente",
        "sortDescending": ": activar para ordenar la columna Descendente"
      }
    }

  });
 } 


 );
	


</script>

<style>
  form {
    max-width: 480px;
    margin: auto;
  }
  .form-group >[class*="col-"] + .ws-errorbox {
    padding: 0 15px;
  }


</style>
<!-- Sub Nav End -->
<div class="sub-nav hidden-sm hidden-xs">
 <ul>
  <li><a href="#" class="heading">  Agregar Contenedor</a></li>
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

                    <!-- Row Start -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header">
                                    <div class="title">
                                        Consultar Ubicación 

                                    </div>
                                    <span class="tools">
                                        <i class="fa fa-cogs"></i>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <!-- <form class="form-horizontal row-border" action="#">-->

                                    <form action="<?php echo site_url('user/cliente'); ?>" class="form-horizontal row-border" method="post">

                                        <div class="form-group">
                                            <label class="col-md-5 control-label">Ingresar Código VIN</label>
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-xs-5">
                                                        <input type="text" class="form-control" name="VIN" id="VIN" placeholder="Codigo VIN" required />
                                                    </div>

                                                    <div class="col-xs-2 ">
                                                        <button  id="mymodal"   type="submit" class="btn btn-info">Buscar</button>
                                                    </div>
                                                    <div><p> <?php IF (isset($mensaje))
                                                        echo "VIN no encontrado";
                                                        ELSE
                                                        ECHO '';
                                                        ?></p></div>

                                                    </div>
                                                </div>

                                            </div> 


                                        </form>


                                </div>
                            </div>
                        </div>


                        <DIV id="fromHTMLtestdiv">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="widget no-margin">
                                        <div class="widget-header">
                                            <div class="title">
                                                Reporte




                                            </div>
                                            <!--<span class="tools">
                                                <i class="fa fa-cogs"></i>
                                            </span>-->

                                            <div class="tools pull-right">
                                                <div class="btn-group">
                                                    <a class="btn btn-default btn-sm">
                                                        <i class="fa fa-print" data-original-title="Print">
                                                        </i>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="widget-body">
                                            <div class="invoice">
                                                <div class="invoice-head">
                                                    <img src="img/savarlogo2.png" alt="logo" class="logo">
                                                    <div class="invoice-info">
                                                        <span>
                                                            Usuario: <?php
                                                            $usuario = $this->session->userdata('usuario');
                                                            echo ucwords(strtolower($usuario));
                                                            ;
                                                            ?>
                                                        </span>
                                                        <br>
                                                        <span class="date">
                                                            <?php
                                                            $dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                                                            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                                                            echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
                                                            ?>

                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="invoice-data-container">
                                                    <div class="from">
                                                        <h5>
                                                            Datos de Vehículo
                                                        </h5>
                                                        <span>
                                                            Código BL-MASTER:
                                                            <?php IF (isset($VIN) )
                                                                echo $VIN['COD_VIN'];
                                                            ELSE
                                                                ECHO '';
                                                            ?>
                                                        </span>
                                                        <span>
                                                            Código RFID: <?php IF (isset($VIN))
                                                            switch (true) {
                                                                case isset($VIN['COD_RFID_VEH']):
                                                                    echo $VIN['COD_RFID_VEH'];
                                                                    break;
                                                                
                                                                case isset($VIN['COD_RFID']):
                                                                    echo $VIN['COD_RFID'];
                                                                    break;
                                                            }
                                                            ELSE
                                                                ECHO '';
                                                            ?>
                                                        </span>
                                                        <!--<span>
                                                            Payment due 19/10/2013
                                                        </span>-->
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-condensed table-striped table-bordered table-hover no-margin" id="table_id">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align:center">Item</th>

                                                                <th style="text-align:center">CÓDIGO BL-MASTER</th>
                                                                <th style="text-align:center">UBICACIÓN</th>
                                                                <th style="text-align:center">FECHA Y HORA</th>
                                                               
                                                                <th style="text-align:center">OBSERVACIONES</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center"><?php IF (isset($VIN) )
                                                                echo 1;
                                                            ELSE
                                                                ECHO '';
                                                            ?> </td> 
                                                                <td style="text-align:center"><?php IF (isset($VIN) )
                                                                echo $VIN['COD_VIN'];
                                                            ELSE
                                                                ECHO '';
                                                            ?></td>
                                                                <td style="text-align:center"><?php IF (isset($VIN) )
                                                                echo $VIN['NOM_LOCAL'];
                                                            ELSE
                                                                ECHO '';
                                                            ?></td>
                                                                <td style="text-align:center"><?php IF (isset($VIN))
                                                                    echo substr($VIN['FECHA'],0,-4);
                                                            ELSE
                                                                ECHO '';
                                                            ?></td>

                                                       
                                                            
                                                            <td style="text-align:center"><?php IF (isset($VIN) )
                                                                   switch (true) {
                                                                case $VIN['NOM_LOCAL']=='CHORRILLOS 1':
                                                               if (!empty($CHO1)) {
                                                                    echo ucwords(strtolower($CHO1['TIPO_ESTADO']))." de Taller <br>";
                                                                    echo "Fecha: ".substr($CHO1['FECHA_PROCESO'],0,-4);
                                                                    
                                                                } else {
                                                                    ECHO '';
                                                               }
                                                                
                                                                break;
                                                                
                                                                case $VIN['NOM_LOCAL']=='CHORRILLOS 3':
                                                                 if (!empty($CHO3) ){
                                                                    echo '';
                                                                    
                                                                } else {
                                                                    ECHO '';
                                                                }

                                                                break;
                                                            }
                                                            ELSE
                                                                ECHO '';
                                                            ?></td>    

                                                        </tr>
                                                    </tbody>



                                                    </table>




                                                </div>

                                            </div>

                                            <div id="button-print">

                                              <!--  <button onclick="javascript:demoFromHTML()" class="button"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span>  Print</button>-->
                                            </div> 
                                        </div>
                                    </div>
                                </div>

                                <script>

                                </script>

                            </div>

                        </div>         
                    </div>

                </div>    
</DIV>


