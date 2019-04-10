<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/main/js/datatable/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/main/js/datatable/css/buttons.dataTables.min.css">

<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/jszip.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>js/OrbitControls.js"></script>

<script>

    $(function () {


        setInterval(function () {
            $("#div1").load("<?php echo base_url(); ?>admin/movimiento_ctn_cs_historial_inventario/movimiento_ctn");

        }, 500);


      var table=  $('#table_id').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'excelHtml5'
            ],
        });
        



    }


    );





</script>
<style>
    .modal-dialog1{width:1500px;margin:30px auto}
    
    .list-group-item{padding: 4px 15px}

      #div2 {
        overflow-x: scroll;
    }
    .modal-dialog1{width:1500px;margin:30px auto}
</style>   

<div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading"> Movimiento de Contenedor y Carga Suelta - Historial Inventario</a></li>
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
                                <p class="list-group-item-text">Movimiento de Contenedor y Carga Suelta</p>
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
                            Movimiento de Contenedor y Carga Suelta - Historial Inventario
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
                    <div class="widget-body">
                     

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog1" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Movimiento de Contenedor y Carga Suelta - Historial Inventario
</h4>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row-fluid">

                                            <input type="hidden" class="datos_a_enviar" name="datos_a_enviar" />
                                            <div id="div2" > 
                                            <table class="table table-bordered"  id="table_id" class="display">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align:center">Item</th>
                                                        <th style="text-align:center">Nave</th>
                                                        <th style="text-align:center">Viaje / Rumbo</th>
                                                        <th style="text-align:center">Operación</th>
                                                        <th style="text-align:center">Contenedor</th>	
                                                        <th style="text-align:center">Tipo</th>
                                                        <th style="text-align:center">Tamaño</th>
                                                        <th style="text-align:center">Ubicación</th>
                                                        <th style="text-align:center">Fecha</th>
                                                        <th style="text-align:center">Hora</th>
                                                        <th style="text-align:center">Tipo de Carga</th>
                                                        <th style="text-align:center">Condición</th>
                                                        <th style="text-align:center">Nueva Ubicación</th>
                                                        <th style="text-align:center">Stacker</th>
                                                        <th style="text-align:center">Usuario</th>

                                                        <th style="text-align:center">Observaciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php foreach ($mov_ctn as $key => $fila): ?>
                                                        <tr>
                                                            <td style="text-align:center"><?php echo $key + 1; ?></td>
                                                            <td style="text-align:center"><?php echo $fila->NAVE_C_CODIGO; ?></td>
                                                            <td style="text-align:center"><?php echo $fila->NAVIRU_C_VIAJE ?>  / <?php echo $fila->rumbo_c_codigo ?>  </td>
                                                            <td style="text-align:center"><?php echo $fila->OPERAC_C_CODIGO; ?></td>
                                                            <td style="text-align:center"><?php echo ($fila->CONTEN_C_CODIGO); ?></td>
                                                            <td style="text-align:center"><?php echo ($fila->TIPO); ?></td>
                                                            <td style="text-align:center"><?php echo ($fila->TAMAÑO); ?> pies</td>
                                                            <td style="text-align:center"><?php echo ($fila->ubicacion); ?></td>
                                                            <td style="text-align:center"><?php echo substr($fila->fecha, 0, 10); ?></td>
                                                            <td style="text-align:center"><?php echo substr($fila->fecha, 11); ?></td>
                                                            <td style="text-align:center">IMO</td>
                                                            <td style="text-align:center">Inmovilizado</td>
                                                            <td style="text-align:center"><?php echo ($fila->nueva_ubicacion); ?></td>
                                                            <td style="text-align:center"><?php echo ($fila->STACKERS); ?></td>
                                                            <td style="text-align:center"><?php echo ($fila->usuario); ?></td>
                                                            <td style="text-align:center">Observaciones 1</td>
                                                        </tr>
                                                    <?php endforeach ?>	
                                                </tbody>

                                            </table>
                                            </div>>



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
                </div>
            </div>
        </div>


    </div>
</div>