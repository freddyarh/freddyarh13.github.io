<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>consulta fondo emprender</title>
</head>
<body>
<form method="post" action="">
Ingrese la identificacion del aprendiz para su<br />
ingreso de idea de negocio:<br />
<input type="number" name="identificacion" /><br />
Consultar:<br />
<input type="submit" name="consultar" /><br />
</form>
<?php
$conexion=mysql_connect("localhost","root","1234")or die ("Problemas en la conexion");
mysql_select_db("apsos",$conexion) or die ("Problemas en la seleccion de la base de datos");
$consultar=mysql_query("select * from seguimiento where identificacion='$_REQUEST[identificacion]'",$conexion ) or die("Problemas en el select:".mysql_error());
if ($seguimiento=mysql_fetch_array($consultar))
{
	?>
    <form method="post" action="#">
    Indenficación:<br />
    <?php echo  $seguimiento['identificacion']; ?><br />
    Feccha:<br />
    <?php echo $seguimiento['fecha']; ?>
    Descripción:<br />
    <?php echo $seguimiento['descripcion']; ?><br />
    Progreso:<br />
    <?php echo $seguimiento['progreso']; ?><br />
    </form>
	<?php 
	}
	else
	{
		echo "El registro ingresado no existe";
		}
		?>
 
?>


</body>
</html>