<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario ingreso idea negocio</title>
</head>
<body>
<form method="post" action="ingreso_idea_negocio.php">
Ingrese su numero de identificación<br />
para el registro de su idea de negocio:<br />
<input type="number" name="identificacion" /><br />
Ingrese la fecha de ingreso:<br />
<input type="date" name="fecha" /><br />
Ingrese su descripcion de idea de negocio:<br />
<input type="text" name="descripcion" /><br />
Ingrese el porcentaje de progreso:<br />
El progreso es de 0%:<input type="radio" name="progreso" value="0" /><br />
El progreso es de 10%:<input type="radio" name="progreso" value="10" /><br />
El progreso es de 20%:<input type="radio" name="progreso" value="20" /><br />
El progreso es de 30%:<input type="radio" name="progreso" value="30" /><br />
El progreso es de 40%:<input type="radio" name="progreso" value="40" /><br />
El progreso es de 50%:<input type="radio" name="progreso" value="50" /><br />
El progreso es de 60%:<input type="radio" name="progreso" value="60" /><br />
El progreso es de 70%:<input type="radio" name="progreso" value="70" /><br />
El progreso es de 80%:<input type="radio" name="progreso" value="80" /><br />
El progreso es de 90%:<input type="radio" name="progreso" value="90" /><br />
El progreso es de 100%:<input type="radio" name="progreso" value="100" /><br />
Registrar:<br />
<input type="submit" name="registrar" /><br />
</form>
</body>
</html>