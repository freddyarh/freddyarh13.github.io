<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ingreso a la base de datos</title>
</head>
<body>
<?php
		$identificacion=$_REQUEST['identificacion'];
		$fecha=$_REQUEST['fecha'];
		$decripcion=$_REQUEST['decripcion'];
		$progreso=$_REQUEST['progreso'];
		$conexion=mysql_connect("localhost","root","") or die ("Problemas con la conexion");
		mysql_select_db("mydb",$conexion) or die ("Problema en la seleccion de la base de datos");
		mysql_query("insert into seguimiento(identificacion,fecha,descripcion,progreso) 
		values(\"$identificacion\"$fecha\",\"$descripcion\",\"$progreso\)",$conexion)or die (mysql_error());
		mysql_close($conexion);
		echo "El ingreso de la idea de negocio, tuvo exito";
		?>
  <input type="hidden" value="" />
</body>
</html>