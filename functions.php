<?
 
function registros(){
    
    global $regs;
    //$busqueda = array('usuario.nombre' => 'hunterfox');
    $busqueda = array();
 
    $regs->find($busqueda,array("usuario.login","usuario.password"));
    $array = iterator_to_array($regs);
 
    foreach($array as $r => $elem){
        $tabla .= '
'.$r.''.$elem['usuario']['login'].''.$elem['usuario']['password'].'
';
    }
    return $tabla;
}
function newUser($login, $password)
{
	global $coll;
	$coll->insert(array('login' => $login, 'password' => md5($password)));
	return true;
}

function checkPass($login, $password) 
{
	global $coll;
	$res = $coll->findOne(array('login' => $login, 'password' => md5($password)));
	if($res):
	return true;
	endif;
}

function cleanMemberSession($login, $password)
{

	$_SESSION["login"]=$login;
	$_SESSION["password"]=$password;
	$_SESSION["loggedIn"]=true;
}

function flushMemberSession()
{
	unset($_SESSION["login"]);
	unset($_SESSION["password"]);
	unset($_SESSION["loggedIn"]);
	session_destroy();
	return true;
}

function loggedIn()
{
	if($_SESSION['loggedIn']):
	  return true;
	else:
	  return false;
	endif;
}

  

?>
