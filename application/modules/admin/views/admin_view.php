<link rel="stylesheet" type="text/css" href="static/main/js/datatable/css/dataTables.bootstrap.min.css">
 
<script type="text/javascript" charset="utf8" src="static/main/js/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="static/main/js/datatable/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	$(function() {
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
			},
			order : [[3,'desc']]
		    
	    });
	});
</script>


<div>
	<div class="row">
		<table class="table table-bordered"  id="table_id" class="display">
			<thead>
				<tr>
					<th style="text-align:center">Nodo</th>
					<th style="text-align:center">Sensor</th>
					<th style="text-align:center">Datos</th>
					<th style="text-align:center">Unidades</th>
					<th style="text-align:center">Tiempo</th>
				</tr>
			</thead>
			<tbody>
			<!-- <?php foreach  ($datos as $key => $value): ?>
				<tr>
					<td style="text-align:center"><?php// echo strtoupper($value->id_wasp) ; ?></td>
					<td style="text-align:center"><?php //echo strtoupper($value->name."  (".$value->id_ascii.")") ; ?></td>
					<td style="text-align:center"><?php// echo strtoupper($value->value) ; ?></td>
					<td style="text-align:center"><?php //echo strtoupper($value->units) ; ?></td>
	                <td style="text-align:center"><?php// echo strtoupper($value->timestamp) ; ?> </td>
				</tr>
			<?php endforeach ?> -->
			</tbody>
		</table>
	</div>
</div>
