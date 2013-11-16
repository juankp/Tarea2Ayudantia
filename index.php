<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="" /> 
<meta name="description" content="Presentación grupo 07 ISw" /> 
<meta name="author" content="Grupo 07" /> 
<link rel="stylesheet" type="text/css" media="all" href="style.css" /> 
<title>Presentación Grupo 07 ISw</title>
</head>

<body>
	<div id ="cuerpo">
	<header>
		
		<h1>Grupo 07</h1>
		<h2>Presentación ISw</h2>
		
	</header>
	
	
	
	
	<ul id= "menu">
	<li><a href="juanca"><img class="fotos" src="imagenes/juank.jpg" width="300" height="300" HSPACE="10" VSPACE="10"/></a></li>
	<li><a href="carla"><img class="fotos" src="imagenes/carla.jpg" width="300" height="300" HSPACE="10" VSPACE="10"/></a></li>
	<li><a href="paula"><img class="fotos" src="imagenes/paula.jpg" width="300" height="300" HSPACE="10" VSPACE="10"/></a></li>
	</ul>
	
</body>

<footer>
	<script language="JavaScript">
//store the quotations in arrays

	quotes = new Array(4);
	authors = new Array(4);
	quotes[0] = "El ordenador nació para resolver problemas que antes no existían.";
	authors[0] = "Bill Gates - cofundador de Microsoft";
	quotes[1] = "El hardware es lo que hace a una máquina rápida; el software es lo que hace que una máquina rápida se vuelva lenta.";
	authors[1] = "Craig Bruce en 1990";
	quotes[2] = "En el futuro es posible que los ordenadores no pesen más de 1,5 toneladas";
	authors[2] = "Popular mechanics, revista de mecánica, en 1949";
	quotes[3] = "Si piensas que los usuarios de tus programas son idiotas, sólo los idiotas usarán tus programas";
	authors[3] = "Linus Torvalds - 'padre' de Linux";
	quotes[4] = "En realidad no trato de destruir a Microsoft: eso será sólo un efecto colateral no intencionado";
	authors[4] = "Linus Torvalds - 'padre' de Linux";
	quotes[5] = "Si hoy fuese el último día de tu vida, ¿realmente estarías haciendo lo que estás haciendo hoy?";
	authors[5] = "Steve Jobs";

	//calculate a random index

	index = Math.floor(Math.random() * quotes.length);

	//display the quotation

	document.write("<dl>\n");
	document.write("<div align ='center' <dt><i>" + "\"" + quotes[index] + "\"\n</i></div>" );
	document.write("<div align ='center'<dd>" + "" + authors[index] + "\n </div>");
	document.write("</dl>\n");
	//done
</script>



	<ul id="logos">
		
		<li><a href="http://www.utem.cl"><img src="imagenes/utem.jpg" alt="Universidad Tecnologica Metropolitana" id="icci" class="logosfooter" width="300" height="100" HSPACE="10" VSPACE="10"/></a></li>
		<li><a href="http://www.icci.cl"><img src="imagenes/iccilogocolor.png" alt="Ingeniería Civil en Computación Mención Informática" id="icci" class="logosfooter" width="100" height="100" HSPACE="10" VSPACE="10"/></a></li>
		<li><a href="http://www.utem.cl"><img src="imagenes/utem.jpg" alt="Universidad Tecnologica Metropolitana" id="icci" class="logosfooter" width="300" height="100" HSPACE="10" VSPACE="10"/></a></li>
	</ul>
</footer>


</html>