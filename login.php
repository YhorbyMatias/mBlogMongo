<?
include_once("config.php");
if(loggedIn()):
header('Location: index.php');
endif;
if(isset($_POST["submit"])):
  if(!($row = checkPass($_POST["login"], $_POST["password"]))):
    echo "<p>Incorrect login/password, try again</p>";
    exit;
  endif;
  cleanMemberSession($_POST["login"], $_POST["password"]);
  header("Location: index.php");
endif;
?>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icon.ico" />
  <title>Esneyder-Desarrollo MongoDB</title>
   
  
</head>
<body>
 
	<div class="xs-11 sm-8 center contenido">
<div class="panel shadow styled tip ">
	<h2 class="header">Formulario de ingreso | Programación MongoDB</h2>
	<div class="body">
		 
		<form method="post"action="<?=$_SERVER["PHP_SELF"]; ?>" class="data-pragma-validate">
			<div class="row">
				<label for="Password" class="xs-4 text-right">Usuario:</label>
			   <input name="login" value="<?= isset($_POST["login"]) ? $_POST["login"] : "" ; ?>" type="text" class="xs-4 " required>
			   <div class="help xs-8 xs-offset-4"></div>
			</div>
			<div class="row">
				<label for="Password" class="xs-4 text-right">Password:</label>
				<input name="password" type="password" id="password" type="password" class="xs-4" required>
				  <div class="help xs-8 xs-offset-4"></div>
			</div>
			<div class="row">
		      <div class="xs-8 xs-offset-4">
			       <button type="submit" name="submit"  class="button danger gradient">Login</button>
			        <button type="submit" class="button secondary gradient" >Registrarme</button>
		       </div>
	        </div>
			
		</form>

		</div>
	<div class="footer">Edwin Esneyder Alvarez</div>
</body>
</html>
