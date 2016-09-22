<?php
require_once('conexion.php');
mysql_select_db($database,$conexion);
mysql_query("insert into funcionario_planes_mejoramiento (identificacion,nombre,apellido,telefono,correo,contraseña,idFuncionario_admin) values 
('$_REQUEST[identificacion_planes]','$_REQUEST[nombre_planes]','$_REQUEST[apellido_planes]','$_REQUEST[telefono_planes]','$_REQUEST[correo_planes]',
'$_REQUEST[contraseña_planes]','1')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

echo "Se han Insertado Los Registros";


?>