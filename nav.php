
<?
include_once("config.php");

if(!loggedIn()):
header('Location: index.php');
endif; 

?>
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="principal.php">
                    <img src="img/logo.png" alt="" width="40%">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="principal.php">Favoritos</a>
                    </li>
                    <li>
                        <a href="categorias.php">Categorías</a>
                    </li>
                     <li>
                        <a href="sobremi.php">Sobre mí</a>
                    </li>
                    
                     <li>
                        <a href="#"><?php echo ("Bienvenido ".$_SESSION["login"]);?></a>
                    </li>

                    <li>
                      <a href="logout.php" ><span class="glyphicon glyphicon-off"></span>Logout</a>
                    </li>
                   
                </ul>
            </div>
             
        </div>
      
    </nav>