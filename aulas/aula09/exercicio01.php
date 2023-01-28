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
      echo " Você nasceu em $a e terá $i Anos <br/>";

      if($i>=18) {
        $v = "Já pode Votar";
        $d = " Já pode Dirigir";
      }
      else {
        $v = "Não pode Votar";
        $d = "Não pode Dirigir";
      }
      echo "Com essa idade você $v e também $d";
    ?>
    </div>
    
  </body>
</html>