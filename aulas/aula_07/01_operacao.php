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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores recebidos foram: $n1 e $n2 <br/> ";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo "O resultado será $r ";



   
    ?>
    </div>
    
  </body>
</html>