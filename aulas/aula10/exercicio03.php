<!DOCTYPE html>
<html lang="pr-br">
  <head>

  <?php
    echo "Você mora na ";
    $estado = isset($_GET["est"]) ? $_GET["est"] : 0;
    switch($estado) {      
      case "acre":
        echo "Região Norte";
        break;
      case "alagoas":
        echo "Região Nordeste";
          break;
      case "amapa":
        echo "Região Sudeste";
        break;
      case "amazonas":
        echo "Região Norte";
          break;
      case "bahia":
        echo "Região Nordeste";
          break;
      case "ceara":
        echo "Região Nordeste";
          break;
      case "distritofederal":
        echo "Região Centro Oeste";
        break;
      case "espiritosanto":
        echo "Região Sudeste";
          break;
      case "goias":
        echo "Região Centro Oeste";
          break;
      case "maranhao":
        echo "Região Nordeste";
          break;
      case "matogrosso":
        echo "Região Centro Oeste";
          break;
      case "matogrossodosul":
          echo "Região Centro Oeste";
            break;   
      case "minasgerais":
        echo "Região Sudeste";
          break;
      case "para":
        echo "Região Norte";
          break;
      case "paraiba":
        echo "Região Nordeste";
          break;
      case "parana":
        echo "Região Sul";
          
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

    
    <br/>
    <a href="exercicio03.html">Voltar</a>
    
    </div>
    
  </body>
</html>