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
      $n = isset($_GET["num"]) ? $_GET["num"] : 0;
      $o = isset($_GET["oper"]) ? $_GET["oper"]: 1;

      switch($o) {
        case 1:
           $r = $n * 2;
           break;
        case 2:
            $r = $n ^ 3;
           break;
        case 3:
           $r = sqrt($n);
      }

      echo " O resultado da operação solicitada foi <span class='foco'>$r</span>";



      ?>   
      <a href="exercicio01.html">Voltar</a>  
      
    </div>
    
  </body>
</html>