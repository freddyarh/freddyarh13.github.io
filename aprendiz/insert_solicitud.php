<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="/APSOS/Logos/ICONO.ico">
<meta charset="utf-8">
<title>Solicitud</title>
<link href="/APSOS/estilo.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="container2">
<div class="imagenlogo">
<img src="/APSOS/LOGOS/8.jpg" width="194" height="173">
</div>
 <div class="banner"><h1>
<marquee style= "color: RED; font-family: Bradley Hand ITC; font-size: 70; "><img src="/APSOS/LOGOS/apsosban.gif" width="468" height="173"></marquee></h1>
 </div>
<div class="logosena"><img src="/APSOS/LOGOS/logo_sena_virtual.jpg" width="190" height="152">
</div>
</div>
<div class="container">
<span class="preload1"></span>
<span class="preload2"></span>

<ul id="nav">
	<li class="top"><a href="/APSOS/index.php" class="top_link"><span>Inicio</span></a></li>
	<li class="top"><a href="" id="products" class="top_link"><span class="down">Apoyo de Sostenimiento</span></a>
		<ul class="sub">
			<li><a href="/APSOS/administrador/inicio_apoyo_sostenimiento_admi.php" >Administrador</a></li>
			<li><a href="/APSOS/apoyo_sostenimiento/inicio_apoyo_sostenimiento_funci.php" >Funcionario</a></li>
		</ul>
	</li>
	<li class="top"><a href="" id="services" class="top_link"><span class="down">Monitorias</span></a>
		<ul class="sub">
			<li><a href="/APSOS/monitoria/inicio_monitoria.php">Inicio de Seción</a></li>
		</ul>
	</li>
	<li class="top"><a href="" id="contacts" class="top_link"><span class="down">Fondo Emprender</span></a>
		<ul class="sub">
			<li><a href="/APSOS/fondo_emprender/inicio_fondo_emprender.php">Inicio de Seción</a></li>
		</ul>
	</li>
	<li class="top"><a href="" id="shop" class="top_link"><span class="down">Aprendiz</span></a>
		<ul class="sub">
			<li><a href="/APSOS/aprendiz/Index_aprendiz_consultar.php">Consultar</a></li>
			<li><a href="/APSOS/aprendiz/Index_aprendiz_solicitar.php">Solicitar</a></li>
		</ul>
	</li>
    <li class="top"><a href="" id="contacts" class="top_link"><span class="down">Planes de Mejoramiento</span></a>
		<ul class="sub">
			<li><a href="/APSOS/planes_mejoramiento/inicio_planes_mejoramiento.php">Inicio de Seción</a></li>
		</ul>
    </li>
</ul>

  <div class="sidebar1">
  
   
</div>
  <div class="content">
    <h1>Ficha de Solicitud</h1>
   <?php
require_once ('conexion.php');
 mysql_select_db ($database,$conexion)or die("Problemas en la Seleccion de la Base de Datos");
$tipoforma=$_REQUEST[tipo];
$trimestre=$_REQUEST[trimestre];
$año = $_REQUEST['año'];
$mes = $_REQUEST['mes'];
$dia = $_REQUEST['dia'];
$fechaNacimiento= $año."/". $mes ."/".$dia ;

if($tipoforma==1 && $tipoforma==0)
    {
        echo $respuesta="No es apto para el apoyo de sostenimiento por su tipo de formacion";
    }
    else
    {
        if($trimestre > 1 && $trimestre<6)
        {
            mysql_query("insert into solicitudes (fecha_solicitud,ficha_formacion,nombre_formacion,tipo_formacion,trimestre,nombre,apellido,
			tipo_identificacion,identificacion,lugar_nacimiento,fecha_nacimiento,estado_civil,situacion_actual,telefono_fijo,celular,ciudad_vivienda,estrato,vivienda)
			values ('$_REQUEST[fecha]','$_REQUEST[ficha]','$_REQUEST[nombre_formacion]','$_REQUEST[tipo]','$_REQUEST[trimestre]','$_REQUEST[nombre]',
			'$_REQUEST[apellido]','$_REQUEST[tipo_identificacion]','$_REQUEST[identificacion]','$_REQUEST[lugar_nacimiento]','$fechaNacimiento',
			'$_REQUEST[estado_civil]','$_REQUEST[situacion_actual]','$_REQUEST[telefono_fijo]','$_REQUEST[celular]','$_REQUEST[ciudad]','$_REQUEST[estrato]',
			'$_REQUEST[vivienda]')",$conexion) or die("Problemas en el select".mysql_error());
			mysql_close($conexion);
			echo "almacenado la Solicitud";
            
           
                
            }
        
        else
        {
            echo $respuesta="No es apto para el apoyo de sostenimiento, por su trimestre";
        }    
    }



?>

   </div>
   
  <div class="sidebar2">
    
   </div>
</div>
 
</body>
</html>