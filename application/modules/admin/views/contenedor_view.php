 <script>
            $(document).ready(function () {
               
                var table = $('#bahias').DataTable({

                    "ajax": "<?= site_url('admin/contenedor/get_contenedor') ?>",

                    "columns": [
                        {"data":"id"},
                        {"data":"bl_master_cont"},
                        {"data":"rfid_contenedor"},
                        {"data":"FECHA_VINCULACION"},
                        {"data":"rfid_contenedor_activo"},   
                        {"data":"FECHA_VINCULACION_ACTIVO"}
                       
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
               
                console.log(table);
                 });
                 </script>
<div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading">Contenedores</a></li>
    </ul>
    <div class="custom-search hidden-sm hidden-xs">
        <input type="text" class="search-query" placeholder="Search here ...">
        <i class="fa fa-search"></i>
    </div>
</div>

<div class="dashboard-wrapper">

    <div class="left-sidebar">


        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            Contenedores
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
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>BL-MASTER</th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>RFID</th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>FECHA - HORA </th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>RFID - ACTIVO</th>
                            <th style='text-align:center;vertical-align:middle;color:#FFFFFF'>FECHA - HORA (ACTIVO)</th>
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


