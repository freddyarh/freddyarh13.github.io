<?php
require_once ('conexion.php');
mysql_select_db($database,$conexion) or die ("Problemas en la seleccion de la base de datos");
$consulta=mysql_query("select * from planes_mejoramiento where idPlanes_De_Mejoramiento='$_REQUEST[id]'",$conexion ) or die("Problemas en el select:".mysql_error());
if ($seleccion=mysql_fetch_array($consulta) )
{
    mysql_query("delete from planes_mejoramiento where idPlanes_De_Mejoramiento='$_REQUEST[id]'",$conexion ) or die("Problemas en el select:".mysql_error());
    echo "A sido eliminado el plan de mejormaiento con exito";
}
else
{
    echo "El registro no existe en la base de datos, vuelva a intentarlo";
}
?>