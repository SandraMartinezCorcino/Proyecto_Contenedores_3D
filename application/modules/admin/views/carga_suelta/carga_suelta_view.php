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
            $("#div1").load("<?php echo base_url(); ?>admin/carga_suelta/movimiento");

        }, 500);

 $('#example').DataTable( {
        
        dom: 'Blfrtip',
        buttons: [
            'copyHtml5'
        ],
    } );



        // actualizacion de contenido en tiempo real




    }


    );






</script>

<div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading">Carga Suelta</a></li>
    </ul>
    <div class="custom-search hidden-sm hidden-xs">
        <input type="text" class="search-query" placeholder="Search here ...">
        <i class="fa fa-search"></i>
    </div>
</div>

<div class="dashboard-wrapper">

    <div class="left-sidebar">


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
                                <p class="list-group-item-text">Registro de Carga Suelta</p>
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
                            Carga Suelta
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
                    <div class="widget-body">
                        
                        <!-- Modal -->
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
                                           <table class="table table-bordered"  id="example" class="display nowrap" width="100%" cellspacing="2">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align:center">Item</th>
                                                        <th style="text-align:center">RFID</th>
                                                        <th style="text-align:center">BL_HIJO</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($carga_suelta_all_10 as $key => $value): ?>
                                                        <tr>
                                                            <td style="text-align:center"><?php echo ($value->ID_CARGA_SUELTA); ?></td>
                                                            <td style="text-align:center"><?php echo ($value->COD_RFID); ?></td>
                                                            <td style="text-align:center"><?php echo ($value->BL_HIJO ); ?></td>




                                                        </tr>
                                                    <?php endforeach ?>
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
                            <div class="modal fade" tabindex="-1" role="dialog" id="miModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4>¿Desea eliminar este Carga suelta?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <a type="button" class="btn btn-primary eliminar">Eliminar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>