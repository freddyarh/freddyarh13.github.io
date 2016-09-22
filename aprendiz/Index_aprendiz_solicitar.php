<!DOCTYPE HTML>
<html >
<head>
<link rel="shortcut icon" href="/APSOS/Logos/ICONO.ico">
<meta charset="utf-8">
<title>Solicitud</title>
<link href="/APSOS/estilo.css" rel="stylesheet" type="text/css">

</head>

<body>
<div id="header">
	<div id="logo">
		<img src="/APSOS/images/8.gif" width="138" height="142">
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="/APSOS/index.php"  >Inicio</a></li>
			<li><a href="Index_aprendiz_solicitar.php"  title="">Solicitar</a></li>
			<li><a href="Index_aprendiz.php" >Consultar</a></li>
			<li><a href="#" >Contacto</a></li>
		</ul>
	</div>
</div>
<hr />
<div id="page">
	<div id="bg">
		<div id="content">
			<div class="post" style="padding-top: 57px;">
				<h2 class="title">Ficha de Solicitud</h2>
				<h3 class="date"><?php echo date("d-m-Y H:i A"); ?></h3>
				<div class="entry">
                <div class="letra">
                 Fecha Solicitud :
                 <br/>
                 Ficha Formacion :
                 <br/>
                 Ingrese el nombre de la formación :
                </div>
                <div class="campos">
					       <form method="post" action="insert_solicitud.php" class="campos">
                            <input type="date" name="fecha" /><br />
                                <input type="number" name="ficha" placeholder="Codigo Formacion" /><br/>
                                Ingrese el nombre de la formación : <input type="text" name="nombre_formacion" placeholder="Nombre Formacion" required /><br />
                                Tipo De Formacion : <select name="tipo" >
                                   					<option value="0"></option>
                                                    <option value="1">Operario</option>
                                                    <option value="2">Tecnico</option>
                                                    <option value="3">Tecnologo</option>
                                                    </select><br />
                                Ingrese El Trimestre: <input type="number" name="trimestre" placeholder="Numero de Trimestre" required /><br />
                                Ingrese su Nombre: <input type="text" name="nombre" placeholder="Nombre Completo" required /><br />
                                Ingrese su Apellido:<input type="text" name="apellido" placeholder="Apellido Completos" required /><br />
                                Ingrese su tipo de identificacion: <select name="tipo_identificacion">
                                									<option value=""></option>
                                                                    <option value="T.I.">T.I.</option>
                                                                    <option value="C.C.">C.C.</option>
                                                                    </select><br />
                                Numero Identificacion: <input type="number" name="identificacion" placeholder="Identificacion" required /><br />
                                Lugar nacimiento <input type="text" name="lugar_nacimiento" placeholder="Lugar De Nacimiento:" required /> <br/>
                                Fecha de nacimiento:    Año: <input type="text" name="año" placeholder="Año" style="width:55px"required />
                                					    Mes: <input type="text" name="mes" placeholder="Mes" style="width:40px"required />
                                                        Día: <input type="text" name="dia" placeholder="Dia" style="width:35px" required /><br />
Seleccione su estado civil: Soltero: <input type="radio" name="estado_civil" value="soltero" id="estado_civil1" required />
							Casado: <input type="radio" name="estado_civil"  value="casado" id="estado_civil1"  required />
                            Unión libre: <input type="radio" name="estado_civil"  value="union_libre" id="estado_civil1" required /><br />
     Su situacion actual es: 
     						Madre o padre soltero:<input type="radio" name="situacion_actual" value="madre_padre_familia" id="situacion_actual1" required />				 							Cabeza de familia:<input type="radio" name="situacion_actual" value="cabeza_familia" id="situacion_actual1" required /><br />
      Telefono fijo:<input type="number" name="telefono_fijo" placeholder="Digite Su Telefono" required /><br />
      Celular: <input type="number" name="celular" placeholder="Celular" required /><br />
      Cuidad: <input type="text" name="ciudad" placeholder="Ciudad Actualmente" required /><br />

La vivienda es: Propia<input type="radio" name="vivienda" value="propia" id="vivienda" required />
				Arrendada:<input type="radio" name="vivienda" value="arrenda" id="vivienda" required />
                Familiar:<input type="radio" name="vivienda" value="familiar" id="vivienda" required /><br />

Estrato: <input type="radio" value="1" name="estrato" id="estrato" required>1
                <input type="radio" value="2" name="estrato" id="estrato" required>2
                <input type="radio" value="3" name="estrato" id="estrato" required>3
                <input type="radio" value="4" name="estrato" id="estrato" required>4<br/>

<input type="submit" value="Enviar" />
<input type="reset" value="Borrar"/>

</form>
</div>
				</div>
				</div>
		</div>
		<div id="sidebar">
			<div id="about-box">
				<h2>Noticias</h2>
				<p><marquee direction="up" scrolldelay="200" vspace="16" onMouseOver="this.stop();" onMouseOut="this.start();"> Quisque eu sem sed lacus tincieu, consectetuer et eget, tempus eget dolore. Blandit sed etiam dolore nullam dolore.</p></marquee>
			</div>
			<div id="about-box">
				<h2>Otros sitios</h2>
                   <table width="190" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                         <td><a href="http://www.senavirtual.edu.co/"><img src="/APSOS/images/virtuales.gif" width="100" height="60"></a></td>
                         <td><a href="http://www.sena.edu.co/portal"><img src="/APSOS/images/sena.gif" width="100" height="60"></a></td>
                   </tr>
                   <tr>
    	                 <td><a href="http://www.senasofiaplus.edu.co/"><img src="/APSOS/images/SofiaPlus.gif" width="100" height="60"></a></td>
                         <td><a href="https://www.google.com/a/misena.edu.co/ServiceLogin?service=mail&passive=true&rm=false&continue=http://mail.google.com/a/misena.edu.co/&ltmpl=default&ltmplcache=2"><img src="/APSOS/images/gmail.gif" width="100" height="67"></a></td>
                   </tr>
                   </table>
                   			</div>
			<ul>
				<li>
					<h2>Categories</h2>
					<ul>
						<li class="first"><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Sit amet nullam</a></li>
						<li><a href="#">Donec felis duis</a></li>
						<li><a href="#">Eget tempus lorem</a></li>
						<li><a href="#">Veroeros consequat</a></li>
						<li><a href="#">Nullam blandit</a></li>
						<li><a href="#">Tempus aliquam </a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>
<!-- end page -->
<hr />
<div id="footer">
	<p>(c) 2007 YourSite.com. All rights reserved. Design by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a> and <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
  <div class="content">
    
   </div>
   

</div>
 
</body>
</html>