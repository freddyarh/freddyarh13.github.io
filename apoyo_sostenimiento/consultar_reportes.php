<html>
<head>
	<style type="text/css" title="currentStyle">
			@import "/APSOS/media/css/demo_page.css";
			@import "/APSOS/media/css/demo_table.css";
			@import "/APSOS/media/css/TableTools.css";
		</style>
		<script type="text/javascript" language="javascript" src="/APSOS/media/js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="/APSOS/media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8" src="/APSOS/media/js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="/APSOS/media/js/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				$('#example').dataTable( {
					"sDom": 'T<"clear">lfrtip'
				} );
			} );
		</script>
</head>
<?php
require_once ('conexion.php');
 mysql_select_db ($database,$conexion);
 $registros = mysql_query ("select * from reportes ",$conexion)or die("Error en la consulta".mysql_error());
 ?>
 <body id="dt_example">
		<div id="container">
			<div class="full_width big">
				Reportes 
			</div>
			
			<div id="demo">
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
	<tr>
	    <td> Id </td>
	    <td> Fecha Reporte </td>
            <td> Identificacion </td>
	    <td> Nombre </td>
	    <td> Apellido </td>
	    <td> Direccion </td>
            <td> Celular </td>
        </tr>
	</thead>
	<tfoot>
	<tr>
	      <td> Id </td>
	    <td> Fecha Reporte </td>
            <td> Identificacion </td>
	    <td> Nombre </td>
	    <td> Apellido </td>
	    <td> Direccion </td>
            <td> Celular </td>
        </tr>
	</tfoot>
	<tbody>
    <?PHP
    while($reg=mysql_fetch_array($registros))
    {
    ?>
	<tr class="odd_gradeX">
	    <td class="center"><?PHP echo $reg['idreportes'] ?> </td>
             <td class="center"><?PHP echo $reg['fecha'] ?></td>
	    <td class="center"><?PHP echo $reg['identificacion'] ?> </td>
            <td class="center"><?PHP echo $reg['nombre_formacion'] ?> </td>
            <td class="center"><?PHP echo $reg['identificacion'] ?> </td>
	    <td class="center"><?PHP echo $reg['nombre'] ?> </td>
	    <td class="center"><?PHP echo $reg['apellido'] ?></td>
	</tr>
    <?PHP
    }
    ?>
	</tbody>
    </table>
	</div></div></div>
    
</body>