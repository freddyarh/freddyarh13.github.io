<?php

require_once('conexion.php');
mysql_select_db($database,$conexion);$consulta4 = mysql_query(" select * from funcionario_apoyo_sostenimiento where identificacion='$_REQUEST[identificacion_apoyo]'",$conexion) or die("Problemas en el select:".mysql_error());
mysql_query("insert into funcionario_apoyo_sostenimiento (identificacion,nombre,apellido,telefono,correo,contrase�a,idFuncionario_admin) values 
('$_REQUEST[identificacion_apoyo]','$_REQUEST[nombre_apoyo]','$_REQUEST[apellido_apoyo]','$_REQUEST[telefono_apoyo]','$_REQUEST[correo_apoyo]',
'$_REQUEST[contrase�a_apoyo]','1')",$conexion) or die("Problemas en el select".mysql_error());
mysql_close($conexion);

echo "Se han Insertado Los Registros";


?>