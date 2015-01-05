<?
include_once("config.php");

if(!loggedIn()):
header('Location: index.php');
endif;

print("Bienvenido <b>".$_SESSION["login"]."</b><br>\n");
 
print("<a href=\"logout.php"."\">Salir</a>"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <title>Esneyder-Desarrollo MongoDB</title>
  <link rel="stylesheet" href="css/pragma.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="row cols">
<div class="xs-3 ms-4">
	<div class="panel">
		<header>Triángulo</header>
		<div class="body">
			<div class="miobjeto"></div>
			<div class="triangulo_lateral"></div>
		</div>
		<div class="footer">
		 Edwin esneyder
		</div>
	</div>


</div>	

<div class="xs-3 ms-4">
	<div class="panel">
		<header>Triángulo</header>
		<div class="body">
			<div class="miobjeto1"></div>
			<div class="triangulo_fijo"></div>
		</div>
		<div class="footer">
			Edwin esneyder
		</div>
	</div>

	
</div>

</div>
</body>
</html>
