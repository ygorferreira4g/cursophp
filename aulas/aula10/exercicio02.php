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
    $d = isset($_GET["ds"]) ? $_GET["ds"] : 0; 
    switch($d)     {
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
        echo "Levanta e vai estudar!";
        break;
      case 7:
      case 8:
        echo "Dia de descanso"  ;
        break;
      default:
        echo "Dia da semana invalido";

    }

    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
    </div>
    
  </body>
</html>