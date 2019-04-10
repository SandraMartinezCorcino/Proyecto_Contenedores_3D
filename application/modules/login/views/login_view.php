<!DOCTYPE HTML>
<html>
	<head>
		<base href="<?php echo base_url(); ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Administración</title>
		<link rel="stylesheet" href="static/main/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="static/modules/login/css/estilo.css">
		
		<script src="static/main/jquery.js"></script>
		<link rel="icon" href="savar.ico" type="image/ico">
		 <!-- CSS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
		<script src="static/main/jquery-1.11.1.min.js"></script>

	</head>
	
	<body>
	<div class="top-content">
	 <div class="inner-bg">
		<!--<div class="header">
				<div class="row">
					<div class="col-md-12"><img src="static/main/img/logo.png"></div>		 
				</div>
		</div>-->
		<div class="container">
			
			  <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>SAVAR</strong> S.A.C </h1>
                            <div class="description">
                            	<p>
	                            	CORPORACIÓN LOGISTICA
                            	</p>
                            </div>
                        </div>
                    </div>
			
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 form-box">
				<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Ingrese sus datos </h3>	
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
				<!--<div class="col-md-offset-4 col-md-4">-->
					<div class="form-bottom">
						<?php echo form_open('',array('class'=>'form-horizontal')); ?>
					        <div class="form-group">
							    <label class="control-label col-md-3" for="usuario">Usuario</label>
							    <div class="col-md-9">
							    	<input class="form-control" type="text" id="usuario" placeholder="Usuario" name="usuario">
							    	<?php echo form_error('usuario','<div class="error">', '</div>'); ?>
							    </div>
							</div>
						  	<div class="form-group">
							    <label class="control-label col-md-3" for="contrasena">Contraseña</label>
							    <div class="col-md-9">
							    	<input class="form-control" type="password" id="contrasena" placeholder="Contraseña" name="contrasena">
							    	<?php echo form_error('contrasena','<div class="error">', '</div>'); ?>
							    </div>
							</div>
							<div class="form-group">
							    <div class="col-md-offset-3 col-md-9">
							      <button type="submit" class="btn btn-primary">Entrar</button>
							    </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
		        <!-- Javascript -->
        <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url();?>js/scripts.js"></script>
		
		
	</body>	
</html>
		