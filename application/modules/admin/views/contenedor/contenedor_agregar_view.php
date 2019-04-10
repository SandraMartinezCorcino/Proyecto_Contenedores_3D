<br>
<br>
<br>
<div class="row-fluid">
	<h1>Agregar Contenedor</h1>
</div>

<br>
<br>

<a class="btn btn-primary" href="admin/contenedor">Atras</a>

<br>  

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<?php echo form_open_multipart('', array('class' => 'form-horizontal')) ?>
			<div class="form-group">
				 <label for="inputEmail3" class="col-md-4 control-label">Código RFID</label>
				 
				 <div class="col-md-8">
				 <input type="text" class="form-control" name="rfid_contenedor" id="rfid_contenedor" placeholder="Ingresa Rfid..." value="<?php echo set_value('rfid_contenedor'); ?>">
				 	<?php echo form_error('rfid_contenedor', '<span class="label label-danger	">', '</span>'); ?>
				 </div>
			</div>	

			<div class="form-group">
				<label for="inputEmail3" class="col-md-4 control-label">Nombre del Contenedor</label>
				
				<div class="col-md-8">
				<input type="text" class="form-control" name="nombre_contenedor" id="nombre_contenedor" placeholder="Ingresa nombre del Contenedor..." value="<?php echo set_value('nombre_contenedor'); ?>">
					<?php echo form_error('nombre_contenedor', '<span class="label label-danger">', '</span>');?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="inputEmail3" class="col-md-4 control-label">Tipo del Contenedor</label>
				<div class="col-md-8">
				 	<select name="tipo_contenedor" class="form-control">
					   
					   <?php foreach ($tipo_contenedor_all as $key => $value): ?>
							
						<option  <?php  echo (($value->id_tipo_contenedor)?'selected':'') ?> value="<?php echo $value->id_tipo_contenedor ?>"><?php echo $value->nombre_tipo_contenedor ?> </option>
						<?php endforeach ?>
						
						
					
					</select>
				 	<?php echo form_error('tipo_contenedor', '<span class="label label-danger	">', '</span>'); ?>
				</div>
			</div>	
			
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<button type="submit" class="btn btn-success">Enviar</button>
			    </div>
			</div>
		</form> 
	</div>
		
</div>