<html>
<head>
<title>Convocatorias</title>
</head>
<body>

<form method="post" action="insert.php">
<div><fieldset>
<legend>CONVOCATORIAS</legend>

Ingrese Còdigo de Resolucion
<input type="number" name="resolucion" placeholder="Digite Numero de La Resolucion" size="20" required />
<br>
Seleccione Tipo de convocatoria
<select name="tipo" >
	<option value="0"> </option>
	<option value="1">ICETEX </option>
	<option value="2">KJASH</option>
</select>
<br>


Descripcion<br>
<textarea name="descripcion" rows="10" cols="30"></textarea>

<br>

Ingrese fecha de inicio<input type="date" name="fecha_inicio"  size="20" required />
<br>
Ingrese fecha de fin<input type="date" name="fecha_fin" size="20" required />
<br>
Ingrese fecha de apertura<input type="date" name="fecha_abertura" size="20" required />
<br>
Ingrese fecha de Cierre<input type="date" name="fecha_cierre" size="20" required />
<br>
<input type="submit" name="guardar" value="GUARDAR" />
</fieldset>
</div>
</form>
</body>
</html>
