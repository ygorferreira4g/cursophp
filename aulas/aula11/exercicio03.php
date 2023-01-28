<!DOCTYPE html>
<html lang="pr-br">
  <head>

  <?php
    

    ?>

    <meta charset="utf8"/>
   
    <title>Curso de PHP</title>
    
  <style>
     
  </style>
   

  </head>
  <body>
    

    <div>
    <?php
    $i = $_GET["ini"];
    $f = $_GET["fim"];
    $in = $_GET["esc"];

    if ( $i < $f ) {
    
      while ($i<=$f) {
        echo $i . " ";
         $i += $in;        
      }
    }  

  else {    
      while ( $i >= $f)  {
        echo $i . " ";
         $i -= $in;        
      }
    };
  
          
    ?>
    <a href="exercicio03.html">Voltar</a>
    
    </div>
    
  </body>
</html>