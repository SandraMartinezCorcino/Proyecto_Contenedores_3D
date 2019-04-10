<br>
<br>
<br>
<div class="row-fluid">
	<h1 class="titulo_admin">Agregar Carga Suelta</h1>
</div>
<br>
<br>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<?php echo form_open_multipart('', array('class' => 'form-horizontal')) ?>
		
			

			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-4 control-label">Descripción</label>
			    <div class="col-sm-8">
			      	<input type="text" class="form-control" name="carga_suelta" id="carga_suelta" placeholder="Ingresar Descripción ..." >	<?php echo form_error('carga_suelta', '<span class="label label-danger	">', '</span>'); ?>
			    </div>
			</div>
			
			<br>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			    	<?php helper_btn_enviar_salir('admin/usuario'); ?>
			    </div>
			</div>
		</form> 
	</div>
		
</div>