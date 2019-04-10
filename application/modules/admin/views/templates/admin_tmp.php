<!DOCTYPE HTML>

<html>
    <head>
        <title>Administraci&oacute;n</title>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="static/main/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="static/modules/admin/estilo.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
        <link href="<?php echo base_url(); ?>css/new.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/estilos.css" rel="stylesheet">  
        <link href="<?php echo base_url(); ?>css/alertify.core.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>fonts/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="savar.ico" type="image/ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/main/js/datatable/css/dataTables.bootstrap.min.css">




        <script src="<?php echo base_url(); ?>js/jquery-1.11.1.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.scrollUp.js"></script>
        <script src="<?php echo base_url(); ?>js/menu.js"></script>
      
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/dataTables.bootstrap.min.js"></script>

       

        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/dataTables.buttons.min.js"></script>

        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/buttons.html5.min.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/buttons.print.min.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/jszip.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>static/main/js/datatable/js/buttons.flash.min.js"></script>
       
        <script src="<?php echo base_url(); ?>static/main/admin.plugins.js"></script>

<!-- 
        <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>static/main/js/three.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>static/main/js/Detector.js"></script>
        <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>static/main/js/OrbitControls.js"></script>
         <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>static/main/js/stats.min.js"></script>-->

         <!--BABYLON-->
        <!--   <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>js/babylon/hand.minified-1.2.js"></script>
          <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>js/babylon/babylon.js"></script>
          <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>js/babylon/babylon.gui.min.js"></script>
           <script type="text/javascript" charset="utf8" src="<?php// echo base_url(); ?>js/babylon/cannon.js"></script>
           <script type="text/x-draco-decoder" charset="utf8" src="<?php// echo base_url(); ?>js/babylon/draco_decoder.js"></script>
           <script type="text/javascript" charset="utf8" src="<?php //echo base_url(); ?>js/babylon/oimo.js"></script>  -->
           <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>js/babylon/babylon.custom.js"></script>

       <!-- <script src="https://www.babylonjs.com/hand.minified-1.2.js"></script>
        <script src="https://preview.babylonjs.com/babylon.js"></script>
        <script src="https://preview.babylonjs.com/gui/babylon.gui.min.js"></script>
        <script src="https://preview.babylonjs.com/cannon.js"></script>
        <script src="https://preview.babylonjs.com/draco_decoder.js" type="text/x-draco-decoder"></script>
        <script src="https://preview.babylonjs.com/oimo.js"></script>-->

    </head>
    <!--logo-->
    <header>
      <!--  <a class="logo">
            <img src="<?php //echo base_url(); ?>img/savar_logo.png" alt="Logo"/>
        </a> -->
      <!--  <a href="index-2.html" class="logo">
        <img src="img/logo.png" alt="Logo"/>
      </a>-->

    </header>

    <!--menu-->


    <style>
        .row{
            border-left-width: 20px; margin-left: 0px; border-right-width: 20px; margin-right: 0px;}
        </style>

        <!-- Main Container start -->
        <div class="dashboard-container">

        <div class="container">
            <!-- Top Nav Start -->

            <div class="row">
                <div id='cssmenu'  class="col-md-12">
                    <ul>
                       <!-- <li class="<?php //if($this->uri->uri_string() == 'admin/bahias') { echo 'active'; } ?>">
                            <a href="admin/bahias"><i class="glyphicon glyphicon-road"></i>BAHIAS</a>
                            <!--  <ul>
                                  <li><a href='index-2.html'>Dashboard</a></li>
                                  <li><a href='index2.html'>Dashboard V2</a></li>
                                  <li><a href='index3.html'>Dashboard V3</a></li>
                               </ul>-->
                       <!-- </li>-->

                       <li class="<?php if($this->uri->uri_string() == 'admin/inicio') { echo 'active'; } ?>"><a href="admin/inicio"><i class="glyphicon glyphicon-list-alt"></i>PLANO</a></li>

                        <li class="<?php if($this->uri->uri_string() == 'admin/contenedor') { echo 'active'; } ?>">
                            <a href="admin/contenedor"><i class="glyphicon glyphicon-compressed"></i>Contenedores</a>
                            <!--  <ul>
                                  <li><a href='index-2.html'>Dashboard</a></li>
                                  <li><a href='index2.html'>Dashboard V2</a></li>
                                  <li><a href='index3.html'>Dashboard V3</a></li>
                               </ul>-->
                        </li>
                        <!--<li class="<?php //if($this->uri->uri_string() == 'admin/movimiento_contenedor') { echo 'active'; } ?>">
                            <a href="admin/movimiento_contenedor"><i class="glyphicon glyphicon-list-alt"></i>Reportes Contenedores</a>

                            <ul>
                                <li class="<?php //if($this->uri->uri_string() == 'admin/movimiento_contenedor') { echo 'active'; } ?>"><a href="admin/movimiento_contenedor">Movimiento de Contenedores</a></li>

                                <li class="<?php //if($this->uri->uri_string() == 'admin/Stock_c') { echo 'active'; } ?>" ><a href="admin/Stock_c">Stock</a></li>
                                
                             <!--   <li class="<?php //echo (($menu == 'movimiento_contenedores_area_servicio') ? 'active' : '') ?>"><a href="admin/movimiento_contenedores_area_servicio">Movimiento en Área de Servicio</a></li>
                              
                                <li class="<?php //echo (($menu == 'movimiento_ctn_cs_historial_inventario') ? 'active' : '') ?>"><a href="admin/movimiento_ctn_cs_historial_inventario">CTN - CS Historial e Inventarios</a></li>-->
                           <!--  </ul>


                        </li>-->

                         

                        <!--<li class="<?php //if($this->uri->uri_string() == 'admin/transferencia') { echo 'active'; } ?>">-->
                        <!--  <a href="admin/ubicacion_contenedores"><i class="glyphicon glyphicon-map-marker"></i>Ubicación Contenedores</a>-->
                        </li>
                        
                          <li class="<?php if($this->uri->uri_string() == 'admin/Stock_ubicaciones') { echo 'active'; } ?>" >
                            <a href="admin/Stock_ubicaciones"><i class="fa fa-search"></i>Stock</a>
                        </li>

                        <li class="<?php if($this->uri->uri_string() == 'admin/buscador') { echo 'active'; } ?>" >
                            <a href="admin/buscador"><i class="fa fa-search"></i>Busqueda</a>
                        </li>

                        <!--
                        <li class="<?php //if($this->uri->uri_string() == 'admin/config') { echo 'active'; } ?>">
                            <a href="admin/config"><i class="fa fa-cogs"></i>CONFIGURACION</a>
                        </li>-->
                        

                        <li class="<?php if($this->uri->uri_string() == 'admin/logout') { echo 'active'; } ?>">
                            <a href="admin/logout"><i class="glyphicon glyphicon-remove-sign"></i>Salir</a>
                        </li>

                    </ul>
                   


                </div>
               <!-- <div class="col-md-1">
                    <div class="pull-right">


                        <ul id="mini-nav" class="clearfix">

                            <li class="list-box user-profile">
                                <a id="drop7" href="#" role="button" class="dropdown-toggle user-avtar" data-toggle="dropdown">
                                    <img src="img/user7.png" alt="Bluemoon User">
                                </a>

                                <ul class="dropdown-menu server-activity">
                                    <li>
                                        <p><i class="fa fa-cog text-info"></i> Account Settings</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-fire text-warning"></i> Payment Details</p>
                                    </li>
                                    <li>
                                        <div class="demo-btn-group clearfix">
                                            <a href="#" data-original-title="" title="">
                                                <i class="fa fa-facebook fa-lg icon-rounded info-bg"></i>
                                            </a>
                                            <a href="#" data-original-title="" title="">
                                                <i class="fa fa-twitter fa-lg icon-rounded twitter-bg"></i>
                                            </a>
                                            <a href="#" data-original-title="" title="">
                                                <i class="fa fa-linkedin fa-lg icon-rounded linkedin-bg"></i>
                                            </a>
                                            <a href="#" data-original-title="" title="">
                                                <i class="fa fa-pinterest fa-lg icon-rounded danger-bg"></i>
                                            </a>
                                            <a href="#" data-original-title="" title="">
                                                <i class="fa fa-google-plus fa-lg icon-rounded success-bg"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="demo-btn-group clearfix">
                                            <button href="#" class="btn btn-danger">
                                                Logout
                                            </button>
                                        </div>
                                    </li>
                                </ul>


                            </li>
                        </ul>
                    </div>

                </div>-->



            </div>


            <!-- Sub Nav End -->


            <?php echo $body; ?>
            <footer>
                <p>© Savar </p>
            </footer>

        </div>
    </div>

    <!-- Main Container end -->



    <!-- Custom JS -->


    <script type="<?php echo base_url(); ?>text/javascript">
	
	
        //ScrollUp
      $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Top', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

      //Tooltip
      $('a').tooltip('hide');

      //Popover
      $('.popover-pop').popover('hide');

      //Dropdown
      $('.dropdown-toggle').dropdown();

      //Data Tables


    </script>

</body>


</html>