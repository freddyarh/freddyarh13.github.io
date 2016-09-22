<?php
require_once('conexion.php');
$usuario=mysql_select_db($database,$conexion);
$row=1;
$archivo=$_POST['archivo'];

$archivo1=fopen("$archivo","r");
while ($data = fgetcsv ($archivo1, 1000, ",")) 
{ 
$num = count ($data); 
print " <br>"; 
$row++; 
echo "$row.". $data[0]." ------------ ".$data[1]." ------------ ".$data[2].$data[3].$data[4].$data[5].$data[6].$data[7].$data[8]; 
$insertar="INSERT INTO fic (ficha_formacion,tipo_identificacion,identificacion,nombre,apellido,direccion,telefono,celular,correo) VALUES ('$data[0]','$data[1]','data[2]','data[3]','data[4]','data[5]')"; 
mysql_query($insertar); 
} 
fclose ($archivo1); 
/*
if (isset($_POST['archivo']))
    {
        $archivo=addslashes ($archivo);
        $uploadQuery="LOAD DATA LOCAL INFILE '$archivo' REPLACE INTO TABLE fic FIELDS TERMINATED BY',' LINES TERMINATED BY '\r\n' IGNORE 1 LINES";
        mysql_query($uploadQuery) or die("error en la carga del archivo:".mysql_error());
        echo " se cargo con exito el reporte";
    
    }
else
{
    echo " no se puedo cargar el archivo";
}*/
?>