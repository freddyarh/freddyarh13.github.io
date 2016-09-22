<?php
require_once('conexion.php');
mysql_select_db($database,$conexion);

$consulta1 = mysql_query(" select * from funcionario_fondo_emprender where identificacion='$_REQUEST[identificacion_fondo]'",$conexion) or die("Problemas en el select:".mysql_error());

if($seleccion1= mysql_fetch_array($consulta1))
{
?>

ID:
<?php echo  $seleccion1['idFuncionario_Fondo_Emprender']; ?><br /><br>

IDENTIFICACION:
<?php echo  $seleccion1['identificacion']; ?><br /><br>

Nombre:
<?php echo  $seleccion1['nombre']; ?><br />

APELLIDO:
<?php echo  $seleccion1['apellido']; ?><br />

TELEFONO:
<?php echo  $seleccion1['telefono']; ?><br />

CORREO:
<?php echo  $seleccion1['correo']; ?><br />

CONTRASEÑA:
<?php echo  $seleccion1['contraseña']; ?><br />
<br>
<br>


<form method="POST" action="eliminar_funcionario_fondo_emprender.php">
Si Desea Eliminar De Este Usuario o De Otro confirme ID:<br>
<input type="number" name="idFuncionario_fondo" size="5" placeholder="Indetificacion" required />

<input type="submit" value="BORRAR" />

</form>

<?php
}

else
{
	echo "El registro no existe en la base de datos, vuelva a intentarlo";
}
?>