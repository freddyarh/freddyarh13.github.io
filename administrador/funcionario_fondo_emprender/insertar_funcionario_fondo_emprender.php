<?php

require_once('conexion.php');
mysql_select_db($database,$conexion);
mysql_query("insert into funcionario_fondo_emprender (identificacion,nombre,apellido,telefono,correo,contraseña,idFuncionario_admin) values 
('$_REQUEST[identificacion_fondo]','$_REQUEST[nombre_fondo]','$_REQUEST[apellido_fondo]','$_REQUEST[telefono_fondo]','$_REQUEST[email_fondo]',
'$_REQUEST[contraseña_fondo]','1')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

echo "Se Agrego El Registro Satisfactoriamente en la Base de Datos";

?>