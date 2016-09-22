<?php
require_once('conexion.php');
mysql_select_db($database,$conexion) or die("Problemas en la seleccion de la Base de Datos");
mysql_query("insert into funcionario_admin (identificacion,nombre,apellido,telefono,correo,contraseña) values 
('$_REQUEST[identificacion_administrador]','$_REQUEST[nombre_administrador]','$_REQUEST[apellido_administrador]','$_REQUEST[telefono_administrador]','$_REQUEST[email_administrador]','$_REQUEST[contraseña_administrador]')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

echo "Se Agrego El Registro Satisfactoriamente en la Base de Datos";

?>