
 <style>
            #plano_3d {
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

             #buscadorCanvas {
                width: 100%;
                height: 100%;
                touch-action: none;
               

            }

               #main {
                width: 100%;
                height: 100%;
                touch-action: none;
               

            }

             #div2 {
                overflow-x: scroll;
             }

            .modal-dialog1{width:1500px;margin:30px auto}
 </style>


<!-- Sub Nav End -->
<div class="sub-nav hidden-sm hidden-xs">
    <ul>
        <li><a href="#" class="heading">Movimiento de Contenedor</a></li>
    </ul>
    
    
    <div class="custom-search hidden-sm hidden-xs">
    
    </div>
</div>
<!-- Sub Nav End -->



<!-- Dashboard Wrapper Start -->
<div class="dashboard-wrapper">

    <!-- Left Sidebar Start -->
    <div class="left-sidebar">

      

        <div class="row">   
           <!-- BODY GENERAL -->
            <div class="col-lg-12 col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">
                            BAHIAS
                        </div>
                        <span class="tools">
                            <i class="glyphicon glyphicon-list-alt"></i>
                        </span>
                    </div>
  

                    <div class="widget-body">
                     <ul class="list-group">
                        <li class="list-group-item list-group-item-danger">
                        <p style="font-size: 28px">    
                        Para obtener un mayor detalle de la Bahía, hacer click en el letrero verde (<img src="<?php echo base_url(); ?>img/letrero_verde.png" alt="" style="width: 38px;">). 
                        </p>
                        </li> 
                    </ul>   
                     <div id="buscador_3d">
                         <canvas id="buscadorCanvas" ></canvas>
                          

                    </div>

               


                    </div>
                </div>
            </div>   

    </div>  






        </div>
    </div>

 

       <script type="text/javascript">
      //  function prueba() {
           

               
                var canvas = document.getElementById("buscadorCanvas");
                var engine = new BABYLON.Engine(canvas, true);
                var scene = new BABYLON.Scene(engine);
                scene.clearColor =   new BABYLON.Color3( 85 / 255, 121 / 255,121/255);

              var camera = new BABYLON.ArcRotateCamera("Camera", Math.PI, Math.PI / 8, 256, BABYLON.Vector3.Zero(), scene);
              
                camera.lowerBetaLimit = 0.1;
                camera.upperBetaLimit = (Math.PI / 2) * 0.9;
                camera.lowerRadiusLimit = 30;
                camera.upperRadiusLimit =250 ;
                scene.activeCamera = camera;

                scene.activeCamera.attachControl(canvas);

                var light2 = new BABYLON.HemisphericLight("hemi", new BABYLON.Vector3(0, 1, 0), scene);

                var spot = new BABYLON.PointLight("spot", new BABYLON.Vector3(0, 30, 10), scene);
                spot.diffuse = new BABYLON.Color3(1, 1, 1);
                spot.specular = new BABYLON.Color3(0, 0, 0);

                var Piso = BABYLON.Mesh.CreateBox("piso", 2, scene);
                
               Piso.material = new BABYLON.StandardMaterial("Mat", scene);
               Piso.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/models/grass_diffuse.jpg", scene);
               Piso.material.diffuseTexture.uScale = 30;
               Piso.material.diffuseTexture.vScale = 30;
               Piso.receiveShadows = true;
               //Piso.material.diffuseColor = new BABYLON.Color3(0, 0, 0);
               //Piso.material.specularColor = new BABYLON.Color3(0, 0, 0);
                //Piso.material.diffuseTexture.hasAlpha = true;

                /*var groundMats = new BABYLON.StandardMaterial("boxMat", scene);
                groundMats.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/models/grass_diffuse.jpg", scene);
                groundMats.diffuseColor = new BABYLON.Color3(0, 0, 0);
                groundMats.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMats.diffuseTexture.uScale = 30;
                groundMats.diffuseTexture.vScale = 30;*/
                //Piso.material = groundMats;
                //Piso.receiveShadows = true;

                Piso.position = new BABYLON.Vector3(17, -4, 3);
                Piso.scaling = new BABYLON.Vector3(500, 500, 2);
                Piso.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);


                var Piso1 = BABYLON.Mesh.CreateBox("piso", 2, scene);
                Piso1.material = new BABYLON.StandardMaterial("Mat", scene);
                Piso1.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/textura-del-asfalto_1298-491.jpg", scene);
                Piso1.material.diffuseTexture.hasAlpha = true;

                Piso1.position = new BABYLON.Vector3(21, -0.6, 6.9);
                Piso1.scaling = new BABYLON.Vector3(180, 79, 2);
                Piso1.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);

                 

                // Skybox
                var skybox = BABYLON.Mesh.CreateBox("skyBox", 500, scene);
                var skyboxMaterial = new BABYLON.StandardMaterial("skyBox", scene);
                skyboxMaterial.backFaceCulling = false;
                skyboxMaterial.reflectionTexture = new BABYLON.CubeTexture("http://localhost/prueba/img/skybox", scene);
                skyboxMaterial.reflectionTexture.coordinatesMode = BABYLON.Texture.SKYBOX_MODE;
                skyboxMaterial.diffuseColor = new BABYLON.Color3(0, 0, 0);
                skyboxMaterial.specularColor = new BABYLON.Color3(0, 0, 0);
                skybox.material = skyboxMaterial;
                
                /***********************************************************/
                /***********************************************************/
                //                    LETREROS DE BAHIAS                    //
                /***********************************************************/
                /***********************************************************/

                /************************D15***********************************/
                
                var groundD15 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD15 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD15.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D15.png", scene);
                groundMateriaD15.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD15.material = groundMateriaD15;
                groundD15.receiveShadows = true;
                groundD15.position.x = -145; //5
                groundD15.position.y = 25; //0
                groundD15.position.z = 20; //0

                groundD15.scaling.x=1.5;

                groundD15.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD15.actionManager = new BABYLON.ActionManager(scene);
    
                groundD15.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D15");
                    })
                    );

                /************************D14***********************************/
                
                     var groundD14 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD14 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD14.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D14.png", scene);
                groundMateriaD14.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD14.material = groundMateriaD14;
                groundD14.receiveShadows = true;
                groundD14.position.x = -130; //5
                groundD14.position.y = 25; //0
                groundD14.position.z = 20; //0

                groundD14.scaling.x=1.5;
                groundD14.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD14.actionManager = new BABYLON.ActionManager(scene);
    
                groundD14.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D14");
                    })
                    );

                /************************D13***********************************/
                
                     var groundD13 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD13 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD13.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D13.png", scene);
                groundMateriaD13.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD13.material = groundMateriaD13;
                groundD13.receiveShadows = true;
                groundD13.position.x = -115; //5
                groundD13.position.y = 25; //0
                groundD13.position.z = 20; //0

                groundD13.scaling.x=1.5;
                groundD13.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD13.actionManager = new BABYLON.ActionManager(scene);
    
                groundD13.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D13");
                    })
                    );

                 /************************D12***********************************/
                
                     var groundD12 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD12 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD12.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D12.png", scene);
                groundMateriaD12.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD12.material = groundMateriaD12;
                groundD12.receiveShadows = true;
                groundD12.position.x = -100; //5
                groundD12.position.y = 25; //0
                groundD12.position.z = 20; //0

                groundD12.scaling.x=1.5;
                groundD12.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD12.actionManager = new BABYLON.ActionManager(scene);
    
                groundD12.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D12");
                    })
                    );

                /************************D11***********************************/
                
                     var groundD11 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD11 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD11.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D11.png", scene);
                groundMateriaD11.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD11.material = groundMateriaD11;
                groundD11.receiveShadows = true;
                groundD11.position.x = -85; //5
                groundD11.position.y = 25; //0
                groundD11.position.z = 20; //0

                groundD11.scaling.x=1.5;
                groundD11.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD11.actionManager = new BABYLON.ActionManager(scene);
    
                groundD11.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D11");
                    })
                    );

                /************************D10***********************************/
                
                     var groundD10 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD10 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD10.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D10.png", scene);
                groundMateriaD10.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD10.material = groundMateriaD10;
                groundD10.receiveShadows = true;
                groundD10.position.x = -70; //5
                groundD10.position.y = 25; //0
                groundD10.position.z = 20; //0

                groundD10.scaling.x=1.5;
                groundD10.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD10.actionManager = new BABYLON.ActionManager(scene);
    
                groundD10.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D10");
                    })
                    );

                   /************************D9***********************************/
                
                     var groundD9 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD9 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD9.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D09.png", scene);
                groundMateriaD9.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD9.material = groundMateriaD9;
                groundD9.receiveShadows = true;
                groundD9.position.x = -55; //5
                groundD9.position.y = 25; //0
                groundD9.position.z = 20; //0

                groundD9.scaling.x=1.5;
                groundD9.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD9.actionManager = new BABYLON.ActionManager(scene);
    
                groundD9.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D9");
                    })
                    );

                     /************************D8***********************************/
                
                     var groundD8 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD8 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD8.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D08.png", scene);
                groundMateriaD8.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD8.material = groundMateriaD8;
                groundD8.receiveShadows = true;
                groundD8.position.x = -40; //5
                groundD8.position.y = 25; //0
                groundD8.position.z = 20; //0

                groundD8.scaling.x=1.5;
                groundD8.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD8.actionManager = new BABYLON.ActionManager(scene);
    
                groundD8.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D8");
                    })
                    );

                /************************D7***********************************/
                
                var groundD7 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD7 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD7.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D07.png", scene);
                groundMateriaD7.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD7.material = groundMateriaD7;
                groundD7.receiveShadows = true;
                groundD7.position.x = -25; //5
                groundD7.position.y = 25; //0
                groundD7.position.z = 20; //0

                groundD7.scaling.x=1.5;
                groundD7.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD7.actionManager = new BABYLON.ActionManager(scene);
    
                groundD7.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D7");
                    })
                    );

                /************************D6***********************************/
                
                     var groundD6 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD6 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD6.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D06.png", scene);
                groundMateriaD6.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD6.material = groundMateriaD6;
                groundD6.receiveShadows = true;
                groundD6.position.x = -10; //5
                groundD6.position.y = 25; //0
                groundD6.position.z = 20; //0

                groundD6.scaling.x=1.5;
                groundD6.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD6.actionManager = new BABYLON.ActionManager(scene);
    
                groundD6.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D6");
                    })
                    );

                /************************D5***********************************/
                
                     var groundD5 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD5 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD5.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D05.png", scene);
                groundMateriaD5.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD5.material = groundMateriaD5;
                groundD5.receiveShadows = true;
                groundD5.position.x = 5; //5
                groundD5.position.y = 25; //0
                groundD5.position.z = 20; //0

                groundD5.scaling.x=1.5;
                groundD5.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD5.actionManager = new BABYLON.ActionManager(scene);
                
                groundD5.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D5");
                    })
                    );


                /************************D4***********************************/
                
                var groundD4 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD4 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD4.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D04.png", scene);
                groundMateriaD4.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD4.material = groundMateriaD4;
                groundD4.receiveShadows = true;
                groundD4.position.x = 26; //5
                groundD4.position.y = 25; //0
                groundD4.position.z = 20; //0

                groundD4.scaling.x=1.5;
                groundD4.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD4.actionManager = new BABYLON.ActionManager(scene);
                
                groundD4.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D4");
                    })
                    );
                

                /************************D3***********************************/
                
                     var groundD3 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD3 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD3.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D03.png", scene);
                groundMateriaD3.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD3.material = groundMateriaD3;
                groundD3.receiveShadows = true;
                groundD3.position.x = 41; //5
                groundD3.position.y = 25; //0
                groundD3.position.z = 20; //0

                groundD3.scaling.x=1.5;
                groundD3.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD3.actionManager = new BABYLON.ActionManager(scene);
                
                groundD3.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D3");
                    })
                    );

                /************************D2***********************************/
                
                     var groundD2 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 4,3,1, scene, false);
                var groundMateriaD2 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD2.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D02.png", scene);
                groundMateriaD2.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD2.material = groundMateriaD2;
                groundD2.receiveShadows = true;
                groundD2.position.x = 56; //5
                groundD2.position.y = 25; //0
                groundD2.position.z = 20; //0

                groundD2.scaling.x=1.5;
                groundD2.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD2.actionManager = new BABYLON.ActionManager(scene);
                
                groundD2.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D2");
                    })
                    );


                   /************************D1***********************************/
            
                     var groundD1 = BABYLON.Mesh.CreateGround("letrero", 4,3,1, scene, false);
                var groundMateriaD1 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaD1.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_D01.png", scene);
                groundMateriaD1.specularColor = new BABYLON.Color3(0, 0, 0);

                groundD1.material = groundMateriaD1;
                groundD1.receiveShadows = true;
                groundD1.position.x = 71; //5
                groundD1.position.y = 25; //0
                groundD1.position.z = 20; //0

                groundD1.scaling.x=1.5;
                groundD1.rotation.x = -Math.PI/2 ;

                  // add actionManager on each cyl
                groundD1.actionManager = new BABYLON.ActionManager(scene);
                
                groundD1.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_D1");
                    })
                    );


                /************************E14***********************************/
            
                var letreroE14 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE14 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE14.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E14.png", scene);
                letreroMateriaE14.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE14.material = letreroMateriaE14;
                letreroE14.receiveShadows = true;
                letreroE14.position.x = -130; //5
                letreroE14.position.y = 25; //0
                letreroE14.position.z = -63; //0

                letreroE14.scaling.x=1.5;                
                letreroE14.rotation.x = -Math.PI/2 ;
                letreroE14.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE14.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE14.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E14");
                    })
                    );

                 /************************E13***********************************/
            
                var letreroE13 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE13 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE13.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E13.png", scene);
                letreroMateriaE13.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE13.material = letreroMateriaE13;
                letreroE13.receiveShadows = true;
                letreroE13.position.x = -115; //5
                letreroE13.position.y = 25; //0
                letreroE13.position.z = -63; //0

                letreroE13.scaling.x=1.5;                
                letreroE13.rotation.x = -Math.PI/2 ;
                letreroE13.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE13.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE13.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E13");
                    })
                    );

                  /************************E12***********************************/
            
                var letreroE12 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE12 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE12.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E12.png", scene);
                letreroMateriaE12.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE12.material = letreroMateriaE12;
                letreroE12.receiveShadows = true;
                letreroE12.position.x = -100; //5
                letreroE12.position.y = 25; //0
                letreroE12.position.z = -63; //0

                letreroE12.scaling.x=1.5;                
                letreroE12.rotation.x = -Math.PI/2 ;
                letreroE12.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE12.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE12.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E12");
                    })
                    );

                   /************************E11***********************************/
            
                var letreroE11 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE11 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE11.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E11.png", scene);
                letreroMateriaE11.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE11.material = letreroMateriaE11;
                letreroE11.receiveShadows = true;
                letreroE11.position.x = -85; //5
                letreroE11.position.y = 25; //0
                letreroE11.position.z = -63; //0

                letreroE11.scaling.x=1.5;                
                letreroE11.rotation.x = -Math.PI/2 ;
                letreroE11.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE11.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE11.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E11");
                    })
                    );

                   /************************E10***********************************/
            
                var letreroE10 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE10 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE10.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E10.png", scene);
                letreroMateriaE10.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE10.material = letreroMateriaE10;
                letreroE10.receiveShadows = true;
                letreroE10.position.x = -70; //5
                letreroE10.position.y = 25; //0
                letreroE10.position.z = -63; //0

                letreroE10.scaling.x=1.5;                
                letreroE10.rotation.x = -Math.PI/2 ;
                letreroE10.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE10.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE10.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E10");
                    })
                    );

                 /************************E9***********************************/
            
                var letreroE9 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE9 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE9.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E09.png", scene);
                letreroMateriaE9.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE9.material = letreroMateriaE9;
                letreroE9.receiveShadows = true;
                letreroE9.position.x = -55; //5
                letreroE9.position.y = 25; //0
                letreroE9.position.z = -63; //0

                letreroE9.scaling.x=1.5;                
                letreroE9.rotation.x = -Math.PI/2 ;
                letreroE9.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE9.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE9.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E9");
                    })
                    );
               
                /************************E8***********************************/
            
                var letreroE8 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE8 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE8.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E08.png", scene);
                letreroMateriaE8.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE8.material = letreroMateriaE8;
                letreroE8.receiveShadows = true;
                letreroE8.position.x = -40; //5
                letreroE8.position.y = 25; //0
                letreroE8.position.z = -63; //0

                letreroE8.scaling.x=1.5;                
                letreroE8.rotation.x = -Math.PI/2 ;
                letreroE8.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE8.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE8.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E8");
                    })
                    );

                /************************E7***********************************/
            
                var letreroE7 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE7 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE7.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E07.png", scene);
                letreroMateriaE7.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE7.material = letreroMateriaE7;
                letreroE7.receiveShadows = true;
                letreroE7.position.x = -25; //5
                letreroE7.position.y = 25; //0
                letreroE7.position.z = -63; //0

                letreroE7.scaling.x=1.5;                
                letreroE7.rotation.x = -Math.PI/2 ;
                letreroE7.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE7.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE7.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E7");
                    })
                    );
                 /************************E6***********************************/
            
                var letreroE6 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE6 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE6.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E06.png", scene);
                letreroMateriaE6.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE6.material = letreroMateriaE6;
                letreroE6.receiveShadows = true;
                letreroE6.position.x = -10; //5
                letreroE6.position.y = 25; //0
                letreroE6.position.z = -63; //0

                letreroE6.scaling.x=1.5;                
                letreroE6.rotation.x = -Math.PI/2 ;
                letreroE6.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE6.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE6.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E6");
                    })
                    );

                /************************E5***********************************/
            
                var letreroE5 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE5 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE5.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E05.png", scene);
                letreroMateriaE5.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE5.material = letreroMateriaE5;
                letreroE5.receiveShadows = true;
                letreroE5.position.x = 5; //5
                letreroE5.position.y = 25; //0
                letreroE5.position.z = -63; //0

                letreroE5.scaling.x=1.5;                
                letreroE5.rotation.x = -Math.PI/2 ;
                letreroE5.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE5.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE5.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E5");
                    })
                    );


                /************************E4***********************************/
            
                var letreroE4 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE4 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE4.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E04.png", scene);
                letreroMateriaE4.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE4.material = letreroMateriaE4;
                letreroE4.receiveShadows = true;
                letreroE4.position.x = 26; //5
                letreroE4.position.y = 25; //0
                letreroE4.position.z = -63; //0

                letreroE4.scaling.x=1.5;                
                letreroE4.rotation.x = -Math.PI/2 ;
                letreroE4.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE4.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE4.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E4");
                    })
                    );

                   /************************E3***********************************/
            
                var letreroE3 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE3 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE3.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E03.png", scene);
                letreroMateriaE3.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE3.material = letreroMateriaE3;
                letreroE3.receiveShadows = true;
                letreroE3.position.x = 41; //5
                letreroE3.position.y = 25; //0
                letreroE3.position.z = -63; //0

                letreroE3.scaling.x=1.5;                
                letreroE3.rotation.x = -Math.PI/2 ;
                letreroE3.rotation.y = Math.PI ;
                
                  // add actionManager on each cyl
                letreroE3.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE3.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E3");
                    })
                    );


                   /************************E2***********************************/
            
                var letreroE2 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE2 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE2.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E02.png", scene);
                letreroMateriaE2.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE2.material = letreroMateriaE2;
                letreroE2.receiveShadows = true;
                letreroE2.position.x = 56; //5
                letreroE2.position.y = 25; //0
                letreroE2.position.z = -63; //0

                letreroE2.scaling.x=1.5;                
                letreroE2.rotation.x = -Math.PI/2 ;
                letreroE2.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroE2.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE2.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E2");
                    })
                    );


                   /************************E1***********************************/
            
                var letreroE1 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaE1 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaE1.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_E01.png", scene);
                letreroMateriaE1.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroE1.material = letreroMateriaE1;
                letreroE1.receiveShadows = true;
                letreroE1.position.x = 71; //5
                letreroE1.position.y = 25; //0
                letreroE1.position.z = -63; //0

                letreroE1.scaling.x=1.5;                
                letreroE1.rotation.x = -Math.PI/2 ;
                letreroE1.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroE1.actionManager = new BABYLON.ActionManager(scene);
                
                letreroE1.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_E1");
                    })
                    );

                 /************************A1***********************************/
            
                var letreroA1 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaA1 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaA1.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_A01.png", scene);
                letreroMateriaA1.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroA1.material = letreroMateriaA1;
                letreroA1.receiveShadows = true;
                letreroA1.position.x = 135; //5
                letreroA1.position.y = 25; //0
                letreroA1.position.z = -63; //0

                letreroA1.scaling.x=1.5;                
                letreroA1.rotation.x = -Math.PI/2 ;
                letreroA1.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroA1.actionManager = new BABYLON.ActionManager(scene);
                
                letreroA1.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_A1");
                    })
                    );


                  /************************B3 1***********************************/
            
                var letreroA21 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaA21 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaA21.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_B03.png", scene);
                letreroMateriaA21.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroA21.material = letreroMateriaA21;
                letreroA21.receiveShadows = true;
                letreroA21.position.x = 135; //5
                letreroA21.position.y = 25; //0
                letreroA21.position.z = 40; //0

                letreroA21.scaling.x=1.5;                
                letreroA21.rotation.x = -Math.PI/2 ;
                letreroA21.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroA21.actionManager = new BABYLON.ActionManager(scene);
                
                letreroA21.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_B3");
                    })
                    );

                /************************B3 2***********************************/
            
                var letreroA22 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaA22 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaA22.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_B03.png", scene);
                letreroMateriaA22.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroA22.material = letreroMateriaA22;
                letreroA22.receiveShadows = true;
                letreroA22.position.x = 135; //5
                letreroA22.position.y = 25; //0
                letreroA22.position.z = 40; //0

                letreroA22.scaling.x=1.5;                
                letreroA22.rotation.x = -Math.PI/2 ;
            
                // add actionManager on each cyl
                letreroA22.actionManager = new BABYLON.ActionManager(scene);
                
                letreroA22.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_B3");
                    })
                    );




                /************************A2 1***********************************/
            
                var letreroB31 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaB31 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaB31.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_A02.png", scene);
                letreroMateriaB31.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroB31.material = letreroMateriaB31;
                letreroB31.receiveShadows = true;
                letreroB31.position.x = 135; //5
                letreroB31.position.y = 25; //0
                letreroB31.position.z = 12; //0

                letreroB31.scaling.x=1.5;                
                letreroB31.rotation.x = -Math.PI/2 ;
                letreroB31.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroB31.actionManager = new BABYLON.ActionManager(scene);
                
                letreroB31.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_A2");
                    })
                    );

                 /************************A2 2***********************************/
            
                var letreroB32 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaB32 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaB32.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_A02.png", scene);
                letreroMateriaB32.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroB32.material = letreroMateriaB32;
                letreroB32.receiveShadows = true;
                letreroB32.position.x = 135; //5
                letreroB32.position.y = 25; //0
                letreroB32.position.z = 12; //0

                letreroB32.scaling.x=1.5;                
                letreroB32.rotation.x = -Math.PI/2 ;
             
                  // add actionManager on each cyl
                letreroB32.actionManager = new BABYLON.ActionManager(scene);
                
                letreroB32.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_A2");
                    })
                    );
                /************************C10***********************************/
            
                var letreroC10 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC10 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC10.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C10.png", scene);
                letreroMateriaC10.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC10.material = letreroMateriaC10;
                letreroC10.receiveShadows = true;
                letreroC10.position.x = 81; //5
                letreroC10.position.y = 25; //0
                letreroC10.position.z = 32; //0
                letreroC10.scaling.x=1.5;                
                letreroC10.rotation.x = -Math.PI/2 ;
                letreroC10.rotation.y = -Math.PI /2;
            
                
                letreroC10.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC10.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C10");
                    })
                    );

                /************************C9***********************************/
            
                var letreroC9 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC9 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC9.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C09.png", scene);
                letreroMateriaC9.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC9.material = letreroMateriaC9;
                letreroC9.receiveShadows = true;
                letreroC9.position.x = 81; //5
                letreroC9.position.y = 25; //0
                letreroC9.position.z = 46; //0
                letreroC9.scaling.x=1.5;                
                letreroC9.rotation.x = -Math.PI/2 ;
                letreroC9.rotation.y = -Math.PI /2;
            
                
                letreroC9.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC9.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C9");
                    })
                    );

                /************************C8***********************************/
            
                var letreroC8 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC8 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC8.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C08.png", scene);
                letreroMateriaC8.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC8.material = letreroMateriaC8;
                letreroC8.receiveShadows = true;
                letreroC8.position.x = 88; //5
                letreroC8.position.y = 25; //0
                letreroC8.position.z = 83; //0

                letreroC8.scaling.x=1.5;                
                letreroC8.rotation.x = -Math.PI/2 ;
                //letreroC8.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroC8.actionManager = new BABYLON.ActionManager(scene);
                
                letreroC8.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C8");
                    })
                    );


                /************************C7***********************************/
            
                var letreroC7 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC7 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC7.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C07.png", scene);
                letreroMateriaC7.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC7.material = letreroMateriaC7;
                letreroC7.receiveShadows = true;
                letreroC7.position.x = 103; //5
                letreroC7.position.y = 25; //0
                letreroC7.position.z = 83; //0

                letreroC7.scaling.x=1.5;                
                letreroC7.rotation.x = -Math.PI/2 ;
                //letreroC8.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroC7.actionManager = new BABYLON.ActionManager(scene);
                
                letreroC7.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C7");
                    })
                    );


                /************************C6***********************************/
            
                var letreroC6 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC6 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC6.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C06.png", scene);
                letreroMateriaC6.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC6.material = letreroMateriaC6;
                letreroC6.receiveShadows = true;
                letreroC6.position.x = 118; //5
                letreroC6.position.y = 25; //0
                letreroC6.position.z = 83; //0
                letreroC6.scaling.x=1.5;                
                letreroC6.rotation.x = -Math.PI/2 ;
                //letreroC8.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroC6.actionManager = new BABYLON.ActionManager(scene);
        
                letreroC6.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C6");
                    })
                    );

                /************************C5***********************************/
            
                var letreroC5 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC5 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC5.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C05.png", scene);
                letreroMateriaC5.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC5.material = letreroMateriaC5;
                letreroC5.receiveShadows = true;
                letreroC5.position.x = 133; //5
                letreroC5.position.y = 25; //0
                letreroC5.position.z = 83; //0
                letreroC5.scaling.x=1.5;                
                letreroC5.rotation.x = -Math.PI/2 ;
                //letreroC8.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroC5.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC5.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C5");
                    })
                    );

                 /************************C4***********************************/
            
                var letreroC4 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC4 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC4.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C04.png", scene);
                letreroMateriaC4.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC4.material = letreroMateriaC4;
                letreroC4.receiveShadows = true;
                letreroC4.position.x = 148; //5
                letreroC4.position.y = 25; //0
                letreroC4.position.z = 83; //0
                letreroC4.scaling.x=1.5;                
                letreroC4.rotation.x = -Math.PI/2 ;
                //letreroC8.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroC4.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC4.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C4");
                    })
                    );

                 /************************C3***********************************/
            
                var letreroC3 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC3 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC3.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C03.png", scene);
                letreroMateriaC3.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC3.material = letreroMateriaC3;
                letreroC3.receiveShadows = true;
                letreroC3.position.x = 163; //5
                letreroC3.position.y = 25; //0
                letreroC3.position.z = 83; //0
                letreroC3.scaling.x=1.5;                
                letreroC3.rotation.x = -Math.PI/2 ;
                //letreroC8.rotation.y = Math.PI ;
            
                  // add actionManager on each cyl
                letreroC3.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC3.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C3");
                    })
                    );

                /************************C2***********************************/
            
                var letreroC2 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC2 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC2.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C02.png", scene);
                letreroMateriaC2.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC2.material = letreroMateriaC2;
                letreroC2.receiveShadows = true;
                letreroC2.position.x = 178; //5
                letreroC2.position.y = 25; //0
                letreroC2.position.z = 83; //0
                letreroC2.scaling.x=1.5;                
                letreroC2.rotation.x = -Math.PI/2 ;
                
                letreroC2.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC4.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C2");
                    })
                    );

                     /************************C1***********************************/
            
                var letreroC1 = BABYLON.Mesh.CreateGround("letro", 4,3,1, scene, false);
                var letreroMateriaC1 = new BABYLON.StandardMaterial("ground", scene);
                letreroMateriaC1.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/letrero_C01.png", scene);
                letreroMateriaC1.specularColor = new BABYLON.Color3(0, 0, 0);

                letreroC1.material = letreroMateriaC1;
                letreroC1.receiveShadows = true;
                letreroC1.position.x = 193; //5
                letreroC1.position.y = 25; //0
                letreroC1.position.z = 83; //0
                letreroC1.scaling.x=1.5;                
                letreroC1.rotation.x = -Math.PI/2 ;
                
                letreroC1.actionManager = new BABYLON.ActionManager(scene);
            
                letreroC1.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_C1");
                    })
                    );


                /***********************************************************/
                /***********************************************************/
                //                    PISOS DE BAHIAS                       //
                /***********************************************************/
                /***********************************************************/

                /************************D15***********************************/
                var ground15 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);
                var groundMateria15 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria15.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D15.jpg", scene);
                groundMateria15.specularColor = new BABYLON.Color3(0, 0, 0);

                ground15.material = groundMateria15;
                ground15.receiveShadows = true;
                ground15.position.x = -145; //5
                ground15.position.y = 1.5; //0
                ground15.position.z = 10.5; //0

                ground15.scaling.x=1.5;

                  // add actionManager on each cyl
                ground15.actionManager = new BABYLON.ActionManager(scene);
    
                ground15.actionManager.registerAction(
                 new BABYLON.ExecuteCodeAction(BABYLON.ActionManager.OnPickTrigger, 
                    function(event){
                    var pickedMesh = event.meshUnderPointer; 

                    window.open("http://localhost/prueba/admin/BAHIA_A1");
                    })
                    );


                /************************D14***********************************/

               var ground14 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria14 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria14.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D14.png", scene);
                groundMateria14.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria14.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground14.material = groundMateria14;
                ground14.receiveShadows = true;
                ground14.position.x = -130; //5
                ground14.position.y =1.5; //0
                ground14.position.z = 10.5; //0
                ground14.scaling.x=1.5;

                /************************D13***********************************/

             var ground13 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria13 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria13.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D13.png", scene);
                groundMateria13.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria13.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground13.material = groundMateria13;
                ground13.receiveShadows = true;
                ground13.position.x = -115; //5
                ground13.position.y = 1.5; //0
                ground13.position.z = 10.5; //0

                ground13.scaling.x=1.5;

                   /************************D12***********************************/

                var ground12 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria12 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria12.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D12.png", scene);
                groundMateria12.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria12.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground12.material = groundMateria12;
                ground12.receiveShadows = true;
                ground12.position.x = -100; //5
                ground12.position.y = 1.5; //0
                ground12.position.z = 10.5; //0

                ground12.scaling.x=1.5;

                   /************************D11***********************************/

              var ground11 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria11 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria11.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D11.png", scene);
                groundMateria11.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria11.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground11.material = groundMateria11;
                ground11.receiveShadows = true;
                ground11.position.x = -85; //5
                ground11.position.y = 1.5; //0
                ground11.position.z = 10.5; //0

                ground11.scaling.x=1.5;

                   /************************D10***********************************/

               var ground10 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria10 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria10.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D10.png", scene);
                groundMateria10.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria10.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground10.material = groundMateria10;
                ground10.receiveShadows = true;
                ground10.position.x = -70; //5
                ground10.position.y = 1.5; //0
                ground10.position.z = 10.5; //0

                ground10.scaling.x=1.5;

                   /************************D09***********************************/

              var ground09 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria09 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria09.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D09.png", scene);
                groundMateria09.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria09.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground09.material = groundMateria09;
                ground09.receiveShadows = true;
                ground09.position.x = -55; //5
                ground09.position.y = 1.5; //0
                ground09.position.z = 10.5; //0

                ground09.scaling.x=1.5;

                   /************************D08***********************************/

              var ground08 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria08 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria08.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D08.png", scene);
                groundMateria08.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria08.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground08.material = groundMateria08;
                ground08.receiveShadows = true;
                ground08.position.x = -40; //5
                ground08.position.y = 1.5; //0
                ground08.position.z = 10.5; //0

                ground08.scaling.x=1.5;

                   /************************D07***********************************/

             var ground07 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria07 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria07.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D07.png", scene);
                groundMateria07.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria07.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground07.material = groundMateria07;
                ground07.receiveShadows = true;
                ground07.position.x = -25; //5
                ground07.position.y = 1.5; //0
                ground07.position.z = 10.5; //0

                ground07.scaling.x=1.5;

                   /************************D6***********************************/

              var ground06 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria06 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria06.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D06.png", scene);
                groundMateria06.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria06.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground06.material = groundMateria06;
                ground06.receiveShadows = true;
                ground06.position.x = -10; //5
                ground06.position.y = 1.5; //0
                ground06.position.z = 10.5; //0

                ground06.scaling.x=1.5;

                   /************************D5***********************************/

                var ground05 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria05 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria05.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D05.png", scene);
                groundMateria05.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria05.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground05.material = groundMateria05;
                ground05.receiveShadows = true;
                ground05.position.x = 5; //5
                ground05.position.y = 1.5; //0
                ground05.position.z = 10.5; //0

                ground05.scaling.x=1.5;

                   /************************D4***********************************/

                var ground04 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria04 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria04.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D04.png", scene);
                groundMateria04.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria04.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                ground04.material = groundMateria04;
                ground04.receiveShadows = true;
                ground04.position.x = 27; //5
                ground04.position.y = 1.5; //0
                ground04.position.z = 10.5; //0

                ground04.scaling.x=1.5;

                   /************************D03***********************************/

               var ground03 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria03 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria03.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D03.png", scene);
                groundMateria03.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria03.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                ground03.material = groundMateria03;
                ground03.receiveShadows = true;
                ground03.position.x = 42; //5
                ground03.position.y = 1.5; //0
                ground03.position.z = 10.5; //0

                ground03.scaling.x=1.5;

                   /************************D02***********************************/

                var ground02 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria02 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria02.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D02.png", scene);
                groundMateria02.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria02.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                ground02.material = groundMateria02;
                ground02.receiveShadows = true;
                ground02.position.x = 57; //5
                ground02.position.y = 1.5; //0
                ground02.position.z = 10.5; //0

                ground02.scaling.x=1.5;

                   /************************D01***********************************/

               var ground01 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateria01 = new BABYLON.StandardMaterial("ground", scene);
                groundMateria01.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_D01.png", scene);
                groundMateria01.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateria01.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                ground01.material = groundMateria01;
                ground01.receiveShadows = true;
                ground01.position.x = 72; //5
                ground01.position.y = 1.5; //0
                ground01.position.z = 10.5; //0

                ground01.scaling.x=1.5;


                /************************E14***********************************/

              var groundE14 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE14 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE14.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E14.png", scene);
                groundMateriaE14.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE14.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                groundE14.material = groundMateriaE14;
                groundE14.receiveShadows = true;
                groundE14.position.x = -130; //5
                groundE14.position.y = 1.5; //0
                groundE14.position.z = -53; //0
                groundE14.scaling.x=1.5;

                 /************************E13***********************************/

                var groundE13 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE13 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE13.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E13.png", scene);
                groundMateriaE13.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE13.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                groundE13.material = groundMateriaE13;
                groundE13.receiveShadows = true;
                groundE13.position.x = -115; //5
                groundE13.position.y = 1.5; //0
                groundE13.position.z = -53; //0
                groundE13.scaling.x=1.5;

                /************************E12***********************************/

               var groundE12 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE12 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE12.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E12.png", scene);
                groundMateriaE12.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE12.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                groundE12.material = groundMateriaE12;
                groundE12.receiveShadows = true;
                groundE12.position.x = -100; //5
                groundE12.position.y = 1.5; //0
                groundE12.position.z = -53; //0
                groundE12.scaling.x=1.5;

                  
                    /************************E11***********************************/

               var groundE11 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE11 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE11.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E11.png", scene);
                groundMateriaE11.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE11.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2);
                

                groundE11.material = groundMateriaE11;
                groundE11.receiveShadows = true;
                groundE11.position.x = -85; //5
                groundE11.position.y = 1.5; //0
                groundE11.position.z = -53; //0
                groundE11.scaling.x=1.5;
                
                     /************************E10***********************************/

              var groundE10 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE10 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE10.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E10.png", scene);
                groundMateriaE10.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE10.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE10.material = groundMateriaE10;
                groundE10.receiveShadows = true;
                groundE10.position.x = -70; //5
                groundE10.position.y = 1.5; //0
                groundE10.position.z = -53; //0
                groundE10.scaling.x=1.5;

        
                      /************************E09***********************************/

                var groundE09 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE09 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE09.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E09.png", scene);
                groundMateriaE09.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE09.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE09.material = groundMateriaE09;
                groundE09.receiveShadows = true;
                groundE09.position.x = -55; //5
                groundE09.position.y = 1.5; //0
                groundE09.position.z = -53; //0
                groundE09.scaling.x=1.5;

                      /************************E08***********************************/

                var groundE08 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE08 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE08.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E08.png", scene);
                groundMateriaE08.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE08.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE08.material = groundMateriaE08;
                groundE08.receiveShadows = true;
                groundE08.position.x = -40; //5
                groundE08.position.y = 1.5; //0
                groundE08.position.z = -53; //0
                groundE08.scaling.x=1.5;

             /*         /************************E07***********************************/

                var groundE07 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE07 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE07.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E07.png", scene);
                groundMateriaE07.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE07.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE07.material = groundMateriaE07;
                groundE07.receiveShadows = true;
                groundE07.position.x = -25; //5
                groundE07.position.y = 1.5; //0
                groundE07.position.z = -53; //0
                groundE07.scaling.x=1.5;

                 /************************E06***********************************/

               var groundE06 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE06 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE06.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E06.png", scene);
                groundMateriaE06.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE06.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE06.material = groundMateriaE06;
                groundE06.receiveShadows = true;
                groundE06.position.x = -10; //5
                groundE06.position.y = 1.5; //0
                groundE06.position.z = -53; //0
                groundE06.scaling.x=1.5;

                /************************E05***********************************/

              var groundE05 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE05 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE05.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E05.png", scene);
                groundMateriaE05.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE05.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE05.material = groundMateriaE05;
                groundE05.receiveShadows = true;
                groundE05.position.x = 5; //5
                groundE05.position.y = 1.5; //0
                groundE05.position.z = -53; //0
                groundE05.scaling.x=1.5;

                 /************************E04***********************************/

             var groundE04 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE04 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE04.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E04.png", scene);
                groundMateriaE04.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE04.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE04.material = groundMateriaE04;
                groundE04.receiveShadows = true;
                groundE04.position.x = 27; //5
                groundE04.position.y = 1.5; //0
                groundE04.position.z = -53; //0
                groundE04.scaling.x=1.5;
                
                /************************E03***********************************/

               var groundE03 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE03 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE03.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E03.png", scene);
                groundMateriaE03.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE03.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE03.material = groundMateriaE03;
                groundE03.receiveShadows = true;
                groundE03.position.x = 42; //5
                groundE03.position.y = 1.5; //0
                groundE03.position.z = -53; //0
                groundE03.scaling.x=1.5;

                  /************************E02***********************************/

            var groundE02 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE02 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE02.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E02.png", scene);
                groundMateriaE02.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE02.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE02.material = groundMateriaE02;
                groundE02.receiveShadows = true;
                groundE02.position.x = 57; //5
                groundE02.position.y = 1.5; //0
                groundE02.position.z = -53; //0
                groundE02.scaling.x=1.5;

                  /************************E01***********************************/

             var groundE01 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaE01 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaE01.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_E01.png", scene);
                groundMateriaE01.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaE01.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundE01.material = groundMateriaE01;
                groundE01.receiveShadows = true;
                groundE01.position.x = 72; //5
                groundE01.position.y = 1.5; //0
                groundE01.position.z = -53; //0
                groundE01.scaling.x=1.5;


                /************************A01***********************************/

               var groundA01 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,25,1, scene, false);

                var groundMateriaA01 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaA01.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_A01.png", scene);
                groundMateriaA01.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaA01.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundA01.material = groundMateriaA01;
                groundA01.receiveShadows = true;
                groundA01.position.x = 135; //5
                groundA01.position.y = 1.5; //0
                groundA01.position.z = -53; //0
                groundA01.scaling.x=3.1;
               

                /************************A02***********************************/
              var groundA02 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 27,14,1, scene, false);

                var groundMateriaA02 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaA02.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_A02.png", scene);
                groundMateriaA02.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaA02.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundA02.material = groundMateriaA02;
                groundA02.receiveShadows = true;
                groundA02.position.x = 135; //5
                groundA02.position.y = 1.5; //0
                groundA02.position.z = 9; //0
                groundA02.scaling.z=1.5;

                   /************************B03***********************************/
                var groundB2 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 27,14,1, scene, false);

                var groundMateriaB2 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaB2.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_B03.png", scene);
                groundMateriaB2.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaB2.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundB2.material = groundMateriaB2;
                groundB2.receiveShadows = true;
                groundB2.position.x = 135; //5
                groundB2.position.y = 1.5; //0
                groundB2.position.z = 35.5; //0

                groundB2.scaling.z=1.5;
                
      

                /************************C10***********************************/

               var groundC10 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 14,10,1, scene, false);

                var groundMateriaC10 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC10.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C10.png", scene);
                groundMateriaC10.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC10.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC10.material = groundMateriaC10;
                groundC10.receiveShadows = true;
                groundC10.position.x = 90; //5
                groundC10.position.y = 1.5; //0
                groundC10.position.z = 32; //0

                groundC10.rotation.y = -Math.PI/2 ;

                groundC10.scaling.x=1.1;
                groundC10.scaling.z=2.2;

                  /************************C09***********************************/

             var groundC9 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 14,10,1, scene, false);

                var groundMateriaC9 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC9.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C09.png", scene);
                groundMateriaC9.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC9.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC9.material = groundMateriaC9;
                groundC9.receiveShadows = true;
                groundC9.position.x = 90; //5
                groundC9.position.y = 1.5; //0
                groundC9.position.z = 46; //0

                groundC9.rotation.y = -Math.PI/2 ;

                
                groundC9.scaling.x=1.1;
                groundC9.scaling.z=2.2;


                  /************************C8***********************************/

              var groundC8 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC8 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC8.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C08.png", scene);
                groundMateriaC8.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC8.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC8.material = groundMateriaC8;
                groundC8.receiveShadows = true;
                groundC8.position.x = 88; //5
                groundC8.position.y = 1.5; //0
                groundC8.position.z = 75; //0
                groundC8.scaling.x=1.5;
                groundC8.scaling.z=2.2;

                          /************************C7***********************************/

            var groundC7 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC7 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC7.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C07.png", scene);
                groundMateriaC7.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC7.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC7.material = groundMateriaC7;
                groundC7.receiveShadows = true;
                groundC7.position.x = 103; //5
                groundC7.position.y = 1.5; //0
                groundC7.position.z = 75; //0
                groundC7.scaling.x=1.5;
                groundC7.scaling.z=2.2;

                           /************************C6***********************************/

              var groundC6 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC6 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC6.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C06.png", scene);
                groundMateriaC6.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC6.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC6.material = groundMateriaC6;
                groundC6.receiveShadows = true;
                groundC6.position.x = 118; //5
                groundC6.position.y = 1.5; //0
                groundC6.position.z = 75; //0
                groundC6.scaling.x=1.5;
                groundC6.scaling.z=2.2;

                          /************************C5***********************************/

              var groundC5 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC5 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC5.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C05.png", scene);
                groundMateriaC5.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC5.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC5.material = groundMateriaC5;
                groundC5.receiveShadows = true;
                groundC5.position.x = 133; //5
                groundC5.position.y = 1.5; //0
                groundC5.position.z = 75; //0
                groundC5.scaling.x=1.5;
                groundC5.scaling.z=2.2;

                       /************************C4***********************************/

                var groundC4 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC4 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC4.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C04.png", scene);
                groundMateriaC4.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC4.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC4.material = groundMateriaC4;
                groundC4.receiveShadows = true;
                groundC4.position.x = 148; //5
                groundC4.position.y = 1.5; //0
                groundC4.position.z = 75; //0

                groundC4.scaling.x=1.5;
                groundC4.scaling.z=2.2;

                        /************************C3***********************************/

              var groundC3 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC3 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC3.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C03.png", scene);
                groundMateriaC3.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC3.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC3.material = groundMateriaC3;
                groundC3.receiveShadows = true;
                groundC3.position.x = 163; //5
                groundC3.position.y = 1.5; //0
                groundC3.position.z = 75; //0
                groundC3.scaling.x=1.5;
                groundC3.scaling.z=2.2;

                            /************************C2***********************************/

              var groundC2 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC2 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC2.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C02.png", scene);
                groundMateriaC2.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC2.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC2.material = groundMateriaC2;
                groundC2.receiveShadows = true;
                groundC2.position.x = 178; //5
                groundC2.position.y = 1.5; //0
                groundC2.position.z = 75; //0

                groundC2.scaling.x=1.5;
                groundC2.scaling.z=2.2;

                /************************C1***********************************/

               var groundC1 = BABYLON.Mesh.CreateGround("Spotlight Hard Shadows", 10,10,1, scene, false);

                var groundMateriaC1 = new BABYLON.StandardMaterial("ground", scene);
                groundMateriaC1.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/asfalto_C01.png", scene);
                groundMateriaC1.specularColor = new BABYLON.Color3(0, 0, 0);
                groundMateriaC1.emissiveColor = new BABYLON.Color3(0.2, 0.2, 0.2)
                

                groundC1.material = groundMateriaC1;
                groundC1.receiveShadows = true;
                groundC1.position.x = 193; //5
                groundC1.position.y = 1.5; //0
                groundC1.position.z = 75; //0

                groundC1.scaling.x=1.5;
                groundC1.scaling.z=2.2;

      



                



                /***********************************************************/
                /***********************************************************/
                //                    MUROS DE BAHIAS                       //
                /***********************************************************/
                /***********************************************************/
              

                /********************D15***************************/

             var Pared = BABYLON.Mesh.CreateBox("Pared", 2, scene);
                Pared.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared.material.diffuseTexture.hasAlpha = true;
                Pared.position = new BABYLON.Vector3(-105, 2, 22);
                Pared.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared2 = Pared.clone("Pared2");
                Pared2.rotation.y = Math.PI / 2;
                Pared2.position = new BABYLON.Vector3(-152, 2,10);
                Pared2.scaling = new BABYLON.Vector3(12, 0.5, 1);


                /********************D14***************************/
                var Pared3 = BABYLON.Mesh.CreateBox("Pared3", 2, scene);
                Pared3.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared3.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared3.material.diffuseTexture.hasAlpha = true;
                Pared3.position = new BABYLON.Vector3(-95, 2, 22);
                Pared3.scaling = new BABYLON.Vector3(6, 0.5, 1);


                var Pared4 = Pared3.clone("Pared4");
                Pared4.rotation.y = Math.PI / 2;
                Pared4.position = new BABYLON.Vector3(-137, 2,10);
                Pared4.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /********************D13***************************/

                var Pared5 = BABYLON.Mesh.CreateBox("Pared5", 2, scene);
                Pared5.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared5.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared5.material.diffuseTexture.hasAlpha = true;
                Pared5.position = new BABYLON.Vector3(-85, 2, 22);
                Pared5.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared6 = Pared5.clone("Pared6");
                Pared6.rotation.y = Math.PI / 2;
                Pared6.position = new BABYLON.Vector3(-122, 2,10);
                Pared6.scaling = new BABYLON.Vector3(12, 0.5, 1);


                /********************D12***************************/

               var Pared7 = BABYLON.Mesh.CreateBox("Pared7", 2, scene);
                Pared7.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared7.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared7.material.diffuseTexture.hasAlpha = true;
                Pared7.position = new BABYLON.Vector3(-75, 2, 22);
                Pared7.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared8 = Pared7.clone("Pared8");
                Pared8.rotation.y = Math.PI / 2;
                Pared8.position = new BABYLON.Vector3(-107, 2,10);
                Pared8.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /********************D11***************************/

              var Pared9 = BABYLON.Mesh.CreateBox("Pared9", 2, scene);
                Pared9.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared9.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared9.material.diffuseTexture.hasAlpha = true;
                Pared9.position = new BABYLON.Vector3(-65, 2, 22);
                Pared9.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared10 = Pared9.clone("Pared10");
                Pared10.rotation.y = Math.PI / 2;
                Pared10.position = new BABYLON.Vector3(-92, 2,10);
                Pared10.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                /********************D10***************************/

                var Pared11 = BABYLON.Mesh.CreateBox("Pared11", 2, scene);
                Pared11.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared11.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared11.material.diffuseTexture.hasAlpha = true;
                Pared11.position = new BABYLON.Vector3(-55, 2, 22);
                Pared11.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared12 = Pared11.clone("Pared10");
                Pared12.rotation.y = Math.PI / 2;
                Pared12.position = new BABYLON.Vector3(-77, 2,10);
                Pared12.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                
                /*******************D9****************************/

                var Pared13 = BABYLON.Mesh.CreateBox("Pared13", 2, scene);
                Pared13.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared13.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared13.material.diffuseTexture.hasAlpha = true;
                Pared13.position = new BABYLON.Vector3(-45, 2, 22);
                Pared13.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared14 = Pared13.clone("Pared10");
                Pared14.rotation.y = Math.PI / 2;
                Pared14.position = new BABYLON.Vector3(-62, 2,10);
                Pared14.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                 /*******************D8****************************/

                var Pared15 = BABYLON.Mesh.CreateBox("Pared15", 2, scene);
                Pared15.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared15.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared15.material.diffuseTexture.hasAlpha = true;
                Pared15.position = new BABYLON.Vector3(-35, 2, 22);
                Pared15.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared16 = Pared15.clone("Pared16");
                Pared16.rotation.y = Math.PI / 2;
                Pared16.position = new BABYLON.Vector3(-47, 2,10);
                Pared16.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/

                 /*******************D7****************************/

               var Pared17 = BABYLON.Mesh.CreateBox("Pared17", 2, scene);
                Pared17.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared17.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared17.material.diffuseTexture.hasAlpha = true;
                Pared17.position = new BABYLON.Vector3(-25, 2, 22);
                Pared17.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared18 = Pared17.clone("Pared16");
                Pared18.rotation.y = Math.PI / 2;
                Pared18.position = new BABYLON.Vector3(-32, 2,10);
                Pared18.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
   
                 /********************D6***************************/

               var Pared19 = BABYLON.Mesh.CreateBox("Pared17", 2, scene);
                Pared19.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared19.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared19.material.diffuseTexture.hasAlpha = true;
                Pared19.position = new BABYLON.Vector3(-15, 2, 22);
                Pared19.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared20 = Pared19.clone("Pared20");
                Pared20.rotation.y = Math.PI / 2;
                Pared20.position = new BABYLON.Vector3(-17, 2,10);
                Pared20.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                /*********************D5**************************/

               var Pared21 = BABYLON.Mesh.CreateBox("Pared21", 2, scene);
                Pared21.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared21.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared21.material.diffuseTexture.hasAlpha = true;
                Pared21.position = new BABYLON.Vector3(-5, 2, 22);
                Pared21.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared22 = Pared21.clone("Pared22");
                Pared22.rotation.y = Math.PI / 2;
                Pared22.position = new BABYLON.Vector3(-2, 2,10);
                Pared22.scaling = new BABYLON.Vector3(12, 0.5, 1);

                var Pared24 = Pared22.clone("Pared22");
                Pared24.rotation.y = Math.PI / 2;
                Pared24.position = new BABYLON.Vector3(13, 2,10);
                Pared24.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                  /********************D4***************************/

               var Pared25 = BABYLON.Mesh.CreateBox("Pared25", 2, scene);
                Pared25.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared25.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared25.material.diffuseTexture.hasAlpha = true;
                Pared25.position = new BABYLON.Vector3(15, 2, 22);
                Pared25.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared26 = Pared25.clone("Pared26");
                Pared26.rotation.y = Math.PI / 2;
                Pared26.position = new BABYLON.Vector3(19, 2,10);
                Pared26.scaling = new BABYLON.Vector3(12, 0.5, 1);
              /***********************************************/
               /********************D3***************************/

                var Pared27 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared27.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared27.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared27.material.diffuseTexture.hasAlpha = true;
                Pared27.position = new BABYLON.Vector3(20, 2, 22);
                Pared27.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared28 = Pared27.clone("Pared26");
                Pared28.rotation.y = Math.PI / 2;
                Pared28.position = new BABYLON.Vector3(34, 2,10);
                Pared28.scaling = new BABYLON.Vector3(12, 0.5, 1);
              /***********************************************/
               /********************D2***************************/

                var Pared29 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared29.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared29.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared29.material.diffuseTexture.hasAlpha = true;
                Pared29.position = new BABYLON.Vector3(25, 2, 22);
                Pared29.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared30 = Pared29.clone("Pared26");
                Pared30.rotation.y = Math.PI / 2;
                Pared30.position = new BABYLON.Vector3(49, 2,10);
                Pared30.scaling = new BABYLON.Vector3(12, 0.5, 1);

            
              /***********************************************/
               /********************D1***************************/

               var Pared31 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared31.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared31.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared31.material.diffuseTexture.hasAlpha = true;
                Pared31.position = new BABYLON.Vector3(30, 2, 22);
                Pared31.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared32 = Pared31.clone("Pared26");
                Pared32.rotation.y = Math.PI / 2;
                Pared32.position = new BABYLON.Vector3(64, 2,10);
                Pared32.scaling = new BABYLON.Vector3(12, 0.5, 1);

                var Pared33 = Pared32.clone("Pared22");
                Pared33.rotation.y = Math.PI / 2;
                Pared33.position = new BABYLON.Vector3(79, 2,10);
                Pared33.scaling = new BABYLON.Vector3(12, 0.5, 1);
              /***********************************************/
               /********************C10 - C9***************************/
                 var Pared34 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared34.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared34.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared34.material.diffuseTexture.hasAlpha = true;
                Pared34.position = new BABYLON.Vector3(90, 2, 24);
                Pared34.scaling = new BABYLON.Vector3(11, 0.5, 0.5);

                var Pared35 = Pared31.clone("Pared26");
                Pared35.rotation.y = Math.PI / 2;
                Pared35.position = new BABYLON.Vector3(79, 2,40);
                Pared35.scaling = new BABYLON.Vector3(15, 0.5, 0.5);

                var Pared36 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared36.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared36.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared36.material.diffuseTexture.hasAlpha = true;
                Pared36.position = new BABYLON.Vector3(90, 2, 39);
                Pared36.scaling = new BABYLON.Vector3(11, 0.5, 0.5);

                var Pared37 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared37.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared37.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared37.material.diffuseTexture.hasAlpha = true;
                Pared37.position = new BABYLON.Vector3(90, 2, 53.7);
                Pared37.scaling = new BABYLON.Vector3(11, 0.5, 0.5);

                /***********************************************/
                /**********************C8*************************/
                          
              var Pared38 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared38.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared38.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared38.material.diffuseTexture.hasAlpha = true;
                Pared38.position = new BABYLON.Vector3(90, 2, 83.8);
                Pared38.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared39 = Pared38.clone("Pared26");
                Pared39.rotation.y = Math.PI / 2;
                Pared39.position = new BABYLON.Vector3(80, 2,74);
                Pared39.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/
                /**********************C7*************************/
                          
               var Pared40 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared40.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared40.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared40.material.diffuseTexture.hasAlpha = true;
                Pared40.position = new BABYLON.Vector3(94, 2, 83.8);
                Pared40.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared41 = Pared40.clone("Pared26");
                Pared41.rotation.y = Math.PI / 2;
                Pared41.position = new BABYLON.Vector3(95, 2,74);
                Pared41.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/
                /**********************C6*************************/
                          
               var Pared41 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared41.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared41.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared41.material.diffuseTexture.hasAlpha = true;
                Pared41.position = new BABYLON.Vector3(104, 2, 83.8);
                Pared41.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared42 = Pared41.clone("Pared26");
                Pared42.rotation.y = Math.PI / 2;
                Pared42.position = new BABYLON.Vector3(110, 2,74);
                Pared42.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/
                /**********************C5*************************/
                          
                var Pared43 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared43.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared43.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared43.material.diffuseTexture.hasAlpha = true;
                Pared43.position = new BABYLON.Vector3(114, 2, 83.8);
                Pared43.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared44 = Pared41.clone("Pared26");
                Pared44.rotation.y = Math.PI / 2;
                Pared44.position = new BABYLON.Vector3(125, 2,74);
                Pared44.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/
                /**********************C4*************************/
                          
                var Pared45 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared45.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared45.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared45.material.diffuseTexture.hasAlpha = true;
                Pared45.position = new BABYLON.Vector3(124, 2, 83.8);
                Pared45.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared46 = Pared45.clone("Pared26");
                Pared46.rotation.y = Math.PI / 2;
                Pared46.position = new BABYLON.Vector3(140, 2,74);
                Pared46.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/

                /**********************C3*************************/
                          
               var Pared45 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared45.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared45.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared45.material.diffuseTexture.hasAlpha = true;
                Pared45.position = new BABYLON.Vector3(134, 2, 83.8);
                Pared45.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared46 = Pared45.clone("Pared26");
                Pared46.rotation.y = Math.PI / 2;
                Pared46.position = new BABYLON.Vector3(155, 2,74);
                Pared46.scaling = new BABYLON.Vector3(11, 0.5, 0.5);

                /***********************************************/
                 /**********************C2*************************/
                          
                var Pared46 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared46.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared46.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared46.material.diffuseTexture.hasAlpha = true;
                Pared46.position = new BABYLON.Vector3(144, 2, 83.8);
                Pared46.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared47 = Pared46.clone("Pared26");
                Pared47.rotation.y = Math.PI / 2;
                Pared47.position = new BABYLON.Vector3(170, 2,74);
                Pared47.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/
                /**********************C1*************************/
                          
                var Pared48 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared48.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared48.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared48.material.diffuseTexture.hasAlpha = true;
                Pared48.position = new BABYLON.Vector3(154, 2, 83.8);
                Pared48.scaling = new BABYLON.Vector3(12, 0.5, 0.5);

                var Pared49 = Pared48.clone("Pared26");
                Pared49.rotation.y = Math.PI / 2;
                Pared49.position = new BABYLON.Vector3(185, 2,74);
                Pared49.scaling = new BABYLON.Vector3(11, 0.5, 1);

                var Pared50 = Pared49.clone("Pared22");
                Pared50.rotation.y = Math.PI / 2;
                Pared50.position = new BABYLON.Vector3(200, 2,74);
                Pared50.scaling = new BABYLON.Vector3(11, 0.5, 1);

                /***********************************************/

                 /**********************ALMACEN NUEVO*************************/
                          
                /*var Pared51 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared51.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared51.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared51.material.diffuseTexture.hasAlpha = true;
                Pared51.position = new BABYLON.Vector3(136, 2, 70);
                Pared51.scaling = new BABYLON.Vector3(10, 0.5, 1);

                var Pared52 = Pared51.clone("Pared26");
                Pared52.rotation.y = Math.PI / 2;
                Pared52.position = new BABYLON.Vector3(127, 2,35);
                Pared52.scaling = new BABYLON.Vector3(35, 3, 1);

               var Pared53 = Pared51.clone("Pared22");
                Pared53.rotation.y = Math.PI / 2;
                Pared53.position = new BABYLON.Vector3(145, 2,35);
                Pared53.scaling = new BABYLON.Vector3(35, 0.5, 1);

                var Pared54 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared54.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared54.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/g3.jpg", scene);
                Pared54.material.diffuseTexture.hasAlpha = true;
                Pared54.position = new BABYLON.Vector3(136, 2, 0);
                Pared54.scaling = new BABYLON.Vector3(10, 3, 1);*/

               

                /***********************************************/
                 /**********************ALMACEN *************************/
                          
               /* var Pared55 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared55.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared55.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared55.material.diffuseTexture.hasAlpha = true;
                Pared55.position = new BABYLON.Vector3(126, 2, -65);
                Pared55.scaling = new BABYLON.Vector3(20, 0.5, 1);

                var Pared56 = Pared55.clone("Pared26");
                Pared56.rotation.y = Math.PI / 2;
                Pared56.position = new BABYLON.Vector3(145, 2,-44);
                Pared56.scaling = new BABYLON.Vector3(22, 3, 1);


                var Pared57 = Pared56.clone("Pared26");
                Pared57.rotation.y = Math.PI / 2;
                Pared57.position = new BABYLON.Vector3(106, 2,-44);
                Pared57.scaling = new BABYLON.Vector3(22, 3, 1);*/

                /***********************************************/
                  /**********************A1 *************************/
                          
               var Pared58 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared58.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared58.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared58.material.diffuseTexture.hasAlpha = true;
                Pared58.position = new BABYLON.Vector3(130, 2, -65);
                Pared58.scaling = new BABYLON.Vector3(12, 0.5, 1);

                var Pared59 = Pared58.clone("Pared26");
                Pared59.rotation.y = Math.PI / 2;
                Pared59.position = new BABYLON.Vector3(150, 2,-53);
                Pared59.scaling = new BABYLON.Vector3(12, 0.5, 1);

                var Pared60 = Pared58.clone("Pared26");
                Pared60.rotation.y = Math.PI / 2;
                Pared60.position = new BABYLON.Vector3(120, 2,-53);
                Pared60.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                /********************E14***************************/
                var Pared61 = BABYLON.Mesh.CreateBox("Pared3", 2, scene);
                Pared61.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared61.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared61.material.diffuseTexture.hasAlpha = true;
                Pared61.position = new BABYLON.Vector3(-95, 2, -65);
                Pared61.scaling = new BABYLON.Vector3(6, 0.5, 1);


                var Pared62 = Pared61.clone("Pared4");
                Pared62.rotation.y = Math.PI / 2;
                Pared62.position = new BABYLON.Vector3(-137, 2,-52);
                Pared62.scaling = new BABYLON.Vector3(12, 0.5, 1);

                 /********************E13***************************/

               var Pared63 = BABYLON.Mesh.CreateBox("Pared5", 2, scene);
                Pared63.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared63.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared63.material.diffuseTexture.hasAlpha = true;
                Pared63.position = new BABYLON.Vector3(-85, 2, -65);
                Pared63.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared64 = Pared63.clone("Pared6");
                Pared64.rotation.y = Math.PI / 2;
                Pared64.position = new BABYLON.Vector3(-122, 2,-52);
                Pared64.scaling = new BABYLON.Vector3(12, 0.5, 1);


                /********************E12***************************/

              var Pared65 = BABYLON.Mesh.CreateBox("Pared7", 2, scene);
                Pared65.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared65.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared65.material.diffuseTexture.hasAlpha = true;
                Pared65.position = new BABYLON.Vector3(-75, 2, -65);
                Pared65.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared66 = Pared65.clone("Pared8");
                Pared66.rotation.y = Math.PI / 2;
                Pared66.position = new BABYLON.Vector3(-107, 2,-52);
                Pared66.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /********************E11***************************/

               var Pared67 = BABYLON.Mesh.CreateBox("Pared9", 2, scene);
                Pared67.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared67.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared67.material.diffuseTexture.hasAlpha = true;
                Pared67.position = new BABYLON.Vector3(-65, 2, -65);
                Pared67.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared68 = Pared67.clone("Pared10");
                Pared68.rotation.y = Math.PI / 2;
                Pared68.position = new BABYLON.Vector3(-92, 2,-52);
                Pared68.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                /********************E10***************************/

              var Pared69 = BABYLON.Mesh.CreateBox("Pared11", 2, scene);
                Pared69.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared69.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared69.material.diffuseTexture.hasAlpha = true;
                Pared69.position = new BABYLON.Vector3(-55, 2, -65);
                Pared69.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared70 = Pared69.clone("Pared10");
                Pared70.rotation.y = Math.PI / 2;
                Pared70.position = new BABYLON.Vector3(-77, 2,-52);
                Pared70.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                
                /*******************E9****************************/

              var Pared71 = BABYLON.Mesh.CreateBox("Pared13", 2, scene);
                Pared71.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared71.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared71.material.diffuseTexture.hasAlpha = true;
                Pared71.position = new BABYLON.Vector3(-45, 2, -65);
                Pared71.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared72 = Pared71.clone("Pared10");
                Pared72.rotation.y = Math.PI / 2;
                Pared72.position = new BABYLON.Vector3(-62, 2,-52);
                Pared72.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                 /*******************E8****************************/

                var Pared73 = BABYLON.Mesh.CreateBox("Pared15", 2, scene);
                Pared73.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared73.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared73.material.diffuseTexture.hasAlpha = true;
                Pared73.position = new BABYLON.Vector3(-35, 2, -65);
                Pared73.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared74 = Pared73.clone("Pared16");
                Pared74.rotation.y = Math.PI / 2;
                Pared74.position = new BABYLON.Vector3(-47, 2,-52);
                Pared74.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/

                 /*******************E7****************************/

               var Pared75 = BABYLON.Mesh.CreateBox("Pared17", 2, scene);
                Pared75.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared75.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared75.material.diffuseTexture.hasAlpha = true;
                Pared75.position = new BABYLON.Vector3(-25, 2, -65);
                Pared75.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared76 = Pared75.clone("Pared16");
                Pared76.rotation.y = Math.PI / 2;
                Pared76.position = new BABYLON.Vector3(-32, 2,-52);
                Pared76.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
   
                 /********************E6***************************/

               var Pared77 = BABYLON.Mesh.CreateBox("Pared17", 2, scene);
                Pared77.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared77.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared77.material.diffuseTexture.hasAlpha = true;
                Pared77.position = new BABYLON.Vector3(-15, 2, -65);
                Pared77.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared78 = Pared77.clone("Pared20");
                Pared78.rotation.y = Math.PI / 2;
                Pared78.position = new BABYLON.Vector3(-17, 2,-52);
                Pared78.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                /*********************E5**************************/

                var Pared79 = BABYLON.Mesh.CreateBox("Pared21", 2, scene);
                Pared79.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared79.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared79.material.diffuseTexture.hasAlpha = true;
                Pared79.position = new BABYLON.Vector3(-5, 2, -65);
                Pared79.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared80 = Pared79.clone("Pared22");
                Pared80.rotation.y = Math.PI / 2;
                Pared80.position = new BABYLON.Vector3(-2, 2,-52);
                Pared80.scaling = new BABYLON.Vector3(12, 0.5, 1);

                var Pared81 = Pared80.clone("Pared22");
                Pared81.rotation.y = Math.PI / 2;
                Pared81.position = new BABYLON.Vector3(13, 2,-52);
                Pared81.scaling = new BABYLON.Vector3(12, 0.5, 1);

                /***********************************************/
                 /********************E4***************************/

               var Pared82 = BABYLON.Mesh.CreateBox("Pared25", 2, scene);
                Pared82.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared82.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared82.material.diffuseTexture.hasAlpha = true;
                Pared82.position = new BABYLON.Vector3(15, 2, -65);
                Pared82.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared83 = Pared82.clone("Pared26");
                Pared83.rotation.y = Math.PI / 2;
                Pared83.position = new BABYLON.Vector3(19, 2,-52);
                Pared83.scaling = new BABYLON.Vector3(12, 0.5, 1);
              /***********************************************/
               /********************E3***************************/

                var Pared84 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared84.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared84.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared84.material.diffuseTexture.hasAlpha = true;
                Pared84.position = new BABYLON.Vector3(25, 2, -65);
                Pared84.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared85 = Pared84.clone("Pared26");
                Pared85.rotation.y = Math.PI / 2;
                Pared85.position = new BABYLON.Vector3(34, 2,-52);
                Pared85.scaling = new BABYLON.Vector3(12, 0.5, 1);
              /***********************************************/
               /********************E2***************************/

                var Pared86 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared86.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared86.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared86.material.diffuseTexture.hasAlpha = true;
                Pared86.position = new BABYLON.Vector3(35, 2, -65);
                Pared86.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared87 = Pared86.clone("Pared26");
                Pared87.rotation.y = Math.PI / 2;
                Pared87.position = new BABYLON.Vector3(49, 2,-52);
                Pared87.scaling = new BABYLON.Vector3(12, 0.5, 1);

                 /********************E1***************************/

               var Pared88 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared88.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared88.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared88.material.diffuseTexture.hasAlpha = true;
                Pared88.position = new BABYLON.Vector3(45, 2, -65);
                Pared88.scaling = new BABYLON.Vector3(6, 0.5, 1);

                var Pared89 = Pared88.clone("Pared26");
                Pared88.rotation.y = Math.PI / 2;
                Pared88.position = new BABYLON.Vector3(64, 2,-52);
                Pared88.scaling = new BABYLON.Vector3(12, 0.5, 1);

                var Pared90 = Pared89.clone("Pared22");
                Pared90.rotation.y = Math.PI / 2;
                Pared90.position = new BABYLON.Vector3(79, 2,-52);
                Pared90.scaling = new BABYLON.Vector3(12, 0.5, 1);
              /***********************************************/

            
              /***********************************************/
               /********************CONTORNOS***************************/


             var wallMaterial = new BABYLON.StandardMaterial("wallMaterial", scene);
            wallMaterial.backFaceCulling = false;
            wallMaterial.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/brick_diffuse.jpg", scene);
            wallMaterial.specularTexture = new BABYLON.Texture("http://localhost/prueba/img/brick_specularity.jpg", scene);
            wallMaterial.bumpTexture = new BABYLON.Texture("http://localhost/prueba/img/brick_normals.jpg", scene);
            wallMaterial.diffuseTexture.vScale = 0.3;
            wallMaterial.specularTexture.vScale = 0.3;
            wallMaterial.bumpTexture.vScale = 0.3;
            

                var Pared88 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared88.material = wallMaterial;
                /*Pared88.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared88.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/ladrillo_rojo.jpg", scene);
                Pared88.material.diffuseTexture.hasAlpha = true;*/
                Pared88.position = new BABYLON.Vector3(24, 11.5, -65);
                Pared88.scaling = new BABYLON.Vector3(177, 16, 1);

                var Pared89 = Pared88.clone("Pared26");
                Pared89.rotation.y = Math.PI / 2;
                Pared89.position = new BABYLON.Vector3(200, 11.5,10);
                Pared89.scaling = new BABYLON.Vector3(75, 16, 1);
                

                var Pared90 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared90.material = wallMaterial;
                /*Pared90.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared90.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/ladrillo_rojo.jpg", scene);
                Pared90.material.diffuseTexture.hasAlpha = true;*/
                Pared90.position = new BABYLON.Vector3(139, 11.5, 85);
                Pared90.scaling = new BABYLON.Vector3(61, 16, 1);



                var Pared91 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared91.material = wallMaterial;
                /*Pared91.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared91.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/ladrillo_rojo.jpg", scene);
                Pared91.material.diffuseTexture.hasAlpha = true;*/

                Pared91.position = new BABYLON.Vector3(-38, 11.5, 22);
                Pared91.scaling = new BABYLON.Vector3(118, 16, 1);


                var Pared92 = Pared88.clone("Pared26");
                Pared92.rotation.y = Math.PI / 2;
                Pared92.position = new BABYLON.Vector3(79, 11.5,53);
                Pared92.scaling = new BABYLON.Vector3(32, 16, 1);


              /***********************************************/
              /********************B3***************************/

                var Pared93 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared93.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared93.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared93.material.diffuseTexture.hasAlpha = true;
                Pared93.position = new BABYLON.Vector3(135.5, 2, 47);
                Pared93.scaling = new BABYLON.Vector3(14.5, 0.5, 1);

                var Pared94 = Pared93.clone("Pared26");
                Pared94.rotation.y = Math.PI / 2;
                Pared94.position = new BABYLON.Vector3(149, 2,36);
                Pared94.scaling = new BABYLON.Vector3(11, 0.5, 1);


                var Pared95 = Pared93.clone("Pared26");
                Pared95.rotation.y = Math.PI / 2;
                Pared95.position = new BABYLON.Vector3(122, 2,36);
                Pared95.scaling = new BABYLON.Vector3(11, 0.5, 1);

                var Pared96 = BABYLON.Mesh.CreateBox("Pared27", 2,  scene);
                Pared96.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared96.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared96.material.diffuseTexture.hasAlpha = true;
                Pared96.position = new BABYLON.Vector3(135.5, 2, 24);
                Pared96.scaling = new BABYLON.Vector3(14.5, 0.5, 1);

                
              /***********************************************/           
              /********************A2***************************/

                var Pared97 = BABYLON.Mesh.CreateBox("Pared27", 2,  scene);
                Pared97.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared97.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared97.material.diffuseTexture.hasAlpha = true;
                Pared97.position = new BABYLON.Vector3(135.5, 2, 20);
                Pared97.scaling = new BABYLON.Vector3(14.5, 0.5, 1);
               
                var Pared98 = Pared97.clone("Pared26");
                Pared98.rotation.y = Math.PI / 2;
                Pared98.position = new BABYLON.Vector3(149, 2,9);
                Pared98.scaling = new BABYLON.Vector3(11, 0.5, 1);


                var Pared99 = Pared97.clone("Pared26");
                Pared99.rotation.y = Math.PI / 2;
                Pared99.position = new BABYLON.Vector3(122, 2,9);
                Pared99.scaling = new BABYLON.Vector3(11, 0.5, 1);

                var Pared100 = BABYLON.Mesh.CreateBox("Pared27", 2, scene);
                Pared100.material = new BABYLON.StandardMaterial("Mat", scene);
                Pared100.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/franja.png", scene);
                Pared100.material.diffuseTexture.hasAlpha = true;
                Pared100.position = new BABYLON.Vector3(135.5, 2, -2);
                Pared100.scaling = new BABYLON.Vector3(14.5, 0.5, 1);
                

              /****************************************************************/
              /************** CONTENEDORES BOX *******************************/
              /***************************************************************/

                boxes = new Array();

                function  contenedor_vacio(data) {    

                  
                
                    for (var i = data.length-1; i >= 0; i--){
                                boxes[i]=boxes[i] || 0;

                                if(boxes[i]==0){

                                    boxes[i] = new BABYLON.Mesh.CreateBox("Box3"+i, 6.0, scene);
                                    boxes[i].position.x = data[i].POSICION_PLANO_X; //5
                                    boxes[i].position.y = data[i].POSICION_PLANO_Y; //0
                                    boxes[i].position.z = data[i].POSICION_PLANO_Z; //0

                                   


                                    boxes[i].scaling.x = 1;
                                    boxes[i].scaling.y = 0.5;
                                    boxes[i].scaling.z = 0.5;

                                if (data[i].BAHIA=='C10' || data[i].BAHIA=='C9' ) {

                                    boxes[i].rotation.y = -Math.PI/2 ;

                                }; 


                                if (data[i].BAHIA=='A1' || data[i].BAHIA=='A2' || data[i].BAHIA=='B3' ) {

                                    boxes[i].scaling.x = 1.5 ;

                                }; 



                                    var redMat = new BABYLON.StandardMaterial("redMat", scene);

                                    redMat.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/contenedor.png", scene);
                                   
                                    
                                    boxes[i].material=redMat;
                                   // boxes[i] = box3;
                                    //console.log(boxes[i]);
                                    //console.log(i);
                                    //console.log(boxes[i].id);


                                    /*console.log("Array"); 
                                    console.log(boxes[i].position.x);
                                    console.log(boxes[i].position.y);
                                    console.log(boxes[i].position.z);
                                    console.log("fin Array"); */
                                };

                              
                                /*console.log("ACA"); 
                                console.log(boxes[i]);
                                console.log(data[i].FLAG_ESTADO);
                                console.log("FIN ACA");*/

                                 if(data[i].FLAG_ESTADO==1) {  
                                        boxes[i].material.alpha = 1;
                                       /* console.log(i);     
                                        console.log("lleno");  
                                        console.log(boxes[i]);
                                        console.log(boxes[i].position.x);
                                        console.log(boxes[i].position.y);
                                        console.log(boxes[i].position.z);*/

                                    } else if(data[i].FLAG_ESTADO==0){   
                                        boxes[i].material.alpha = 0;                               
                                    
                                    }  
                                
                                

                            };

                  
                   
                    //location.reload(true);
                } ;


    


            
           
                function contenedor_vacios(){
                 $.ajax({

                    type: "POST",

                    url: "<?= site_url('admin/plano/maestro_plano') ?>",

                    dataType: "json",

                    success: function (data) {
                        console.log(data);   
                                
                        contenedor_vacio(data);
                        //contenedor_vacios();
                        
                        //location.reload(true);

                    },

                    error: function (error) {

                        alert('ERROR!');  

                    }
                });

                }
                contenedor_vacios();
                setInterval(contenedor_vacios, 10000);

           
               
            engine.runRenderLoop(function () {
            scene.render();
            });

            window.addEventListener("resize", function () {
            engine.resize();
            });

        //}


       </script>

   

  






   