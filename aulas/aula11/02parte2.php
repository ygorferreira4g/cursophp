<!DOCTYPE html>
<html lang="pr-br">
  <head>
    <meta charset="utf8"/>
   
    <title>Curso de PHP</title>
    
  <style> </style>
   

  </head>
  <body>
    <h1></h1>

    <div>
    <?php

    $i = 1;
    while ($i<=5) {
      $v ="num".$i;
      $url = "v".$i;
      $$v = isset ($_GET[$url]) ? $_GET[$url] : 0;
      $i++;
    }

    echo "$num1 $num2 $num3 $num4 $num5";

          
    ?>
    </div>
    
  </body>
</html>