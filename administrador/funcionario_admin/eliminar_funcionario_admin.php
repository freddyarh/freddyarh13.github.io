<?PHP
require_once('conexion.php');
$usuario=mysql_select_db($database,$conexion);
mysql_query("delete from funcionario_admin  where idFuncionario_admin = $_REQUEST[idFuncionario_admin]",$conexion) or die("Problemas en el select:".mysql_error());
mysql_close($conexion);

echo "Se ah Eliminado Satisfactoriamente";

?>