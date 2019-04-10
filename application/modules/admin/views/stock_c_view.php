
<script>
    $(function () {
        $('#table_id').DataTable({
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
                    "sortDescending": ": activar para ordenar la columna Descendente"
                }
            }
        });
        
    });
</script>

 <div class="sub-nav hidden-sm hidden-xs">
          <ul>
            <li><a href="#" class="heading">ESTADO DE BAHIA</a></li>
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
            <!-- Row Start -->
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      STOCK DE BAHIA
                     
                    </div>
                  </div>
                  <div class="widget-body">

                    <form id="consulta" action="<?php echo base_url();?>admin/Stock_c/obtener_bahia" class="form-horizontal no-margin" method="post">
                      <div class="form-group">
                        <label for="pwd" class="col-sm-2 control-label">BAHIA</label>
                        <div class="col-sm-10">
                          <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                              <select id="DateOfBirthMonth" name="nom_bahia" class="form-control" required>
                                <option value="">
                                  - SELECCIONAR BAHIA -
                                </option>
                                <option value="A1">
                                  BAHIA A1
                                </option>
                                <option value="A2">
                                  BAHIA A2
                                </option>
                                <option value="B3">
                                  BAHIA B3
                                </option>
                                <option value="C2">
                                  BAHIA C2
                                </option>
                                <option value="C4">
                                  BAHIA C4
                                </option>
                                <option value="C5">
                                  BAHIA C5
                                </option>
                                <option value="C6">
                                  BAHIA C6
                                </option>
                                <option value="C7">
                                  BAHIA C7
                                </option>
                                <option value="C8">
                                  BAHIA C8
                                </option>
                                <option value="C9">
                                  BAHIA C9
                                </option>
                                <option value="C10">
                                  BAHIA C10
                                </option>
                                <option value="D1">
                                  BAHIA D1
                                </option>
                                <option value="D2">
                                  BAHIA D2
                                </option>
                                <option value="D3">
                                  BAHIA D3
                                </option>
                                <option value="D4">
                                  BAHIA D4
                                </option>
                                <option value="D5">
                                  BAHIA D5
                                </option>
                                <option value="D6">
                                  BAHIA D6
                                </option>
                                <option value="D7">
                                  BAHIA D7
                                </option>
                                <option value="D8">
                                  BAHIA D8
                                </option>
                                <option value="D9">
                                  BAHIA D9
                                </option>
                                 <option value="D10">
                                  BAHIA D10
                                </option>
                                 <option value="D11">
                                  BAHIA D11
                                </option>
                                 <option value="D12">
                                  BAHIA D12
                                </option>
                                 <option value="D13">
                                  BAHIA D13
                                </option>
                                 <option value="D14">
                                  BAHIA D14
                                </option>
                                 <option value="D15">
                                  BAHIA D15
                                </option>
                                <option value="E1">
                                  BAHIA E1
                                </option>
                                <option value="E2">
                                  BAHIA E2
                                </option>
                                <option value="E3">
                                  BAHIA E3
                                </option>
                                <option value="E4">
                                  BAHIA E4
                                </option>
                                <option value="E5">
                                  BAHIA E5
                                </option>
                                <option value="E6">
                                  BAHIA E6
                                </option>
                                <option value="E7">
                                  BAHIA E7
                                </option>
                                <option value="E8">
                                  BAHIA E8
                                </option>
                                <option value="E9">
                                  BAHIA E9
                                </option>
                                 <option value="E10">
                                  BAHIA E10
                                </option>
                                 <option value="E11">
                                  BAHIA E11
                                </option>
                                 <option value="E12">
                                  BAHIA E12
                                </option>
                                 <option value="E13">
                                  BAHIA E13
                                </option>
                                 <option value="E14">
                                  BAHIA E14
                                </option>
                                 <option value="E15">
                                  BAHIA E15
                                </option>
                                 </select>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                              <select name="posicion_bahia"  class="form-control" required>
                                <option value="">
                                  - LADO DE LA BAHIA -
                                </option>
                                <option value="I">
                                  I - IZQUIERDA  
                                </option>
                                <option value="D">
                                  D - DERECHA
                                </option>
                              </select>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" name="guardar" class="btn btn-info">BUSCAR</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row End -->
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
                
               
            </div>
        
        </div>

        <div class="table-responsive">

              <table class="table table-condensed table-striped table-bordered table-hover no-margin" id="table_id">
            <thead>
                <tr>
                    <th style="text-align:center">Item</th>

                    <th style="text-align:center">CÓDIGO DE BAHIA</th>
                    <th style="text-align:center">TOTAL DE CONTENEDORES</th>
                    

                </tr>
            </thead>
            <tbody>
             <?php foreach ($stock_bahia as $key => $fila): ?>

                <tr>
                <td style="text-align:center">

                <?php 
                if (isset($key)) {
                    echo $key + 1;
                } else {
                    echo "-";
                }
                
                 

                ?>
                </td> 
                
                <td style="text-align:center">
                <?php if (isset($fila->BAHIA)) {
                        echo $fila->BAHIA;
                } else {
                    echo "-";
                }
                
             
                ?>
                </td>
                
                <td style="text-align:center">
                <?php if (isset($fila->TOTAL_BAHIA)) {
                   echo $fila->TOTAL_BAHIA;
                } else {
                   echo  "-";               
               }
                 
                
                 ?>                          
                
                </td>

                </tr>
                <?php endforeach ?> 
                </tbody>
                </table>


        </div>

        </div>

        



                                                              <!--  <button onclick="javascript:demoFromHTML()" class="button"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span>  Print</button>-->
        </div> 
        
        </div>
        
        </div>
                                              
        </div>

                                             
    </div>
    </div> 
        </div>