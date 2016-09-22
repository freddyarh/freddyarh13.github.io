<?PHP
require_once('conexion.php');
mysql_select_db($database,$conexion);
mysql_query("delete from funcionario_monitorias  where idFuncionario_Monitorias = $_REQUEST[idFuncionario_Monitorias]",$conexion) or die("Problemas en el select:".mysql_error());
mysql_close($conexion);

echo "Se ah Eliminado Satisfactoriamente";

?>