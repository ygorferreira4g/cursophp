<!DOCTYPE html>
<html lang="pr-br">
  <head>
    <meta charset="utf8"/>
   
    <title>Curso em Video</title>
    
  <style> </style>
   

  </head>
  <body>
    <h1></h1>

    <div>
    <?php
    $preco = $_GET["p"];
    echo "O preco do produto é R$ $preco " .number_format($preco,2);
    $preco += ($preco*10/100);
    echo "</br> O novo preco com 10% de aumento sera  é R$ ". number_format($preco,2);

   
    ?>
    </div>
    
  </body>
</html>