<?php
require_once ('conexion.php');
mysql_select_db ($database,$conexion)or die("Problemas en la Seleccion de la Base de Datos");
$registros=mysql_query("select * from solicitudes  where identificacion='$_REQUEST[identificacion]'",$conexion) or die ("Problemas en el select:".mysql_error());
if($reg=mysql_fetch_array($registros))
{
    ?>
    <div align="center">
	<h3>Formulario Verificacion</h3>
	<form action="pre_seleccion.php" method="post">
	    Fecha Solicitud : <?php echo $reg['fecha_solicitud']; ?><br/>
	    Ficha Formacion : <input type="text" name="ficha_formacion" value="<?php echo $reg['ficha_formacion']; ?>"/>
	    <br />
	    Ficha Formacion : <input type="text" name="nombre_formacion" value="<?php echo $reg['nombre_formacion']; ?>"/>
	    <br />
	    Nombre Completo : <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>"/>
	    <br />
	    Apellidos Completos : <input type="text" name="apellido" value="<?php echo $reg['apellido']; ?>"/>
	    <br />
	    Tipo de Identificacion : <input type="text" name="tipo_identificacion" value="<?php echo $reg['tipo_identificacion']; ?>"/>
	    <br />
	    Numero Identificacion : <input type="text" name="identificacion" value="<?php echo $reg['identificacion']; ?>"/>
	    <br />
	    Lugar Nacimiento : <input type="text" name="lugar_nacimiento" value="<?php echo $reg['lugar_nacimiento']; ?>"/>
	    <br />
	    Lugar Nacimiento : <input type="text" name="fecha_nacimiento" value="<?php echo $reg['fecha_nacimiento']; ?>"/>
	    <br />
	    Estado civil : <input type="text" name="estado_civil" value="<?php echo $reg['estado_civil']; ?>"/>
	    <br />
	    Telefono Fijo : <input type="text" name="telefono_fijo" value="<?php echo $reg['telefono_fijo']; ?>"/>
	    <br />
	    Celular : <input type="text" name="celular" value="<?php echo $reg['celular']; ?>"/>
	    <br />
	    Direccion : <input type="text" name="direccion" required/>
	    <br />
	    Estrato : <input type="text" name="estrato" value="<?php echo $reg['estrato']; ?>"/>
	    <br />
	    Vivienda : <input type="text" name="vivienda" value="<?php echo $reg['vivienda']; ?>"/>
	    <h4>Determine los campos que se aprueban y que no se aprueban:</h4>
	    Pertenece a red juntos:
	    SI<input type="radio" name="red_juntos" value="15" id="red_juntos" required/>
	    NO<input type="radio" name="red_juntos" value="0" id="red_juntos" required />
	    <br />
	    SISBEN 1 o 2 o 3:
	    SI<input type="radio" name="sisben" value="10" id="sisben" required />
	    NO<input type="radio" name="sisben" value="0" id="sisben" required />
	    <br />
	    Aprendiz que reside fuera del municipio a mas de 30 kilometros <br />
	    y que reside sin s familia en el municipio de ubicacion del centro <br />
	    de formacion: SI<input type="radio" name="residencia_afuera" value="10" id="residencia_afuera" required />
	    NO<input type="radio" name="residencia_afuera" value="0" id="residencia_afuera" required />
	    <br />
	    Aprendiz que recide en el municipio donde se encuentra el centro de <br />
	    formacion y vive con su familia:
	    SI<input type="radio" name="residencia_dentro" value="5" id="residencia_dentro" required />
	    NO<input type="radio" name="residencia_dentro" value="0" id="residencia_dentro" required />
	    <br />
	    Aprendiz padre o madre de familia y vive en vivienda arrendada:
	    SI<input type="radio" name="arriendo" value="10" id="arrienda" required/>
	    NO<input type="radio" name="arriendo" value="0" id="arrienda" required />
	    <br />
	    Aprendiz padre o madre de familia y vive en vivienda propia:
	    SI<input type="radio" name="propia" value="5" id="propia" required/>
	    NO<input type="radio" name="propia" value="0" id="propia" required/>
	    <br />
	    Aprendiz que evidenicie si calidad de desplazado:
	    SI<input type="radio" name="desplazado" value="10" id="dezplazado" required />
	    NO<input type="radio" name="desplazado" value="0" id="dezplazado" required />
	    <br />
	    Aprendiz que trabaje en la formulacion de proyectos:
	    SI<input type="radio" name="proyectos" value="10" id="proyectos" required />
	    NO<input type="radio" name="proyectos" value="0" id="proyectos" required />
	    <br />
	    Aprendiz lider o vocero de su programa de formacion:
	    SI<input type="radio" name="lider" value="10" id="lider" required/>
	    NO<input type="radio" name="lider" value="0" id="lider" required/>
	    <br />
	    Aprendiz de estrato 1 y 2:
	    SI<input type="radio" name="estrato" value="5" id="estrato" required/>
	    NO<input type="radio" name="estrato" value="0" id="estrato" required/>
	    <br />
	    Comprobar puntaje:<br />
	    <input type="submit" value="Guardar " />
	    <input type="reset" value="borrar" />
	</form>
    </div>
    <?php
    }
    else
    {
	echo "No Existe Ningun Aprendiz con Apoyo de Sostenimiento";
    }
?>