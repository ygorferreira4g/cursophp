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
      $valor = $_GET["v"];
      $rq = sqrt($valor);
      echo "A raiz de $valor é igual a " . number_format($rq,2);
   
    ?>
    <a href="01exercicio.html"> Voltar </a>
    </div>
    
  </body>
</html>