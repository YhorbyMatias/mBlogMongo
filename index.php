<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>mBlogMongo</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
 
<div class="container">
   
    <div class="row">

        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Bienvenido a mBlogMongo</h1>
            <div class="account-wall">
             <?php
            error_reporting(0);
            $mensaje = $_GET["mensaje"];
            if ($mensaje == 1) {
                echo "<p class='alert alert-danger' role='alert'><i class='icon-trash icon-white'></i> Datos de acceso incorrectos</p><br><br>";
            }
             
            ?>
                <img class="profile-img" src="img/esneyder.jpg" width="4"  alt="">
                <form class="form-signin" action="validarlogin.php" method="post">
                <input name="login" value="<?= isset($_POST["login"]) ? $_POST["login"] : "" ; ?>" type="text" class="form-control" placeholder="Usuario"  required autofocus>
                <input name="password"  id="password" type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Necesito ayuda? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="registro.php" class="text-center new-account">Crear cuenta </a>
        </div>
    </div>

</div>
<?
### RootNetworking; Código NO vulnerable a XSS/Html Injection/Seguridad ALTA
$overnet = htmlspecialchars(addslashes(stripslashes(strip_tags(trim($_POST['login'])))));
echo $overnet;
?>
 
 
 
</body>
</html>