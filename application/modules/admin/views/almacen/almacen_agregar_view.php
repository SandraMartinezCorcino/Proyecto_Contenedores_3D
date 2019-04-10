<br>
<br>
<br>
<div class="row-fluid">
	<h1 class="titulo_admin">Agregar Almacen</h1>
</div>
<br>
<br>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<?php echo form_open_multipart('', array('class' => 'form-horizontal')) ?>
			
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Almacen</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="nombre_almacen" id="nombre_almacen" placeholder="Ingresa nombre del Almacen..."><?php echo form_error('nombre_almacen', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			 </div>

			 <div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Ubicación</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Ingresa nombre del ubicación..."><?php echo form_error('ubicacion', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			 </div>

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">stock</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="stock" id="stock" placeholder="Ingresa nombre del stock..."><?php echo form_error('stock', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			 </div>

			<br>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<?php helper_btn_enviar_salir('admin/almacen'); ?>
			    </div>
			</div>
		</form> 
	</div>
		
</div>