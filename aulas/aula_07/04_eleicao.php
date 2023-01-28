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
    $ano = $_GET["an"];
    $idade = 2023 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos.<br/>";
    $tipo = ($idade==20 xor $idade<26) ? "verdadeiro" : "falso";
    echo "$tipo";
   
    ?>
    </div>
    
  </body>
</html>