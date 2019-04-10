<link rel="stylesheet" type="text/css" href="static/main/fonts">
<link rel="stylesheet" href="static/main/bootstrap/css/bootstrap.min.css">
<script>
$(function() {
    $("#carousel-savar").carousel();
});
</script>

<style>
    .cuerpo>a{
       padding: 10px;
        height: 150px;
        text-align: center;
        cursor: pointer;
        display:block;
        text-decoration: none;
        color:#111;
    }
    .cuerpo>a:hover{
        background: #e8e8ff;
        border-left-width: 3px;    
        border-bottom-width: 2px;    
    }
    .cuerpo>a:active{
        border-left-width: 2px;    
        border-bottom-width: 1px;    
    }
	  .carousel-savar > .item > a > img {
      width: 100%;
      margin: auto;
	  text-align: center;
  }
    .bs-callout {
        padding: 20px;
        margin: 20px 0;
        border: 1px solid #eee;
        border-left-width: 5px;
        border-bottom-width: 3px;
        border-radius: 3px;
    }
    .bs-callout-info {
        border:1px solid #1b809e;
        border-left: 5px solid #1b809e;
        border-bottom: 2px solid #1b809e;
    }
	.value-items img{
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 100%;
  text-align: center;
}
#value{
	
    margin-top: 60px;
    margin-bottom: 60px;
}
#contenido{
	margin-top: 80px;
    margin-bottom: 80px;
}
#value h2{
  font-style:italic;
  font-weight:bold;
  font-size:2em;
  font-color:#ffffff;
  font-family:'arial','Verdana'
}

#value p{
 
  font-size:1em;
  font-color:#ffffff;
  font-family:'tahoma','Verdana'
}

#val1 {
  background-color: #792c24;
}

#val2 {
  background-color: #4f5e6d;
}

#val3 {
  background-color: #665e25;
}
.fancy {
  display: flex;
  align-items: center;
}
.fancy::after {
  content: '';
  background: repeating-linear-gradient(135deg, transparent, transparent 2px, rgba(0,0,0,0.1) 4px, rgba(0,0,0,0.1)  6px);
  
  height: 0.8em;
  flex: 1;
  margin-left: 0.5em;
}
</style>
 <header>
<img src="static/main/img/savar_logo.png" width=100%>
 </header>

<div class="container_fluid">
    <div id="carousel-savar" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-savar" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-savar" data-slide-to="1"></li>
            <li data-target="#carousel-savar" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="static/main/img/2.jpg"   width="100%" height="30%" alt="..." >
              <div class="carousel-caption">
            
              </div>
            </div>
            <div class="item">
              <img src="static/main/img/1.jpg" width="100%" height="30%" alt="30%">
              <div class="carousel-caption">
              
              </div>
            </div>
             <div class="item">
              <img src="static/main/img/6.png"  width="100%" height="30%" alt="30%">
              <div class="carousel-caption">
        
              </div>
            </div>
           
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-savar" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#carousel-savar" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
    </div>


</div>


<div class="container" id="value" >
<h1 align="center" > <FONT FACE="Arial">Seleccionar una de las siguientes opciones</font></h1>
     <div class="row" id="contenido">
        
		<div class="col-xs-4" align="center">
          <img  class="img-circle" src="static/main/img/6.png"  width="300" height="300" align="center" >
          <h2> Contenedores </h2>
      
          <p class="lead"> <FONT FACE="Arial"> <a class="btn btn-primary" href="admin/contenedor" role="button">Ingresar</a></font></p>
        </div><!-- /.col-lg-4 -->
        
		<div class="col-xs-4 col-xs-offset-4" align="center">
          <img class="img-circle" src="static/main/img/inventario1.jpg" width="300" height="300">
          <h2>  Reportes </h2>
         
          <p><a class="btn btn-primary" href="admin/movimiento_contenedor">Ingresar</button></a></p>
        </div><!-- /.col-lg-4 -->
        
      </div>

 </div>

      
<!--class="col-md-4 bs-callout bs-callout-info"-->