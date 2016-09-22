<?PHP
require_once('conexion.php');
mysql_select_db($database,$conexion);
mysql_query("delete from funcionario_planes_mejoramiento  where idFuncionario_Planes_De_Mejoramiento = $_REQUEST[idFuncionario_planes]",$conexion) or die("Problemas en el select:".mysql_error());
mysql_close($conexion);

echo "Se ah Eliminado Satisfactoriamente";

?>