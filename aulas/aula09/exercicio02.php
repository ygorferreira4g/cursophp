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
      $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
      $i = date("Y") - $a;
      echo " Você nasceu em $a e tem $i Anos <br/>";

      if ($i <16 ){
        $tipoVoto = "Não Vota";
      }

       elseif (($i >= 16 && $i < 18) || $i >65) {
         $tipoVoto = "Voto Opcional";
        }
        else {
          $tipoVoto = "Voto Obrigatório";
        }
      

      echo "Para essa idade $tipoVoto";
    ?>
    </div>
    
  </body>
</html>