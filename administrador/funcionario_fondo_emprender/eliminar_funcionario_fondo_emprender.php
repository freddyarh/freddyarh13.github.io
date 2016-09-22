<?PHP
require_once('conexion.php');
mysql_select_db($database,$conexion);
mysql_query("delete from  funcionario_fondo_emprender  where idFuncionario_Fondo_Emprender = $_REQUEST[idFuncionario_fondo]",$conexion) or die("Problemas en el select:".mysql_error());
mysql_close($conexion);

echo "Se ah Eliminado Satisfactoriamente";

?>