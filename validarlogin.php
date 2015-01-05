<?
  
 require_once 'seguridad/class.inputfilter.php';
$filtro = new InputFilter();
$usuario = $filtro->process($_POST['login']); 
$password=$filtro->process($_POST['password']);


 include_once("config.php");
if(!empty($_POST))
  if(!($row = checkPass($usuario, $password))){
   header("Refresh: 0;url=index.php?mensaje=1");
   }else 
  {
  cleanMemberSession($_POST["login"], $_POST["password"]);
  header("Location: principal.php");
}
