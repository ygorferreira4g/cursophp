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
      $atual = $_GET["aa"]; // essa linha vai pegar o ano da url
      echo " O ano atual é :   $atual </P> e o ano anterior é: ". --$atual ;
   
    ?>
    </div>
    
  </body>
</html>