<!DOCTYPE html>
<html lang="pr-br">
  <head>
    <meta charset="utf8"/>
   
    <title>Funções Aritmeticas</title>
    
  <style> 
  h2 {
    font : 12 arial;
    color : #f00;

  }

</style>
   

  </head>
  <body>
    <h1></h1>

    <div>
    <?php

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];

    echo" <h2> Valores recebidos $v1 e $v2 </h2>";
    echo" O Valor absoluto de  $v2 é ". abs($v2);
    echo" </br> O Valor de $v1 <sup>$v2</sup> é ". pow($v1 , $v2);
    echo" </br> A raiz de  $v1 é ". sqrt($v1);
    echo" </br> O valor de  $v2 arredondado é ". round($v2); // tem tambem o ceil e o floor
    echo" </br> A parte inteira de  $v2 é ". intval($v2);
    echo" </br> O valor de $v1 em moeda é R$ ". number_format($v1,2,",", ".");









    ?>
    </div>
    
  </body>
</html>