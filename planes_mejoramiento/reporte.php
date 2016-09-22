<?php
require_once ('conexion.php');
mysql_select_db($database,$conexion) or die ("Problemas en la seleccion de la base de datos");
$consultar=mysql_query("select * from seleccionados where identificacion='$_REQUEST[num_identi_consulta]'",$conexion ) or die("Problemas en el select:".mysql_error());
if ($seleccion=mysql_fetch_array($consultar))
{
$identificacion=$seleccion['identificacion'];
	?>
    Nombre:
    <?php echo  $seleccion['nombre']; ?><br />
    Apellido:
    <?php echo $seleccion['apellido']; ?>
    Identificación:
    <?php echo $seleccion['identificacion']; ?><br />
    Formacion:
    <?php echo $seleccion['nombre_formacion']; ?><br />
    Ficha formación:
    <?php echo $seleccion['ficha_formacion']; ?><br />
	<form action="insertar.php" method="post" >
	Numero Resolucion : 
  <input type="number" name="resolucion" required />
  <br/>
  Tipo de Plan : 
  <select name="tipo" >
  <option> </option>
  <option> Academico</option>
  <option>Disiplinario</option>
  </select>
  <br>
  Ingrese una pequeña descripcion :
  <br>
  <textarea name="descripcion" rows="3" placeholder="ingrese una pequeña descripcion del plan de mejoramiento"></textarea>
  <br>
   <input type="hidden" name="identificacion" value="<?php echo $seleccion['identificacion']; ?>" />
  <input type="submit" value="Reportar">
  <input type="reset" value="Borrar">
  </form>
  <?php 
	}
	else
	{
		echo "El registro ingresado no existe";
		}
		?>
 