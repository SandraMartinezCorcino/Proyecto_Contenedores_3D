
<link rel="stylesheet" type="text/css" href="static/main/js/datatable/css/dataTables.bootstrap.min.css">
 

<script type="text/javascript" charset="utf8" src="static/main/js/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="static/main/js/datatable/js/dataTables.bootstrap.min.js"></script>


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
	} );
</script>
<br>
<br>
<br>

<div class="row-fluid">
	<h1>Almacen</h1>
	<br>
	<a class="btn btn-info" href="admin/almacen/agregar"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar Almacen</a>
</div> 

<br>
<br>

<div class="row-fluid">

	<table class="table table-bordered"  id="table_id" class="display">
			<thead>
				<tr>
					<th style="text-align:center">Item</th>
					<th style="text-align:center">Almacen</th>
					<th style="text-align:center">Estado</th>
					<th style="text-align:center">Ubicación</th>
					<th style="text-align:center">Stock</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
		
		<tbody>
		 
         <?php foreach ($almacen_all as $key=>$value): ?>
     		<tr>
				<td style="text-align:center"><?php echo ($key+1) ; ?></td>
				<td style="text-align:center"><?php echo ($value->nombre_almacen) ; ?></td>
				<td style="text-align:center"><?php echo ($value->estado_almacen) ; ?></td>
				<td style="text-align:center"><?php echo ($value->ubicacion) ; ?></td>
				<td style="text-align:center"><?php echo ($value->stock) ; ?></td>
				<td style="text-align:center"><a href="admin/almacen/editar/<?php echo $value->id_almacen; ?>" class="btn btn-primary">Editar</a></td>
				<td style="text-align:center"><a href="admin/almacen/eliminar/<?php echo $value->id_almacen; ?>" class="btn btn-danger" class="btn btn-danger boton_eliminar">Eliminar</a></td>

				</tr>
			<?php endforeach ?>
         
				
		
			</tbody>
	
	</table>
</div>