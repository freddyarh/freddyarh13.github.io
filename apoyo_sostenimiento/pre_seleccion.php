
<body>
<?php
include "funciones.php";
require_once ('conexion.php');
 mysql_select_db ($database,$conexion)or die("Problemas en la Seleccion de la Base de Datos");
$fecha= date("d/m/y");
$red_juntos=$_REQUEST['red_juntos'];
$sisben=$_REQUEST['sisben'];
$residecia_afuera=$_REQUEST['residencia_afuera'];
$residencia_dentro=$_REQUEST['residencia_dentro'];
$arriendo=$_REQUEST['arriendo'];
$propia=$_REQUEST['propia'];
$desplazado=$_REQUEST['desplazado'];
$proyectos=$_REQUEST['proyectos'];
$lider=$_REQUEST['lider'];
$estrato=$_REQUEST['estrato'];
echo "El aprendiz obtuvo el siguiente puntaje:";
echo $sumatoria = apoyo($red_juntos,$sisben,$residecia_afuera,$residencia_dentro,$arriendo,$propia,$desplazado,$proyectos,$lider,$estrato)."<br>";
echo $fecha;

$registros=mysql_query("insert into pre_seleccionados (fecha,ficha_formacion,nombre_formacion,nombre,apellido,tipo_identificacion,identificacion,
		       lugar_nacimiento,fecha_nacimiento,estado_civil,direccion,telefono_fijo,celular,estrato,red_juntos,sisben,residente_fuera_municipio,
		       residente_municipio,estado_viviendaarrendada,estado_viviendapropia,desplazado,trabaje_proyecto,lider_vocero,puntaje,
		       IdFuncionario_Apoyo_Sostenimiento)
			values ('$fecha','$_REQUEST[ficha_formacion]','$_REQUEST[nombre_formacion]','$_REQUEST[nombre]','$_REQUEST[apellido]',
			'$_REQUEST[tipo_identificacion]','$_REQUEST[identificacion]','$_REQUEST[lugar_nacimiento]','$_REQUEST[fecha_nacimiento]',
			'$_REQUEST[estado_civil]','$_REQUEST[direccion]','$_REQUEST[telefono_fijo]','$_REQUEST[celular]','$_REQUEST[estrato]',
			'$red_juntos','$sisben','$residencia_afuera','$residencia_dentro','$arriendo','$propia','$desplazado','$proyectos','$lider',
			'$sumatoria','1')",$conexion) or die("Problemas en el select ".mysql_error());
			
			
echo "<br> Se a almacenado con exito";
	mysql_close($conexion);

?>
</body>
</html>