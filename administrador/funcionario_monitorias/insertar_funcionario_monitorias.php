<?php

require_once('conexion.php');
mysql_select_db($database,$conexion);
mysql_query("insert into funcionario_monitorias (identificacion,nombre,apellido,telefono,correo,contraseña,idFuncionario_admin) values 
('$_REQUEST[identificacion_moni]','$_REQUEST[nombre_moni]','$_REQUEST[apellido_moni]','$_REQUEST[telefono_moni]','$_REQUEST[correo_moni]',
'$_REQUEST[contraseña_moni]','1')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

echo "Se han Insertado Los Registros";


?>