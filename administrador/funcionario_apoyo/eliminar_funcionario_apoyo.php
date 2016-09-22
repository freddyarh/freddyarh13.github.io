<?PHP
require_once('conexion.php');
mysql_select_db($database,$conexion);$consulta4 = mysql_query(" select * from funcionario_apoyo_sostenimiento where identificacion='$_REQUEST[identificacion_apoyo]'",$conexion) or die("Problemas en el select:".mysql_error());
mysql_query("delete from funcionario_apoyo_sostenimiento  where idFuncionario_Apoyo_Sostenimiento = $_REQUEST[idFuncionario_apoyo]",$conexion) or die("Problemas en el select:".mysql_error());
mysql_close($conexion);

echo "Se ah Eliminado Satisfactoriamente";

?>