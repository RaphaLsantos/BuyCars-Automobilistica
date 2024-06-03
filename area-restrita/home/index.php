<?php
   include('../../dao/conexao.php');
    $querySelect = "SELECT * FROM tab_galeria";
    $resultado = $conexao->query($querySelect);
    $carros = $resultado->fetchALL();
    $n_carros = count($carros);

    $querySelect = "SELECT * FROM tab_user";
    $resultado = $conexao->query($querySelect);
    $usuarios = $resultado->fetchALL();
    $n_usuarios = count($usuarios); 
    
    $querySelect = "SELECT * FROM tab_depoimento WHERE tipo = 'Reclamação'";
    $resultado = $conexao->query($querySelect);
    $reclamacoes = $resultado->fetchALL();
    $n_reclamacoes = count($reclamacoes);

    $querySelect = "SELECT * FROM tab_depoimento WHERE tipo = 'Elogio'";
    $resultado = $conexao->query($querySelect);
    $elogios = $resultado->fetchALL();
    $n_elogios = count($elogios);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="../../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Document</title>
</head>


<body style="justify-content: center; align-items: center; height: 100vh ">
 <!-- cabeçalho -->
  <?php
  include ("../../Componentes/cabecalho.php")
  ?>
  <div class="container-fluid " style="height: 90%;">
    <div class="row h-100">
 <!-- depoimento -->
 <?php
  include ("../../Componentes/menu.php")
  ?>
    
    <div  class="col-md-10  p-4">
        <div class="qntjoia">
            <h3 class="count"><?=$n_carros?></h3>
            <h4>Carros cadastrados</h4>
        </div>
        <div class="qntusuarios">
            <h3 class="count"><?=$n_usuarios?></h3>
            <h4>Usuários cadastrados</h4>
        </div>
        <div class="qntdepoimentoRecla">
        <h3 class="count"><?=$n_reclamacoes?></h3>
            <h4>Número de Reclamações</h4>
        </div>
        <div class="qntdepoimentoElo">
        <h3 class="count"><?=$n_elogios?></h3>
            <h4>Número de Elogios</h4>
        </div>
    </div>

  <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src='../../js/personalizar.js'></script>

</body>

</html>