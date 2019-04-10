

<script type="text/javascript">

    $(document).ready(function () {

    $('input[type=file]').change(function(){

    if($('input[type=file]').val()==''){

        $('button').attr('disabled',true)

    } 

    else{

      $('button').attr('disabled',false);

    }

});

    });







</script>





<script type="text/javascript">

     

$(document).ready(function () {

               

                var table = $('#example-table').DataTable({





                    "dom": "<'row'<'col-sm-3 text-center'B><'col-sm-3 text-center'l><'col-sm-6'f>>" +

                    "<'row'<'col-sm-12'tr>>" +

                      "<'row'<'col-sm-5'i><'col-sm-7'p>>",

                     "buttons": [{

                extend: 'excelHtml5',

                text: '<i class="fa fa-file-excel-o"></i> Exportar a Excel',

                title: 'Historial de Recargas Yape'

              }

            ], 



            "ajax": "<?= site_url('admin/csv/reporte') ?>",



                    "columns": [

                         {"data":"id"},

                         {"data":"tipoTransaccion"},

                        {"data":"nom_completo"},

                        {"data":"fecha_recarga"},

                        {"data":"monto"}

                       // {"data":"estado_recarga"}

                       

                        ],





                       

                    language: {

                        "decimal": "",

                        "emptyTable": "No hay datos en la tabla",

                        "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",

                        "infoEmpty": "Mostrando 0 a 0 de 0 entradas",

                        "infoFiltered": "(filtrando de _MAX_ total de entradas)",

                        "infoPostFix": "",

                        "thousands": ",",

                        "lengthMenu": "Mostrar _MENU_ entradas",

                        "loadingRecords": "Cargando...",

                        "processing": "Procesando...",

                        "search": "Buscar:",

                        "zeroRecords": "No se encontraron registros coincidentes",

                        "paginate": {

                            "first": "Primero",

                            "last": "Ultimo",

                            "next": "Siguiente",

                            "previous": "Anterior"

                        },

                        "aria": {

                            "sortAscending": ": Activar para ordenar la columna ascendente",

                            "sortDescending": ": Activar para ordenar la columna Descendente"

                        }



                    }



                });





 

               

            



});

                 

</script>

<script type="text/javascript">

    function refreshTable(){

      var table = $('#example-table').DataTable();

       table.ajax.reload();    



   }



 function registro_saldo(){

            $.ajax({

                type: "post", 

                url: "<?= site_url('admin/bim/Monto_Total') ?>",

                dataType: "json",



                success: function(response) {

                    

                    

                   var resultado=response[0]['MONTO'];

                   var fecha=response[0]['FECHA'] ;

                   var colores=response[0]['color'];

                    //console.log(resultado);

                    

                    $('#saldoempresa').text(resultado);

                    $('#fecha_saldo').text(fecha);



                   var  color=document.getElementsByClassName("circle-tile-heading"); 

                   



                   for (var i=0; i<color.length; i++) 

                    color[i].style.backgroundColor=colores;

                  

                  

                    setTimeout(registro_saldo, time_set);

                     

                    

                }

            });

    }



registro_saldo();

