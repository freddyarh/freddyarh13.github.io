<?php
require_once ('conexion.php');
mysql_select_db($database,$conexion) or die ("Problemas en la seleccion de la base de datos");
$consulta1=mysql_query("select * from seleccionados where identificacion='$_REQUEST[num_identi_consulta]'",$conexion ) or die
("Problemas en el select:".mysql_error());
$consulta2=mysql_query("select * from planes_mejoramiento where identificacion='$_REQUEST[num_identi_consulta]'",$conexion ) or die
("Problemas en el select:".mysql_error());

if ($seleccion1=mysql_fetch_array($consulta1) )
{
	if($seleccion2=mysql_fetch_array($consulta2))
	{
		
	?>
	
    Nombre: <?php echo  $seleccion1['nombre']; ?><br />
    Apellido:    <?php echo $seleccion1['apellido']; ?><br />
    Identificación:    <?php echo $seleccion1['identificacion']; ?><br />
    Formacion:     <?php echo $seleccion1['nombre_formacion']; ?><br />
    Ficha formación:     <?php echo $seleccion1['ficha_formacion']; ?><br />
    Numero de Resolucion :     <?php echo $seleccion2['resolucion']; ?><br />
    Id :   <?php echo $seleccion2['idPlanes_De_Mejoramiento']; ?><br />
    <form action="eliminar_plan.php" method="post" >
	Ingrese iD a eliminar : 
	<input type="text" name="id" size="10" required />
        <input type="submit" value="Reportar">
  </form>
    <?php
	}
	else
	{
		echo "El registro no existe en la base de datos, vuelva a intentarlo";
	}
}
else
{
    echo "El registro no existe en la base de datos, vuelva a intentarlo";
}
?>
 