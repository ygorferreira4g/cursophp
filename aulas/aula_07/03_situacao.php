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
      $n1 = $_GET["n1"];
      $n2 = $_GET["n2"];
      $m = ($n1+$n2)/2;
      echo " A Média entre  $n1 e $n2 é $m. <br/> ";

      $sit = ($m<6)?"Reprovado" : "Aprovado <br/>";
      echo  "A Situação do Aluno é $sit ";

                //DIRETO EM UMA LINHA SÓ 
      echo  "<br/> A Situação do Aluno é: ". (($m<6)?"ReprovadoT" : "AprovadoT");

   
    ?>
    </div>
    
  </body>
</html>