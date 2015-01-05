<? 	
   
  //  $query = $coll->findOne(array('login' => $_POST['login']));

	require_once 'seguridad/class.inputfilter.php';
	$filtro = new InputFilter();
	$_POST = $filtro->process($_POST);
	$usuario=$_POST['login'];
	$password=$_POST['password'];


	///////////////////////////////////////	 
include_once("config.php");
	if(newUser($usuario,$password)){
	 
	header("Refresh: 0;url=confirmar.php?mensaje=1");
	}else {
		header("Refresh: 0;url=confirmar.php?mensaje=2");
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear usuario</title>
</head>
<body>
	
</body>
</html>