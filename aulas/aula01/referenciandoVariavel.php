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
    $a = 3;
    $b = &$a;
    $b+=5;

    echo " valor de A: " . $a;
    
    echo " </p> valor de B: " . $b;


   
    ?>
    </div>
    
  </body>
</html>