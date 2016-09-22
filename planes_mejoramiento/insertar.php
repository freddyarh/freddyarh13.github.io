 <?php
 $resolucion=$_REQUEST['resolucion'];
 $tipo=$_REQUEST['tipo'];
 $comentarios_plan=$_REQUEST['descripcion'];
 $identificacion=$_REQUEST['identificacion'];
  $tipo1="Plan de Mejoramiento";
require_once ('conexion.php');
mysql_select_db($database,$conexion) or die ("Problemas en la seleccion de la base de datos");
 mysql_query("insert into planes_mejoramiento(identificacion,resolucion,tipo,descripcion,idFuncionario_planes_mejoramiento, seleccionados_id_seleccionados)
	     values('$identificacion','$resolucion','$tipo','$comentarios_plan','1','3')",$conexion)or die (mysql_error());
 $fecha=date("d/m/y");
 mysql_query("insert into reportes(identificacion,fecha,tipo)
	     values('$identificacion','$fecha','$tipo1')",$conexion)or die (mysql_error());
 mysql_close($conexion);
 echo "El ingreso del aprendiz al plan de mejoramiento,y la generacion del reporte tuvo exito";
		?>