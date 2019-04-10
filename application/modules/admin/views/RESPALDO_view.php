
 





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
 } 


 );
	


</script>

<style>
  form {
    max-width: 480px;
    margin: auto;
  }
  .form-group >[class*="col-"] + .ws-errorbox {
    padding: 0 15px;
  }
 #buscador_3d{
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                display:none;
               
            }
  #buscadorCanvas {
                width: 100%;
                height: 100%;
                touch-action: none;
               

            }

</style>
<!-- Sub Nav End -->
<div class="sub-nav hidden-sm hidden-xs">
 <ul>
  <li><a href="#" class="heading">  Buscar Contenedor</a></li>
</ul>
<div class="custom-search hidden-sm hidden-xs">
  <input type="text" class="search-query" placeholder="Search here ...">
  <i class="fa fa-search"></i>
</div>
</div>
<!-- Sub Nav End -->


<!-- Dashboard Wrapper Start -->
<div class="dashboard-wrapper">

  <!-- Left Sidebar Start -->
<div class="left-sidebar">

                    <!-- Row Start -->

                    <!-- Row Start -->
<div class="row">
    <div class="col-lg-12 col-md-12">
    <div class="widget">
        <div class="widget-header">
            <div class="title">
                Consultar Ubicación 

            </div>
            <span class="tools">
                <i class="fa fa-cogs"></i>
            </span>
        </div>
        
        <div class="widget-body">
            <!-- <form class="form-horizontal row-border" action="#">-->


                

           <form action="#" id="form_color" class="form-horizontal row-border" >
            <div class="form-group">
           <div class="row">
          
           <div class="col-lg-4 col-md-4 ">
            <label for="recipient-name" class=" col-form-label">BL-MASTER:</label>
            </div>

            <div class="col-lg-7 col-md-7">
            <input type="text" class="form-control" id="bl_master" name="bl_master" placeholder="Ingresar código del contenedor">
            </div>

            <div class="col-lg-1 col-md-1 ">
            <button type="button" class="btn btn-info" onclick="save()" >Buscar</button>
            </div>

           </div> 
           </div> 
        </form>

        <script type="text/javascript">

              function prueba(data) {
           

               
            var canvas = document.getElementById("buscadorCanvas");
             var engine = new BABYLON.Engine(canvas, true);
            var scene = new BABYLON.Scene(engine);
            scene.clearColor =   new BABYLON.Color3( 35 / 255, 102 / 255,144/255);
        
            var camera = new BABYLON.ArcRotateCamera("Camera", Math.PI, Math.PI / 8, 150, BABYLON.Vector3.Zero(), scene);
        
            camera.attachControl(canvas, true);
        
            var light = new BABYLON.HemisphericLight("hemi", new BABYLON.Vector3(0, 1, 0), scene);

        var Piso = BABYLON.Mesh.CreateBox("piso", 2, scene);
        Piso.material = new BABYLON.StandardMaterial("Mat", scene);
        Piso.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/g3.jpg", scene);
        Piso.material.diffuseTexture.hasAlpha = true;
       // Piso.material.backFaceCulling = false;
        Piso.position = new BABYLON.Vector3(10, -3, 15);
        Piso.scaling = new BABYLON.Vector3(30, 20, 1);
        Piso.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);

      /*  var Pared = BABYLON.Mesh.CreateBox("Pared", 2, scene);
        Pared.material = new BABYLON.StandardMaterial("Mat", scene);
        Pared.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/g3.jpg", scene);
        Pared.material.diffuseTexture.hasAlpha = true;
        Pared.position = new BABYLON.Vector3(5, 7, 45);
        Pared.scaling = new BABYLON.Vector3(31, 10, 1);

        var Pared2 = Pared.clone("Pared2");
        Pared2.rotation.y = Math.PI / 2;
        Pared2.position = new BABYLON.Vector3(35, 7,15);*/

           

           
          var redMat = new BABYLON.StandardMaterial("redMat", scene);

          redMat.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/contenedor3.png", scene);
         
        var advancedTexture = BABYLON.GUI.AdvancedDynamicTexture.CreateFullscreenUI("UI");

          var myLabel = new BABYLON.GUI.Rectangle();
            myLabel.width = 0.1;
            myLabel.height = "60px";
            myLabel.cornerRadius = 20;
            myLabel.color = "#236690";
            myLabel.thickness = 4;
            myLabel.background =  "#47758d";
            // myLabel.alpha = 0.5;
            myLabel.left = "0px";
            myLabel.top = "-350px";
            myLabel.scaleX = 0.95;
            myLabel.scaleY = 0.95;
        
            advancedTexture.addControl(myLabel);

              var text1 = new BABYLON.GUI.TextBlock();
                //text1.textWrapping = true;
        text1.text = "BAHIA:" + data[0].BAHIA;
        text1.color = "#cbc879";
        text1.fontFamily = "Verdana";
        text1.fontSize = 25;
        text1.left = "0px";
        text1.top = "0px";
        /*text1.width = '30px';
        text1.height = '10px';*/

        //text1.horizontalAlignment = BABYLON.GUI.Control.VERTICAL_ALIGNMENT_LEFT;

        myLabel.addControl(text1);  


            

            //console.log ("lleno");

            for (var i = data.length-1; i >= 0; i--) {

            //console.log(data[0].ubicacion);

            //console.log(i);
            
            if (data[0].ubicacion==data[i].CODIGO ) {

            var box3 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);

            box3.material = redMat;

            box3.position.x = data[i].POSICION_X; //5
            box3.position.y = data[i].POSICION_Y; //0
            box3.position.z = data[i].POSICION_Z; //0
            box3.scaling.x = 2;

            }

            else if ( i==0) {

            var box3 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);
            
            var groundTexture = new BABYLON.DynamicTexture("dynamic texture", 512, scene, true);

            var vacio = new BABYLON.StandardMaterial('mat', scene);
            vacio.diffuseTexture  = groundTexture;
            vacio.specularColor = new BABYLON.Color3(1, 0, 0);
             vacio.diffuseTexture.hasAlpha = true;
            vacio.alpha = 0.7;

            box3.material = vacio;

            var clearColor = "#85241f";
            var font = "bold 70px Arial Black";
            var invertY = true;
            var text = data[i].ubicacion;
            var color = "white"
            var x = 100;
            var y = 200;

            groundTexture.drawText(text, x, y, font, color, clearColor,invertY);


            box3.position.x = data[i].POSICION_X; //5
            box3.position.y = data[i].POSICION_Y; //0
            box3.position.z = data[i].POSICION_Z; //0
            box3.scaling.x = 2;

            } 

            else {

            var box3 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);
            
            var groundTexture = new BABYLON.DynamicTexture("dynamic texture", 512, scene, true);

            var vacio = new BABYLON.StandardMaterial('mat', scene);
            vacio.diffuseTexture = groundTexture;
            vacio.specularColor = new BABYLON.Color3(0, 0, 0);
            vacio.alpha = 0.4;

            box3.material = vacio;

            var clearColor = "#555555";
            var font = "bold 70px Arial Black";
            var invertY = true;
            var text = data[i].CODIGO;
            var color = "#edf593"
            var x = 100;
            var y = 200;

            groundTexture.drawText(text, x, y, font, color, clearColor,invertY);


            box3.position.x = data[i].POSICION_X; //5
            box3.position.y = data[i].POSICION_Y; //0
            box3.position.z = data[i].POSICION_Z; //0
            box3.scaling.x = 2;

            }

           

            };
             
          
                  
      engine.runRenderLoop(function () {
            scene.render();
        });

      window.addEventListener("resize", function () {
            engine.resize();
        });

        }
            function save(){

   $('#btnSave').text('buscando...'); //change button text

    $('#btnSave').attr('disabled',true); //set button disable 

    var url;

    url = "<?php echo site_url('admin/buscador/buscar_A1')?>";
    // ajax adding data to database

    $.ajax({

        url : url,

        type: "POST",

        data: $('#form_color').serialize(),

        dataType: "JSON",



        success: function(data)

        {

            console.log(data);


            
            if (data==='Contenedor no existente') 
               {

                jAlert(data, "Mensaje");
                
                var buscador=document.getElementById("buscador_3d");

                buscador.style.display='none';

                $('#btnSave').text('Cerrar'); //change button text

                $('#btnSave').attr('disabled',false); //set button enable 

               } 

            else {
             
               

           

            var buscador=document.getElementById("buscador_3d");

            buscador.style.display='block';

          
            prueba(data);
            
            console.log("3");

             $('#modal_form_color').modal('hide');
                
            $('#btnSave').text('Cerrar'); //change button text

            $('#btnSave').attr('disabled',false); //set button enable 
            
            }
            

          
       
        },

        error: function (jqXHR, textStatus, errorThrown)

        {

            alert('Error adding / buscar data');

            $('#btnSave').text('save'); //change button text

            $('#btnSave').attr('disabled',false); //set button enable 



        }

    });

}
        </script>




            </div>

        </div>

    </div>


    <DIV id="fromHTMLtestdiv">
    
    <div class="row">
    
    <div class="col-lg-12 col-md-12">
    
    <div class="widget no-margin">
    
    <div class="widget-header">
        <div class="title">
        Reporte
        </div>
                                           
        <div class="tools pull-right">
            <div class="btn-group">
                <a class="btn btn-default btn-sm">
                    <i class="fa fa-print" data-original-title="Print">
                    </i>
                </a>
            </div>
        </div>

    </div>
    
    <div class="widget-body">
    <div class="invoice">
        <div class="invoice-head">
            <img src="img/savarlogo2.png" alt="logo" class="logo">
            <div class="invoice-info">
                <span>
                    Usuario: <?php
                    $usuario = $this->session->userdata('usuario');
                    echo ucwords(strtolower($usuario));
                    ;
                    ?>
                </span>
                <br>
                <span class="date">
                    <?php
                    $dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                    echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
                    ?>

                </span>
            </div>
        </div>
        
        <div class="invoice-data-container">
            <div class="from">
                <h5>
                    Datos del Contenedor
                </h5>
                  <?php foreach ($bl_master as $key => $fila): ?>
                <span>
                    BL-MASTER:
                <?php if (isset($fila->bl_master)) {
                        echo $fila->bl_master;
                } else {
                    echo "-";
                }
                
                ?>
                </span>
                <span>
                    CODIGO RFID: 

                     <?php if (isset($fila->rfid_contenedor)) {
                        echo $fila->rfid_contenedor;
                } else {
                    echo "-";
                }
                
                ?>



                </span>
               <?php endforeach ?> 
            </div>
        
        </div>
           <div id="buscador_3d" style="display:none" >


                           
            <canvas id="buscadorCanvas" ></canvas>
                          

            </div>
       

        </div>


        

        
        </div>
        
        </div>
                                              
        </div>

                                             
    </div>
    </div> 

</div>
</div>

</div> 







