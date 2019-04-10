

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


.pricingTable{
    text-align: center;
    box-shadow: 0 0 1px 4px rgba(0, 0, 0, 0.1);
}
.pricingTable > .pricingTable-header{
    color:#FFAF3E;
    padding: 3px 0;
    background: #205A7F;
}
.pricingTable .price-value{
    background: #353740;
    display: block;
    padding: 24px 12px;
    font-size: 18px;
    position: relative;
}
.pricingTable .price-value:after,
.pricingTable .price-value:before{
    content: "";
    width: 24px;
    height: 24px;
    background: #fff;
    border-radius: 50%;
    display: inline-block;
    position: absolute;
    top:40%;
    right:-15px;
}
.pricingTable .price-value:before{
    left:-15px;
}
.pricingTable .price-value > span{
    font-size: 24px;
}
.pricingTable .price-value > .month{
    display: block;
    text-transform: uppercase;
    font-size: 12px;
}
.pricingTable .price-value > .month:before{
    content: "";
    border: 1px solid #fff;
    width: 28px;
    display: block;
    margin: 0 auto;
    margin-bottom: 5px;
}
.pricingTable .icon{
    display: block;
    padding: 30px 0;
    font-size: 54px;
}
.pricingTable .icon > i{
    transform: rotateY(0deg);
    transition: all 1s ease-out 0s;
}
.pricingTable .icon:hover > i{
    transform: rotateY(360deg);
    color:#333333;
    transition: all 1s ease-out 0s;
}
.pricingTable .heading{
    padding: 12px 0;
    background: #102D40;
    display: block;
}
.pricingTable .heading > h3{
    margin: 0;
    text-transform: capitalize;
}
.pricingTable > .pricingContent{
    text-align: left;
}
.pricingTable > .pricingContent > ul{
    list-style: none;
    padding: 0;
    margin-bottom: 0;
}
.pricingTable > .pricingContent > ul > li{
    padding: 12px;
    background: #fff;
    border-bottom: 1px solid #e5e5e5;
    transition: all 0.3s ease-out 0s;
}
.pricingTable > .pricingContent > ul > li:before{
    content: "\f105";
    font-family: 'FontAwesome';
    margin-right: 5px;
    font-weight: bold;
    font-size: 15px;
    transition:all 0.5s ease 0s;
}
.pricingTable > .pricingContent > ul > li:hover{
    background: #f8f8f8;
    color:#727cb6;
}
.pricingTable > .pricingContent > ul > li:hover:before{
    margin-right: 15px;
}
.pricingTable .pricingTable-sign-up{
    padding: 15px 0;
    background: #fff;
}
.pricingTable-sign-up > .btn-block{
    width: 50%;
    margin: 0 auto;
    background: #727cb6;
    color:#fff;
    text-transform: uppercase;
    padding: 10px 0;
    border-radius: 0px;
    position: relative;
    transition: all 0.5s ease-out 0s;
}
.pricingTable-sign-up > .btn-block:after,
.pricingTable-sign-up > .btn-block:before{
    content: "";
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: #fff;
    display: inline-block;
    position: absolute;
    top:30%;
    right: -10px;
    transition:all 0.8s ease 0s;
}
.pricingTable-sign-up > .btn-block:before{
    left:-10px;
}
.pricingTable .btn-block:hover:after,
.pricingTable .btn-block:hover:before{
    width: 0;
    height: 0;
}
.pricingTable.pink .pricingTable-header,
.pricingTable.pink .btn-block{
    background: #ed687c;
}
.pricingTable.pink .pricingContent > ul > li:hover{
    color: #ed687c;
}
.pricingTable.orange .pricingTable-header,
.pricingTable.orange .btn-block{
    background: #e67e22;
}
.pricingTable.orange .price-value > .month:after{
    content: "best";
    width: 42px;
    height:42px;
    border-radius: 50%;
    background: #fff;
    display: inline-block;
    position: absolute;
    top:3px;
    right: 3px;
    color:#000;
    font-size: 12px;
    line-height: 42px;
    font-weight: bold;
}
.pricingTable.orange .pricingContent > ul > li:hover{
    color: #e67e22;
}
.pricingTable.dark-green .pricingTable-header,
.pricingTable.dark-green .btn-block{
    background: #008b8b;
}
.pricingTable.dark-green .pricingContent > ul > li:hover{
    color: #008b8b;
}
@media screen and (max-width: 990px){
    .pricingTable{
        margin-bottom: 20px;
    }
}

</style>


<!-- Sub Nav End -->
<div class="sub-nav hidden-sm hidden-xs">
 <ul>
  <li><a href="#" class="heading">  Buscar de Contenedor</a></li>
