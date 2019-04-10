  <script src="https://www.babylonjs.com/hand.minified-1.2.js"></script>
        <script src="https://preview.babylonjs.com/babylon.js"></script>
        <script src="https://preview.babylonjs.com/gui/babylon.gui.min.js"></script>
        <script src="https://preview.babylonjs.com/cannon.js"></script>
        <script src="https://preview.babylonjs.com/draco_decoder.js" type="text/x-draco-decoder"></script>
        <script src="https://preview.babylonjs.com/oimo.js"></script>
 <style>
            #plano_3d {
                overflow: hidden;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

            #renderCanvas {
                width: 100%;
                height: 100%;
                touch-action: none;
            }
        </style>


 <div id="plano_3d">

<canvas id="renderCanvas"></canvas>

</div>





    <script>

 
 
        var canvas = document.getElementById("renderCanvas");
        var engine = new BABYLON.Engine(canvas, true);

       $.ajax({

           type: "POST",

           url: "<?= site_url('admin/movimiento_contenedor/maestro_bahia_A') ?>",


           
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



           function exito(data) {
           


            var scene = new BABYLON.Scene(engine);
        
            var camera = new BABYLON.ArcRotateCamera("Camera", Math.PI, Math.PI / 8, 150, BABYLON.Vector3.Zero(), scene);
        
            camera.attachControl(canvas, true);
        
            var light = new BABYLON.HemisphericLight("hemi", new BABYLON.Vector3(0, 1, 0), scene);


          /*  var CuboCielo = new BABYLON.Mesh.CreateBox("cielo",10,scene);

            var Cubo= new BABYLON.Mesh.CreateBox("crate",10,scene);
            Cubo.material=new BABYLON.StandardMaterial("Mat",scene);
            Cubo.material.diffuseTexture= new BABYLON.Texture();
            Cubo.material.diffuseTexture.hasAlpa=true;
            Cubo.position=new BABYLON.Vector3(0,10,-10);
             var MaterialCuboCielo= new BABYLON.StandardMaterial("http://localhost/prueba/img/contenedor.png",scene);
             MaterialCuboCielo.backFaceCulling=false;
             MaterialCuboCielo.reflectionTexture=new BABYLON.CubeTexture();
                CuboCielo.material=MaterialCuboCielo;*/

        var Piso = BABYLON.Mesh.CreatePlane("piso", 62, scene);
        Piso.material = new BABYLON.StandardMaterial("groundMat", scene);
        Piso.material.diffuseColor = new BABYLON.Color3(1, 1, 1);
        Piso.material.backFaceCulling = false;
        Piso.position = new BABYLON.Vector3(5, -3, 15);
        Piso.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);

        var Pared = BABYLON.Mesh.CreateBox("Pared", 2, scene);
        Pared.material = new BABYLON.StandardMaterial("Mat", scene);
        Pared.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/g3.jpg", scene);
        Pared.material.diffuseTexture.hasAlpha = true;
        Pared.position = new BABYLON.Vector3(5, 7, 45);
        Pared.scaling = new BABYLON.Vector3(31, 10, 1);

            //Creation of 3 boxes and 2 spheres

            // Pared2
        var Pared2 = Pared.clone("Pared2");
        Pared2.rotation.y = Math.PI / 2;
        Pared2.position = new BABYLON.Vector3(35, 7,15);

        
           var box2 = BABYLON.Mesh.CreateBox("Box2", 6.0, scene);
          // box2.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/contenedor.png", scene);

           
          var redMat = new BABYLON.StandardMaterial("redMat", scene);
            redMat.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/contenedor2.png", scene);
            box2.material = redMat;

           var box3 = BABYLON.Mesh.CreateBox("Box3", 6.0, scene);
            box3.material = redMat;


            var box4 = BABYLON.Mesh.CreateBox("Box4", 6.0, scene);
            box4.material = redMat;

            var box5 = BABYLON.Mesh.CreateBox("Box5", 6.0, scene);
            box5.material = redMat;

            var box6 = BABYLON.Mesh.CreateBox("Box6", 6.0, scene);
            box6.material = redMat;

            var box7 = BABYLON.Mesh.CreateBox("Box7", 6.0, scene);
            box7.material = redMat;

            var box8 = BABYLON.Mesh.CreateBox("Box8", 6.0, scene);
            box8.material = redMat;

            var box9 = BABYLON.Mesh.CreateBox("Box9", 6.0, scene);
            box9.material = redMat;

            var box10 = BABYLON.Mesh.CreateBox("Box10", 6.0, scene);
            box10.material = redMat;

            var box11 = BABYLON.Mesh.CreateBox("Box11", 6.0, scene);
            box11.material = redMat;

            var box12 = BABYLON.Mesh.CreateBox("Box12", 6.0, scene);
            box12.material = redMat;

            var box13 = BABYLON.Mesh.CreateBox("Box13", 6.0, scene);
            box13.material = redMat;

            var box14 = BABYLON.Mesh.CreateBox("Box14", 6.0, scene);
            box14.material = redMat;


            var box15 = BABYLON.Mesh.CreateBox("Box15", 6.0, scene);
            box15.material = redMat;

            var box16 = BABYLON.Mesh.CreateBox("Box16", 6.0, scene);
            box16.material = redMat;


            var box17 = BABYLON.Mesh.CreateBox("Box17", 6.0, scene);
            box17.material = redMat;

            var box18 = BABYLON.Mesh.CreateBox("Box18", 6.0, scene);
            box18.material = redMat;

              var box19 = BABYLON.Mesh.CreateBox("Box19", 6.0, scene);
            box19.material = redMat;

            var box20 = BABYLON.Mesh.CreateBox("Box20", 6.0, scene);
            box20.material = redMat;


            var box21 = BABYLON.Mesh.CreateBox("Box21", 6.0, scene);
            box21.material = redMat;

            var box22 = BABYLON.Mesh.CreateBox("Box22", 6.0, scene);
            box22.material = redMat;


            var box23 = BABYLON.Mesh.CreateBox("Box23", 6.0, scene);
            box23.material = redMat;

            var box24 = BABYLON.Mesh.CreateBox("Box24", 6.0, scene);
            box24.material = redMat;

            var box25 = BABYLON.Mesh.CreateBox("Box25", 6.0, scene);
            box25.material = redMat;

            var box26 = BABYLON.Mesh.CreateBox("Box26", 6.0, scene);
            box26.material = redMat;

            var box27 = BABYLON.Mesh.CreateBox("Box27", 6.0, scene);
            box27.material = redMat;


            var box28 = BABYLON.Mesh.CreateBox("Box28", 6.0, scene);
            box28.material = redMat;

            var box29 = BABYLON.Mesh.CreateBox("Box29", 6.0, scene);
            box29.material = redMat;   

            var box30 = BABYLON.Mesh.CreateBox("Box30", 6.0, scene);
            box30.material = redMat;

            var box31 = BABYLON.Mesh.CreateBox("Box31", 6.0, scene);
            box31.material = redMat;   

            var box32 = BABYLON.Mesh.CreateBox("Box32", 6.0, scene);
            box32.material = redMat;

            var box33 = BABYLON.Mesh.CreateBox("Box33", 6.0, scene);
            box33.material = redMat;  

            var box34 = BABYLON.Mesh.CreateBox("Box32", 6.0, scene);
            box34.material = redMat;

            var box35 = BABYLON.Mesh.CreateBox("Box33", 6.0, scene);
            box35.material = redMat;  

            var box36 = BABYLON.Mesh.CreateBox("Box32", 6.0, scene);
            box36.material = redMat;

            var box37 = BABYLON.Mesh.CreateBox("Box37", 6.0, scene);
            box37.material = redMat;  

            var box38 = BABYLON.Mesh.CreateBox("Box38", 6.0, scene);
            box38.material = redMat;

            var box39 = BABYLON.Mesh.CreateBox("Box39", 6.0, scene);
            box39.material = redMat;  

            var box40 = BABYLON.Mesh.CreateBox("Box40", 6.0, scene);
            box40.material = redMat;

            var box41 = BABYLON.Mesh.CreateBox("Box41", 6.0, scene);
            box41.material = redMat;  

            var box42 = BABYLON.Mesh.CreateBox("Box40", 6.0, scene);
            box42.material = redMat;

            var box43 = BABYLON.Mesh.CreateBox("Box41", 6.0, scene);
            box43.material = redMat;  

            var box44 = BABYLON.Mesh.CreateBox("Box40", 6.0, scene);
            box44.material = redMat;

            var box45 = BABYLON.Mesh.CreateBox("Box41", 6.0, scene);
            box45.material = redMat; 

            var box46 = BABYLON.Mesh.CreateBox("Box40", 6.0, scene);
            box46.material = redMat;

            var box47 = BABYLON.Mesh.CreateBox("Box41", 6.0, scene);
            box47.material = redMat;  

            var box48 = BABYLON.Mesh.CreateBox("Box40", 6.0, scene);
            box48.material = redMat;

            var box49 = BABYLON.Mesh.CreateBox("Box41", 6.0, scene);
            box49.material = redMat;  

            var box50 = BABYLON.Mesh.CreateBox("Box40", 6.0, scene);
            box50.material = redMat;

            var box51 = BABYLON.Mesh.CreateBox("Box41", 6.0, scene);
            box51.material = redMat;   



          

            /**** PISO ****/
           /* var ground = BABYLON.Mesh.CreateGround("ground1", 66, 66, 2, scene);

            ground.position.x = 0;
            ground.position.y = -3;
            ground.position.z = 0;*/

            /***** FIN DE PISO  *****/
       
        
            //Moving boxes on the x axis
         //box1.position.x = -20;

            if (data[0].FLAG_ESTADO =='1') 

            {

            var data1x=data[0].POSICION_X;
            var data1y=data[0].POSICION_Y;
            var data1z=data[0].POSICION_Z;

            box2.position.x = data1x; //5
            box2.position.y = data1y; //0
            box2.position.z = data1z; //0

            box2.scaling.x = 2;

            console.log ("lleno");
            } ;


            if (data[1].FLAG_ESTADO =='1') 

            {
            
            var data2x=data[1].POSICION_X;
            var data2y=data[1].POSICION_Y;
            var data2z=data[1].POSICION_Z;

            box3.position.x = data2x; //25
            box3.position.y = data2y; //0
            box3.position.z = data2z; //0

             box3.scaling.x = 2;

            console.log ( box3.position.x);
            
            } ;

         
            //******//

            box4.position.x = 5; //0
            box4.position.y = 6; //0
            box4.position.z = 0; //0           
           
            box4.scaling.x = 2;

            box5.position.x = 18; //0
            box5.position.y = 6; //0
            box5.position.z = 0; //0           
           
            box5.scaling.x = 2;


            box6.position.x = 5; //0
            box6.position.y = 12; //0
            box6.position.z = 0; //0           
           
            box6.scaling.x = 2;

            box7.position.x = 18; //0
            box7.position.y = 12; //0
            box7.position.z = 0; //0           
           
            box7.scaling.x = 2;


            box8.position.x = 5; //0
            box8.position.y = 18; //0
            box8.position.z = 0; //0           
           
            box8.scaling.x = 2;

            box9.position.x = 18; //0
            box9.position.y = 18; //0
            box9.position.z = 0; //0           
           
            box9.scaling.x = 2;

            box10.position.x = 5; //0
            box10.position.y = 24; //0
            box10.position.z = 0; //0           
           
            box10.scaling.x = 2;

            box11.position.x = 18; //0
            box11.position.y = 24; //0
            box11.position.z = 0; //0           
           
            box11.scaling.x = 2;


            /*********** FILA - 2 *******************/

            box12.position.x = 5; //0
            box12.position.y = 0; //0
            box12.position.z = 7; //0           
           
            box12.scaling.x = 2;

            box13.position.x = 18; //0
            box13.position.y = 0; //0
            box13.position.z = 7; //0           
           
            box13.scaling.x = 2;


            box14.position.x = 5; //0
            box14.position.y = 6; //0
            box14.position.z = 7; //0           
           
            box14.scaling.x = 2;

            box15.position.x = 18; //0
            box15.position.y = 6; //0
            box15.position.z = 7; //0           
           
            box15.scaling.x = 2;

            box16.position.x = 5; //0
            box16.position.y = 12; //0
            box16.position.z = 7; //0           
           
            box16.scaling.x = 2;

            box17.position.x = 18; //0
            box17.position.y = 12; //0
            box17.position.z = 7; //0           
           
            box17.scaling.x = 2;

            box18.position.x = 5; //0
            box18.position.y = 18; //0
            box18.position.z = 7; //0           
           
            box18.scaling.x = 2;

            box19.position.x = 18; //0
            box19.position.y = 18; //0
            box19.position.z = 7; //0           
           
            box19.scaling.x = 2;

            box20.position.x = 5; //0
            box20.position.y = 24; //0
            box20.position.z = 7; //0           
           
            box20.scaling.x = 2;

            box21.position.x = 18; //0
            box21.position.y = 24; //0
            box21.position.z = 7; //0           
           
            box21.scaling.x = 2;


            /****** FILA 3 ****/




            box22.position.x = 5; //0
            box22.position.y = 0; //0
            box22.position.z = 14; //0           
           
            box22.scaling.x = 2;

            box23.position.x = 18; //0
            box23.position.y = 0; //0
            box23.position.z = 14; //0           
           
            box23.scaling.x = 2;


            box24.position.x = 5; //0
            box24.position.y = 6; //0
            box24.position.z = 14; //0           
           
            box24.scaling.x = 2;

            box25.position.x = 18; //0
            box25.position.y = 6; //0
            box25.position.z = 14; //0           
           
            box25.scaling.x = 2;

            box26.position.x = 5; //0
            box26.position.y = 12; //0
            box26.position.z = 14; //0           
           
            box26.scaling.x = 2;

            box27.position.x = 18; //0
            box27.position.y = 12; //0
            box27.position.z = 14; //0           
           
            box27.scaling.x = 2;

            box28.position.x = 5; //0
            box28.position.y = 18; //0
            box28.position.z = 14; //0           
           
            box28.scaling.x = 2;

            box29.position.x = 18; //0
            box29.position.y = 18; //0
            box29.position.z = 14; //0           
           
            box29.scaling.x = 2;

            box30.position.x = 5; //0
            box30.position.y = 24; //0
            box30.position.z = 14; //0           
           
            box30.scaling.x = 2;

            box31.position.x = 18; //0
            box31.position.y = 24; //0
            box31.position.z = 14; //0           
           
            box31.scaling.x = 2;


            /***** FIN FILA 3 ****/

              /*****  FILA 4   ****/

            box32.position.x = 5; //0
            box32.position.y = 0; //0
            box32.position.z = 21; //0           
           
            box32.scaling.x = 2;

            box33.position.x = 18; //0
            box33.position.y = 0; //0
            box33.position.z = 21; //0           
           
            box33.scaling.x = 2;

            box34.position.x = 5; //0
            box34.position.y = 6; //0
            box34.position.z = 21; //0           
           
            box34.scaling.x = 2;

            box35.position.x = 18; //0
            box35.position.y = 6; //0
            box35.position.z = 21; //0           
           
            box35.scaling.x = 2;

            box36.position.x = 5; //0
            box36.position.y = 12; //0
            box36.position.z = 21; //0           
           
            box36.scaling.x = 2;

            box37.position.x = 18; //0
            box37.position.y = 12; //0
            box37.position.z = 21; //0           
           
            box37.scaling.x = 2;

            box38.position.x = 5; //0
            box38.position.y = 18; //0
            box38.position.z = 21; //0           
           
            box38.scaling.x = 2;

            box39.position.x = 18; //0
            box39.position.y = 18; //0
            box39.position.z = 21; //0           
           
            box39.scaling.x = 2;

            box40.position.x = 5; //0
            box40.position.y = 24; //0
            box40.position.z = 21; //0           
           
            box40.scaling.x = 2;

            box41.position.x = 18; //0
            box41.position.y = 24; //0
            box41.position.z = 21; //0           
           
            box41.scaling.x = 2;

          


            /***** FIN FILA 4 ****/

            /*****  FILA 5   ****/

            box42.position.x = 5; //0
            box42.position.y = 0; //0
            box42.position.z = 28; //0           
           
            box42.scaling.x = 2;

            box43.position.x = 18; //0
            box43.position.y = 0; //0
            box43.position.z = 28; //0           
           
            box43.scaling.x = 2;

            box44.position.x = 5; //0
            box44.position.y = 6; //0
            box44.position.z = 28; //0           
           
            box44.scaling.x = 2;

            box45.position.x = 18; //0
            box45.position.y = 6; //0
            box45.position.z = 28; //0           
           
            box45.scaling.x = 2;

            box46.position.x = 5; //0
            box46.position.y = 12; //0
            box46.position.z = 28; //0           
           
            box46.scaling.x = 2;

            box47.position.x = 18; //0
            box47.position.y = 12; //0
            box47.position.z = 28; //0           
           
            box47.scaling.x = 2;

            box48.position.x = 5; //0
            box48.position.y = 18; //0
            box48.position.z = 28; //0           
           
            box48.scaling.x = 2;

            box49.position.x = 18; //0
            box49.position.y = 18; //0
            box49.position.z = 28; //0           
           
            box49.scaling.x = 2;

            box50.position.x = 5; //0
            box50.position.y = 24; //0
            box50.position.z = 28; //0           
           
            box50.scaling.x = 2;

            box51.position.x = 18; //0
            box51.position.y = 24; //0
            box51.position.z = 28; //0           
           
            box51.scaling.x = 2;



            /***** FIN FILA 5 ****/





         
        
            
      engine.runRenderLoop(function () {
            scene.render();
        });

      window.addEventListener("resize", function () {
            engine.resize();
        });

        }

        
        
     

        

        // Resize
        

          function fallo() {
             console.log("El promisse responde, no traje datos");
        };
    </script>