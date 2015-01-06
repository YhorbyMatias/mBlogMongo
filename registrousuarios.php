 
 
 
           <?php include_once("reporteuser.php");
          $user=$usuarios->find();
          $total=$usuarios->count();
     
        echo "Total registros".$total."<br>";

        foreach ($user as $obj) { 
             echo $obj['_id'] ."<br/>";
            echo "<strong>Usuario:</strong> " . $obj['login'] . "<br/>"; 
            echo "<strong>Password:</strong> " . $obj['password'] . "<br/>";
             echo "<br/>"; }

          ?>
        