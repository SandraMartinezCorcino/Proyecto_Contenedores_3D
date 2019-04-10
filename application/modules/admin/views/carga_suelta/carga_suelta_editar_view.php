<br>
<br>
<br>
<div class="row-fluid">
	<h1>EDITAR CARGA SUELTA</h1>
</div>

<br>
<br>

<a class="btn btn-primary" href="admin/carga_suelta">Atras</a>

<br>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<?php echo form_open_multipart('', array('class' => 'form-horizontal')) ?>

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Descripción</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar Desripción..." value="<?php echo $carga_suelta->descripcion ?>">
			      	<?php echo form_error('descripcion', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			</div>
			
			<!--<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<button type="submit" class="btn btn-success">Enviar</button>
			    </div>
			</div>-->
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<?php helper_btn_enviar_salir('admin/carga_suelta'); ?>
			    </div>
			</div>
	</div>
</div>