</ul>
<div class="custom-search hidden-sm hidden-xs">
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


                

           <form  onsubmit="save()" action="javascript:void(0);" id="form_color" class="form-horizontal row-border" >
            <div class="form-group">
           <div class="row">
          
           <div class="col-lg-4 col-md-4 ">
            <label for="recipient-name" class=" col-form-label">BL-MASTER:</label>
            </div>

            <div class="col-lg-7 col-md-7">
            <input type="text" class="form-control" id="bl_master" name="bl_master" placeholder="Ingresar código del contenedor">
            </div>

            <div class="col-lg-1 col-md-1 ">
            <button type='button' class="btn btn-info" onclick="save()" >Buscar</button>
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

                camera.setPosition(new BABYLON.Vector3(0, 30, -78));

                camera.lowerBetaLimit = 0.1;
                camera.upperBetaLimit = (Math.PI / 2) * 0.9;
                camera.lowerRadiusLimit = 30;
                camera.upperRadiusLimit = 150;

                camera.attachControl(canvas, true);

                var light2 = new BABYLON.HemisphericLight("hemi", new BABYLON.Vector3(0, 1, 0), scene);

                var light = new BABYLON.DirectionalLight("light", new BABYLON.Vector3(5,0,20), scene);
                light.position = new BABYLON.Vector3(1,1,-10);

                var Piso = BABYLON.Mesh.CreateBox("piso", 2, scene);
                Piso.material = new BABYLON.StandardMaterial("Mat", scene);
                Piso.material.diffuseTexture = new BABYLON.Texture("http://localhost/prueba/img/g3.jpg", scene);
                Piso.material.diffuseTexture.hasAlpha = true;

                Piso.position = new BABYLON.Vector3(10, -3, 15);
                Piso.scaling = new BABYLON.Vector3(30, 20, 1);
                Piso.rotation = new BABYLON.Vector3(Math.PI / 2, 0, 0);

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
       
                myLabel.left = "0px";
                myLabel.top = "-350px";
                myLabel.scaleX = 0.95;
                myLabel.scaleY = 0.95;

                advancedTexture.addControl(myLabel);

                var text1 = new BABYLON.GUI.TextBlock();
                
                text1.text = "BAHIA:" + data[0].BAHIA;
                text1.color = "#cbc879";
                text1.fontFamily = "Verdana";
                text1.fontSize = 25;
                text1.left = "0px";
                text1.top = "0px";


                myLabel.addControl(text1);  


                for (var i = data.length-1; i >= 0; i--) {


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
                        var color = "#edf593" //amarillo
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
            
                var BAHIA=data[0]['BAHIA'];

                var bl=data[0]['bl_master'];
                var fecha=data[0]['fecha'];
                var rfid_contenedor=data[0]['rfid_contenedor'];
                var ubicacion=data[0]['ubicacion'];
                var fila = data[0]['FILA'];
                var piso = data[0]['PISO'];
                var columna = data[0]['COLUMNA'];

                console.log('BAHIA');
                console.log(piso);
                    
                $('#BAHIA').text(BAHIA);
                $('#bl').text(bl);
                $('#fecha').text(fecha);
                $('#rfid_contenedor').text(rfid_contenedor);
                $('#ubicacion').text(ubicacion);
                $('#fila').text(fila);
                $('#piso').text(piso);
                $('#columna').text(columna);


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


    <div id="fromHTMLtestdiv">
    
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
    
    <div class="widget-body" >
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
                    
                </h5>
              
            </div>
        
        </div>


        <div class="row">
            <div class="col-md-3 col-sm-3">
       
            <div class="pricingTable">
                <div class="pricingTable-header">

                    <span class="price-value">
                    UBICACIÓN DEL CONTENEDOR
                    <span></span>
                    <span class="month">
                    
                    </span>
                    </span>

                    <span class="icon"><i class="fa fa-map-marker"></i></span>

                    <span class="heading">
                        <h4><i id='bl'></i></h4>
                        <h5>BL-MASTER</h5>
                    </span>
                    
                </div>
 
                <div class="pricingContent">
                    <ul>
                        <li>UBICACION: <i id='ubicacion'></i></li>
                        <li>BAHIA: <i id='BAHIA'></i></li>
                        <li>COLUMNA:<i id='columna'></i> </li>
                        <li>FILA: <i id='fila'></i></li>
                        <li>PISO: <i id='piso' ></i></li>
                        <li>FECHA - HORA: <i id='fecha'></i></li>
                        <li>RFID CONTENEDOR: <i id='rfid_contenedor'></i></li>
                       
                    </ul>
                </div><!-- /  CONTENT BOX-->
 
            
            </div>
       
  




</div>
<div class="col-lg-9 col-md-9">
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
</div>

</div> 







