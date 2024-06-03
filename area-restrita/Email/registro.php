<?php
include('../../dao/conexao.php');
    if($_POST) {
      $idEmail = $_POST['idEmail'];
      $querySelect = "SELECT * FROM tab_email  WHERE idEmail = $idEmail";
      $resultado = $conexao->query($querySelect);
      $emaill = $resultado->fetch();
      
      $idEmail = $emaill["idEmail"];
      $email = $emaill["email"];
      $nome = $emaill["nome"];
      $assunto = $emaill["assunto"];
      $mensagem = $emaill["mensagem"];
    }else{
      $idEmail = "";
      $email = "";
      $nome = "";
      $assunto = "";
      $mensagem = "";
    }

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buy cars - Email</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="../../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../img/logo/logo3.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <!-- cabeçalho -->
  <?php 
      include('../../Componentes/cabecalho.php');
    ?>
  <div class="container-fluid " style="height: 90%;">
    <div class="row h-100">
 <!-- menu -->       
  <?php 
      include('../../Componentes/menu.php');
    ?>
      <div class="col-md-10  p-4">
        <div class="card">
          <form method="post" action="salvar.php">
            <div class="card-header">
    
              <strong>INFORMAÇÕES DO EMAIL</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class=" col">
                  <label for="recipient-name" class="col-form-label">Email:</label>
                  
                  <input type="text" class="form-control" name="email" value="<?=$email?>" ></input>
                 
                </div>
                <div class="col mb-3">
                  <label for="recipient-name" class="col-form-label">Assunto:</label>
                  <select class="form-select" name="assunto">
                    <option value="Documento não validado" <?=$assunto=='Documento não validado'?'selected':''?>>Documento não validado</option>
                    <option value="Veículo em péssimas condições" <?=$assunto=='Veículo em péssimas condições'?'selected':''?>>Veículo em péssimas condições</option>
                    <option value="Falta de peça" <?=$assunto=='Falta de peça'?'selected':''?>>Falta de peça</option>
                    <option value="Entrega fora do prazo" <?=$assunto=='Entrega fora do prazo'?'selected':''?>>Entrega fora do prazo</option>
                  </select>
                </div>
              </div>
              <div class="col mb-3">
                <label for="recipient-name" class="col-form-label">Nome do usuário:</label>
                <input type="text" class="form-control" name="nome" value="<?=$nome?>" ></input>
              </div>
              <div class="col mb-3">
              <label for="recipient-name" class="col-form-label">Mensagem:</label>
              <input type="text" class="form-control" name="mensagem" value="<?=$mensagem?>">
              </div>

            </div>
            <div class=" text-end p-3">
              <input type="hidden" id="idEmail" name="idEmail" value="<?=$idEmail?>">
              <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
              <button type="submit" class=" btn btn-success"> Salvar </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src='../../js/personalizar.js'></script>
</body>

</html>