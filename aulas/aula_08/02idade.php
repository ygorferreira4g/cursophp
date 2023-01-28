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
    $nome = isset ($_GET["nome"]) ? $_GET["nome"] : $_GET["Nome Não informado"] ;
    $ano = isset ($_GET["ano"]) ? $_GET["ano"] : $_GET[" Ano não informado"];
    $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : $_GET["Sexo Não informado"];
    $idade = date("Y") - $ano;
    echo "$nome é $sexo e Tem $idade Anos. "      
    ?>
    <a href="02exercicio.html"> Voltar </a>
       
  </body>
</html>