<?php

$conexion=mysql_connect("localhost","root","")or die("problemas en la conexion");
mysql_select_db("APSOS",$conexion) or die("problemas en la seleccion de la base de datos");
mysql_query("insert into convocatoria (resolucion,tipo,descripcion,fecha_inicio,fecha_fin,fecha_abertura,fecha_cierre) values ('$_REQUEST[resolucion]','$_REQUEST[tipo]','$_REQUEST[descripcion]','$_REQUEST[fecha_inicio]','$_REQUEST[fecha_fin]','$_REQUEST[fecha_abertura]','$_REQUEST[fecha_cierre]')",$conexion) or die("problemas en el select:".mysql_error());

echo"Los datos se han guardado exitosamente.";

mysql_close($conexion);

?>
