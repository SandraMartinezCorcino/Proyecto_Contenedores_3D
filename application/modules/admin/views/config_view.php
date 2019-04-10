<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/main/js/datatable/css/dataTables.bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/dataTables.bootstrap.min.js"></script>
<link href="<?php echo base_url(); ?>css/new.css" rel="stylesheet">

<!-- Sub Nav End -->
<div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a  class="heading">Editar</a></li>
        <li class="hidden-sm hidden-xs">
            <a href="admin/config" class="selected"> <!--href="admin/parkeo"-->
              Perfil
          </a>
      </li>
 
</ul>
<div class="custom-search hidden-sm hidden-xs">
    <input type="text" class="search-query" placeholder="Search here ...">
    <i class="fa fa-search"></i>
</div>
</div>
<!-- Sub Nav End -->

<div class="dashboard-wrapper">

    <!-- Left Sidebar Start -->
    

    <!-- Row Start -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="widget no-margin">
                <div class="widget-header">
                    <div class="title">
                        Editar Perfil 
                    </div>
                    <span class="tools">
                        <i class="fa fa-cogs"></i>
                    </span>
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <div class="thumbnail">
                                <img alt="300x200" src="img/profile.png">
                                <br>
                                <h4 class="center-align-text">USER</h4>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                         <h5>
                            Login Information
                        </h5>
                        <hr>


                        <form action="<?php echo base_url();?>admin/usuarios/insertar" class="form-horizontal ws-validate" method="post">
                            <div class="form-group">
                                <label for="input" class=" col-sm-3 control-label">Usuario</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="usuario" placeholder="Ingresar Usuario..." required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input" class="col-sm-3 control-label">Contraseña</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="contrasena" placeholder="Ingresar Contraseña..." required />
                                </div>
                            </div>


                      
                          <hr>

                          <div class="form-actions">
                            <button type="submit" name="guardar" value="Guardar" class=" btn btn-info pull-right">GUARDAR</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
              
        

<br>
<br>


    <!-- Row End -->


  

</div>