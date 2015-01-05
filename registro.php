<html lang="es">
<head>
<meta charset="UTF-8">
  <title>Esneyder -Desarrollo MongoDB</title>
    <?php 
      require_once("head.php");
    ?>
</head>
<body>
 
 

<div class="container">
 <h1 class="text-center login-title">Bienvenido a mBlogMongo</h1>
    <h2>Crearme una cuenta</h2>
    <p class="text-info">Cuenta de acceso a mBlogMongo</p>
    <form class="form-horizontal" action="crearuser.php" method="post">
       

        <div class="form-group">
          <label class="col-sm-2 control-label" for="inputusuario">Usuario</label>
          <div class="col-sm-3">
               <input type="text" name="login" id="login" type="text" required class="form-control"     name="login" 
                 maxlength="100"
              placeholder="Nombre usuario"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="inputusuario">Password</label>
          <div class="col-sm-3">
               <input  type="password" required name="password" id="password" class="form-control" 
                                 placeholder="Su contraseña para iniciar sesión"
              />
          </div>
        </div>

         
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-large btn-primary">
              <i class="glyphicon glyphicon-saved"></i> Crear usuario</button>
              <a href="index.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-user"></i>Login</a>
          </div>
        </div>
    </form>
 <footer class="row ">
    <div class="panel-footer text-center">
        <p>Desarrollado por:  </p>
        <div class="fotimg">
           <h5>Edwin Esneyder</h5>
        </div>
       </div>
       </footer>
</body>

</html>
