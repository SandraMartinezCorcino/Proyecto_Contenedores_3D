
      <script>
            $(document).ready(function () {
               
                var table = $('#bahias').DataTable({

                    "ajax": "<?= site_url('admin/bahias/get_bahia') ?>",

                    "columns": [
                        {"data":"id"},
                        {"data":"COD_BAHIA"},
                        {"data":"COD_RFID"},
                        {"data":"FECHA_VINCULACION_BAHIA"}
                       
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
               
                //console.log(table);
                 });
                 </script>

    <div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading"> RELACION DE BAHIAS</a></li>
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
            
            <div class="col-lg-12 col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Relación de Bahias
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
                    <div class="widget-body">
                     
                        <div class="div1">
                           <table style='text-align:center;vertical-align:middle' id="bahias" class="display table table-bordered table-striped" cellspacing="0" width="100%">
                           <thead style=' background-color: #318bc5;'>
                           <tr> 
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>ID</th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>COD_BAHIA</th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>COD_RFID</th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>FECHA - HORA</th>
                          
                            
                          </tr>             
                          </thead>
                         </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

