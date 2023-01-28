<!DOCTYPE html>
<html lang="pr-br">
  <head>

  <?php
  $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
  $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
  $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";

    
  ?>
    <meta charset="utf8"/>
   
    <title>Curso de PHP</title>
    
  <style> 
    span.texto {
      font-size: <?php echo $tam; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
   

  </head>
  <body>
    <h1></h1>

    <div>
    <?php
    echo "<span class='texto'>$txt</span>";
    
    ?>
   
    </div>
    
  </body>
</html>