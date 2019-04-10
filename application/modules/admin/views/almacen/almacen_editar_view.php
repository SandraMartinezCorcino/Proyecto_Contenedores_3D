<br>
<br>
<br>
<div class="row-fluid">
	<h1>EDITAR ALMACEN</h1>
</div>

<br>
<br>

<a class="btn btn-primary" href="admin/almacen">Atrás</a>

<br>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<?php echo form_open_multipart('', array('class' => 'form-horizontal')) ?>
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">ID</label>
			     <div class="col-sm-8">
			      	<input type="text" class="form-control" value="<?php echo $almacen->id_almacen ?>" disabled>
			    </div>
			</div>

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Almacen</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="nombre_almacen" id="nombre_almacen" placeholder="Ingresa nombre del almacen..." value="<?php echo $almacen->nombre_almacen ?>">
			      	<?php echo form_error('nombre_almacen', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			</div>

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Estado</label>
			    <div class="col-sm-8">
			    	<select name="estado_almacen" id="estado_almacen">
			    		<?php foreach ($estado as $key => $value): ?>
			    			<option value="<?php echo $value->id_estado ?>" <?php echo (($value->id_estado==$value->estado_almacen)?'selected':'') ?>><?php echo $value->estado ?></option>
			    		<?php endforeach ?>	
			    	</select>
			    </div>
			</div>

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Ubicación</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Ingresa Ubicación..." value="<?php echo $almacen->ubicacion ?>">
			      	<?php echo form_error('ubicacion', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			</div>

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">stock</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="stock" id="stock" placeholder="stock..." value="<?php echo $almacen->stock ?>"><?php echo form_error('stock', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			 </div>	
			
			<!--<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<button type="submit" class="btn btn-success">Enviar</button>
			    </div>
			</div>-->
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<?php helper_btn_enviar_salir('admin/almacen'); ?>
			    </div>
			</div>
		</form> 
	</div>
		