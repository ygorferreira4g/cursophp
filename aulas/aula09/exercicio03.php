<!DOCTYPE html>
<html lang="pr-br">
  <head>

  <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1+$n2) / 2;
    
    echo " A Média entre $n1 e $n2 é igual a $media ";
     
    if ($media < 5) {
      $sit = "Reprovado";
      echo "Situação do Aluno: $sit";
    }
    elseif($media >=5 && $media <7){
    $sit = "Recuperação";
    echo "Situação do Aluno: $sit";
    }
    elseif($media>=7){
      $sit = "Aprovado";
      echo "Situação do Aluno: $sit";
    }    

    ?>

    <meta charset="utf8"/>
   
    <title>Curso de PHP</title>
    
  <style>
     
  </style>
   

  </head>
  <body>
    <h1></h1>

    <div>
    
    </div>
    
  </body>
</html>