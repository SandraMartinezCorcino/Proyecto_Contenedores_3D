
 <style>
            #plano_3d {
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                display:none;
            }

            #renderCanvas {
                width: 100%;
                height: 100%;
                touch-action: none;
            }

         

         
        </style>

              <script type="text/javascript">
       function informacion(){
            $.ajax({
                type: "post", 
                url: "<?= site_url('admin/BAHIA_C8/informacion_bahia_C8') ?>",
                dataType: "json",

                success: function(response) {
                    
                   var espacios_vacios=response[0]['ESPACIOS_VACIOS'];
                   var espacios_ocupados=response[0]['ESPACIOS_OCUPADOS'];
                   var espacios_total=response[0]['ESPACIOS_TOTAL'];
                   console.log(espacios_vacios);
                    
                    $('#ESPACIOS_VACIOS').text(espacios_vacios);
                    $('#ESPACIOS_OCUPADOS').text(espacios_ocupados);
                    $('#ESPACIOS_TOTAL').text(espacios_total);
                     
                    
                }
            });
    }
    informacion();

 </script>



  <div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading">  BAHIA C8</a></li>
    </ul>
    <div class="custom-search hidden-sm hidden-xs">
    
    </div>
</div>




<div class="dashboard-wrapper">

    <!-- Left Sidebar Start -->
    <div class="left-sidebar">

        <!-- Row Start -->
        <div class="row">

            <div class="col-lg-2 col-md-2">

             <div class="widget">

                <div class="widget-body">
                   <div class="panel panel-info">
                      <div class="panel-heading">
                        <h4 class="panel-title"><i class="icon ion-clock text-info"></i> INFORMACIÓN</h4>
                    </div>
                    <div class="panel-body">
                      
                        <div class="wrapper">
                              <div class="list-group no-margin">
                                <a href="javascript:;" class="list-group-item">
                                  <span class="pull-right">
                                    <i class="fa-3x text-warning"><img  src="<?php echo base_url(); ?>/img/container3.png" ></i>
                                  </span>
                                   <h4 class="list-group-item-heading"><i id='ESPACIOS_OCUPADOS'></i></h4>
                                   <p class="list-group-item-text">Espacios Ocupados</p>
                                </a>

                                <a href="javascript:;" class="list-group-item">
                                <span class="pull-right">
                                <i class=" fa-3x text-warning"><img  src="<?php echo base_url(); ?>/img/vacio_rFB_icon.png" ></i>
                            </span>
                            <h4 class="list-group-item-heading"><i id='ESPACIOS_VACIOS'></i></h4>
                            <p class="list-group-item-text">Espacios Vacios</p>
                        </a>
                        <a href="javascript:;" class="list-group-item">
                          <span class="pull-right">
                            <i class="fa fa-plus fa-3x text-success"></i>
                        </span>
                        <h4 class="list-group-item-heading"><i id='ESPACIOS_TOTAL'></i></h4>
                        <p class="list-group-item-text">Total</p>      
                    </a>
                            </div>
                    </div>


                </div>
</div>

</div>
</div>

</div>
               
            <div class="col-lg-10 col-md-10">
                <div class="widget">
                   
                    <div class="widget-body">
                     
                        <div class="div1">
                    
                          
                         <canvas id="renderCanvas"></canvas>

                        </div>
                    </div>
                </div>
            </div>

            
        </div>


    </div>


</div>



<script type="text/javascript">

function exito(data) {
        var canvas = document.getElementById("renderCanvas");

                var engine = new BABYLON.Engine(canvas, true);
                var scene = new BABYLON.Scene(engine);
                scene.clearColor =   new BABYLON.Color3( 35 / 255, 102 / 255,144/255);

                var camera = new BABYLON.ArcRotateCamera("Camera", Math.PI, Math.PI / 8, 150, BABYLON.Vector3.Zero(), scene);

                camera.setPosition(new BABYLON.Vector3(0, 30, -78));

                camera.lowerBetaLimit = 0.1;
                camera.upperBetaLimit = (Math.PI / 2) * 0.9;
                camera.lowerRadiusLimit = 30;
                camera.upperRadiusLimit = 150;

                camera.attachControl(canvas, true);

                var light2 = new BABYLON.HemisphericLight("hemi", new BABYLON.Vector3(0, 1, 0), scene);

               var light = new BABYLON.DirectionalLight("light", new BABYLON.Vector3(18,0,20), scene);
                light.position = new BABYLON.Vector3(1,1,-10);

                var Piso = BABYLON.Mesh.CreateBox("piso", 2, scene);
                Piso.material = new BABYLON.StandardMaterial("Mat", scene);
                Piso.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/g3.jpg", scene);
                Piso.material.diffuseTexture.hasAlpha = true;

                Piso.position = new BABYLON.Vector3(10, -3, 15);
                Piso.scaling = new BABYLON.Vector3(30, 20, 1);
                Piso.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);


    var redMat = new BABYLON.StandardMaterial("redMat", scene);
    redMat.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/contenedor.png", scene);


    var groundTexture = new BABYLON.DynamicTexture("dynamic texture", 512, scene, true);

    

    for (var i = data.length-1; i >= 0; i--){

        if (data[i].FLAG_ESTADO==0) {

        var box3 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);
            
        var groundTexture = new BABYLON.DynamicTexture("dynamic texture", 512, scene, true);

        var vacio = new BABYLON.StandardMaterial('mat', scene);
        vacio.diffuseTexture  = groundTexture;
        vacio.specularColor = new BABYLON.Color3(1, 0, 0);
        vacio.diffuseTexture.hasAlpha = true;
        vacio.alpha = 0.7;

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

        else if (data[i].FLAG_ESTADO==1){


       var box3 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);

        var box4 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);

        box3.material = redMat;


        var groundTexture = new BABYLON.DynamicTexture("dynamic texture", 512, scene, true);

        var vacio = new BABYLON.StandardMaterial('mat', scene);
        vacio.diffuseTexture = groundTexture;
        vacio.specularColor = new BABYLON.Color3(0, 0, 0);
        vacio.alpha = 0.4;

        box4.material = vacio;

        var clearColor = "#555555";
        var font = "bold 70px Arial Black";
        var invertY = true;
        var text = data[i].CODIGO;
        var color = "#edf593" //amarillo
        var x = 100;
        var y = 200;

        groundTexture.drawText(text, x, y, font, color, clearColor,invertY);


        box3.position.x = data[i].POSICION_X; //5
        box3.position.y = data[i].POSICION_Y; //0
        box3.position.z = data[i].POSICION_Z; //0
        box3.scaling.x = 2;

        box4.position.x = data[i].POSICION_X; //5
        box4.position.y = data[i].POSICION_Y; //0
        box4.position.z = data[i].POSICION_Z; //0
        box4.scaling.x = 2;


        }


     }

     engine.runRenderLoop(function () {
            scene.render();
        });

      window.addEventListener("resize", function () {
            engine.resize();
        });

};

     $.ajax({

           type: "POST",

           url: "<?= site_url('admin/Bahia_C8/maestro_bahia_C8') ?>",


           
           dataType: "json",

            success: function (data) {
                console.log(data);

             exito(data);

            },

            error: function (error) {

                  alert('ERROR!');  

//                $.unblockUI();

            }

           

 

         });
        
        
     

        

        


</script>

