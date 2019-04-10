
<script>
   $(document).ready(function () {
   
  
   var table = $('#example-table').DataTable({ 
         "dom": "<'row'<'col-sm-3 text-center'B><'col-sm-3 text-center'l><'col-sm-6'f>>" +
                      "<'row'<'col-sm-12'tr>>" +
                      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                     "buttons": [{
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o"></i> Exportar a Excel',
                title: 'Relación de Espacios Libres'
              }
            ],
     
      
            "ajax":{
              url: "<?php echo site_url('admin/Stock_ubicaciones/stock_espacios_ocupados'); ?>",

              type: "post"
            }, 
            "columns": [
                {"data": "id"},
               
                {"data": "BAHIA"},
                {"data": "CODIGO"},
               
               {"data": "FECHA"}
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


  setInterval( function () {
    table.ajax.reload( null, false ); // user paging is not reset on reload
}, 10000 );


    var tables = $('#example-table_2').DataTable({ 
         "dom": "<'row'<'col-sm-3 text-center'B><'col-sm-3 text-center'l><'col-sm-6'f>>" +
                      "<'row'<'col-sm-12'tr>>" +
                      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                     "buttons": [{
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o"></i> Exportar a Excel',
                title: 'Relación de Espacios Libres'
              }
            ],
     
      
            "ajax":{
              url: "<?php echo site_url('admin/Stock_ubicaciones/stock_espacios_vacios'); ?>",

              type: "post"
            }, 
            "columns": [
                {"data": "id"},
               
                {"data": "BAHIA"},
                {"data": "CODIGO"},
                {"data": "FECHA"}
               
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

    setInterval( function () {
    tables.ajax.reload( null, false ); // user paging is not reset on reload
    }, 10000 );

   });
</script>

<script type="text/javascript">
  function stock_espacios() {
    $.ajax({
            type: "post",
            url: "<?= site_url('admin/Stock_ubicaciones/stock_total_espacios_vacios_ocupados') ?> ",
            dataType: "json",

            success: function (data) {
               var espacios_ocupados=data[0]['ESPACIOS_OCUPADOS'];
               var espacios_libres=data[0]['ESPACIOS_VACIOS'];
               var total_espacios=data[0]['ESPACIOS_TOTAL'];

               console.log(data);

               $('#espacios_ocupados').text(espacios_ocupados);
               $('#espacios_libres').text(espacios_libres);
               $('#total_espacios').text(total_espacios);
            }

    });
  }

  stock_espacios();

  setInterval(stock_espacios, 10000);




</script>

 <div class="sub-nav hidden-sm hidden-xs">
          <ul>
            <li><a href="#" class="heading">STOCK DE BAHIA</a></li>
         </ul>
          <div class="custom-search hidden-sm hidden-xs">
            
          </div>
  </div>
<!-- Sub Nav End -->
 <!-- Dashboard Wrapper Start -->
        <div class="dashboard-wrapper">

          <!--FIN ESPACIOS LIBRE - VACIOS -->

          <div class="row">
            
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="mini-widget">
                <div class="mini-widget-heading clearfix">
                  <div class="pull-left">ESPACIOS OCUPADOS</div>
                  <div class="pull-right"><i class="fa fa-angle-up"></i></div>
                </div>
                <div class="mini-widget-body clearfix">
                  <div class="pull-left">
                    <i class="fa fa-circle"></i>
                  </div>
                  <div class="pull-right number"><i class="pull-right number" id="espacios_ocupados"> </i></div>
                </div>
<!--                 <div class="mini-widget-footer center-align-text">
                  <span>Better than last week</span>
                </div> -->
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="mini-widget">
                <div class="mini-widget-heading clearfix">
                  <div class="pull-left">ESPACIOS DESOCUPADOS</div>
                  <div class="pull-right"><i class="fa fa-angle-down"></i> </div>
                </div>
                <div class="mini-widget-body clearfix">
                  <div class="pull-left">
                    <i class="fa fa-circle-o"></i>
                  </div>
                  <div class="pull-right number"> <i class="pull-right number" id="espacios_libres"></i></div>
                </div>
<!--                 <div class="mini-widget-footer center-align-text">
                  <span>Better than last week</span>
                </div> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="mini-widget mini-widget-grey">
                <div class="mini-widget-heading clearfix">
                  <div class="pull-left">TOTAL DE ESPACIOS</div>
                  <div class="pull-right"><i class="fa fa-angle-up"></i> </div>
                </div>
                <div class="mini-widget-body clearfix">
                  <div class="pull-left">
                    <i class="fa fa-plus"></i>
                  </div>
                  <div class="pull-right number"><i class="pull-right number" id="total_espacios"></i></div>
                </div>
<!--                 <div class="mini-widget-footer center-align-text">
                  <span>Better than last week</span>
                </div> -->
              </div>
            </div>
          </div>

          <!--FIN ESPACIOS LIBRE - VACIOS -->
          
          <!-- Left Sidebar Start -->
     


    <DIV id="fromHTMLtestdiv">
    
    <div class="row">
    
    <div class="col-lg-6 col-md-6 col-sm-12">
    
    <div class="widget no-margin">
    
    <div class="widget-header">
        <div class="title">
        Relación de Espacios Ocupados
        </div>
                                           
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
            <img src="img/savarlogo3.png" alt="logo" class="logo">
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
           
           <div class="table-responsive">
            <table id="example-table" class="table table-striped table-bordered table-hover table-green text-center">
              <thead>
                  <tr>
                    <th style="text-align:center">ID</th>
                                            
                    <th style="text-align:center">BAHIA </th>
                    <th style="text-align:center">UBICACION</th> 
                   <th style="text-align:center">FECHA - HORA</th>
                                              
                                              
                                              
                  </tr>
                </thead>
                                        
              </table>
               
            </div>   
            
        
        </div>


        </div>

        



                                                              <!--  <button onclick="javascript:demoFromHTML()" class="button"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span>  Print</button>-->
        </div> 
        
        </div>
        
        </div>





        <!-- DOS -->
        <DIV class="col-lg-6 col-md-6 col-sm-12">
          
                <div class="widget no-margin">
    
    <div class="widget-header">
        <div class="title">
        Relación de Espacios Desocupados
        </div>
                                           
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
            <img src="img/savarlogo3.png" alt="logo" class="logo">
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
             <div class="table-responsive">
                   <table id="example-table_2" class="table table-striped table-bordered table-hover table-green text-center">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">ID</th>
                                            
                                                <th style="text-align:center">BAHIA </th>
                                                <th style="text-align:center">UBICACION</th>
                                                 
                                                <th style="text-align:center">FECHA - HORA</th>
                                              
                                              
                                              
                                            </tr>
                                        </thead>
                                        
                                    </table>
               
            </div>
        
        </div>


        </div>

        



                                                        
        </div> 
        
        </div>

        </DIV>

        <!-- FIN DOS -->
                                              
        </div>

                                             
    </div>
  
    </div>