</script>

                 

               <div class="row">

                    <div class="col-lg-12">

                        <div class="page-title">

                            <h1>Historial de Recargas 

                               

                            </h1>

                            <ol class="breadcrumb">

                                <li><i class="fa fa-dashboard"></i>  <a>Realizadas por YAPE</a>

                                </li>

                                

                            </ol>

                        </div>

                    </div>

                    <!-- /.col-lg-12 -->

                </div>

                <!-- /.row -->

                <!-- end PAGE TITLE ROW -->

                       <div class="row">

                    <div class="col-lg-1 col-sm-6">

                    </div>

                    <div class="col-lg-2 col-sm-6">

                     

                     </div>



                  



                    <div class="col-lg-2 col-sm-6">

                      

                    </div>

                    

                    <div class="col-lg-2 col-sm-6">

                       <div class="circle-tile" >

                            <a > 

                                <div class="circle-tile-heading " id="fondo_color" >

                                    <i class="fa fa-money fa-fw fa-3x"></i>

                                </div>

                            </a>

                            <div class="circle-tile-content green">

                                <div class="circle-tile-description text-faded">

                                    Monto Actual

                                </div>

                                <div class="circle-tile-number text-faded">

                                 <SPAN id="saldoempresa" name="CODIGO"></SPAN>

                             </div>

                            

                             <a   class="circle-tile-footer">Hasta el día de hoy</a>

                            

                             </div>

                         </div>

                    </div>

                    <div class="col-lg-2 col-sm-6">

                    

                    </div>

                    <div class="col-lg-2 col-sm-6">

                      

                    </div>



                    

                </div>

                <!-- begin ADVANCED TABLES ROW -->

                <div class="row">



                    <div class="col-lg-12">



                        <div class="portlet portlet-green">

                            <div class="portlet-heading">

                                <div class="portlet-title">

                                    <h4>Reporte de Recargas</h4>

                                </div>

                                <div class="clearfix"></div>

                            </div>

                            <div class="portlet-body">

                                             <br>

             

             <?php if (isset($error)): ?>

                <div class="alert alert-error"><?php echo $error; ?></div>

            <?php endif; ?>

            

            <?php if ($this->session->flashdata('success') == TRUE): ?>

                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>

            <?php endif; ?>

             

            

                <form method="post" action="<?php echo base_url() ?>admin/csv/importcsv" enctype="multipart/form-data">

                    <input type="file" name="userfile" >

                    <br><br>

                    <button type="submit" onclick="refreshTable()" name="submit" value="UPLOAD" class="btn btn-primary" disabled> Cargar Archivo </button>

                </form>



         

            

            

                                <!-- /.table-responsive -->

                            </div>

                            <!-- /.portlet-body -->

                        </div>

                        <!-- /.portlet -->



                    </div>

                    <!-- /.col-lg-12 -->



                </div>





        

                <!-- end PAGE TITLE ROW -->

             

                

                <!-- begin ADVANCED TABLES ROW -->

                <div class="row">



                    <div class="col-lg-12">



                        <div class="portlet portlet-blue">

                            <div class="portlet-heading">

                                <div class="portlet-title">

                                    <h4>Reporte de Recargas</h4>

                                </div>

                                <div class="clearfix"></div>

                            </div>

                            <div class="portlet-body">

        <div class="table-responsive">



              <table id="example-table" class="table table-striped table-bordered table-hover table-green text-center">

                                        <thead>

                                            <tr>

                                                <th style="text-align:center">ID</th>

                                                <th style="text-align:center">TIPO DE TRANSACCION </th>

                                                <th style="text-align:center">NOMBRE COMPLETO </th>

                                                

                                                <th style="text-align:center">FECHA DE RECARGA </th>

                                                <th style="text-align:center">MONTO </th>

                                                

                                            <!--    <th style="text-align:center">ESTADO DE RECARGA</th>-->

                                           

                                                

                                            </tr>

                                        </thead>

                                        

                                    </table>

         <!--<table class="table table-striped table-hover table-bordered">

                <caption></caption>

                <thead>

                    <tr>

                        <th>Tipo de Transacción</th>

                        <th>Apellido y Nombre</th>

                        <th>Monto</th>

                        <th>Fecha de Recarga</th>

                        <th>Estado de Recarga</th>

                        

                    </tr>

                </thead>

                <tbody>

                    <?php //if ($addressbook == FALSE): ?>

                        <tr><td colspan="5">No hay datos en la tabla</td></tr>

                    <?php //else: ?>

                        <?php //foreach ($addressbook as $row): ?>

                            <tr>

                                <td><?php// echo $row['tipoTransaccion']; ?></td>

                                <td><?php // echo $row['nom_completo']; ?></td>

                                <td><?php // echo $row['monto']; ?></td>

                                <td><?php // echo $row['fecha_recarga']; ?></td>

                                 <td><?php // echo $row['estado_recarga']; ?></td>

                            </tr>

                        <?php //endforeach; ?>

                    <?php //endif; ?>

                </tbody>

            </table>-->

            </div>

                                <!-- /.table-responsive -->

                            </div>

                            <!-- /.portlet-body -->

                        </div>

                        <!-- /.portlet -->



                    </div>

                    <!-- /.col-lg-12 -->



                </div>

 











