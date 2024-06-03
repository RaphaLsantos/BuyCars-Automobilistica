
<?php
include('../../dao/conexao.php');
    if($_POST) {
      $idUser = $_POST['idUser'];
      $querySelect = "SELECT * FROM tab_user  WHERE idUser = $idUser";
      $resultado = $conexao->query($querySelect);
      $usuario = $resultado->fetch();
      
      $idUser = $usuario["idUser"];
      $nomeUser = $usuario["nomeUser"];
      $cpf = $usuario["cpf"];
      $email = $usuario["email"];
      $rg = $usuario["rg"];
      $senha = $usuario["senha"];
      $foto_usuario = $usuario["foto_usuario"];
    }else{
      $idUser = "";
      $nomeUser = "";
      $cpf = "";
      $email = "";
      $rg = "";
      $senha = "";
      $foto_usuario = "";
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
              <strong>INFORMAÇÕES DO USUÀRIO</strong>
            </div>
            <div class="card-body row " style="align-items: center; justify-content: center;">
                <div class="col-md-2   text-center">
                  <div class="bg-white rounded">
                    <img id="preview" src="../../fotos/usuarios/<?=$foto_usuario!="" ? $foto_usuario : 'titinga.jpg';?>"
                      alt="..." class=" w-75">
                  </div>
                </div>
            <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="recipient-name" class="col-form-label">Nome:</label>
                    <input type="text" class="form-control" name="nomeUser" maxlength="50" value="<?=$nomeUser?>">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">CPF:</label>
                    <input oninput="maskCPF(this)" type="text" class="form-control" name="cpf" maxLength="11"
                      value="<?=$cpf?>">
                  </div>
                  <div class="col-md-9">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" maxlength="50" value="<?=$email?>">
                  </div>
                </div>
                <div class="row ">
                <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">RG:</label>
                    <input oninput="maskRG(this)" type="text" class="form-control" name="rg" maxLength="9"
                      value="<?=$rg?>">
                  </div>
                  <div class="col-md-3">
                    <label for="recipient-name" class="col-form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" maxlength="8" value="<?=$senha?>">
                  </div>
                </div>
                
                <div class="col-md-3 mt-5">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                </div>
                <input type="hidden" id="foto_usuario" name="foto_usuario" value="<?=$foto_usuario?>">

              </div>
              <div class=" text-end p-3">
                <input type="hidden" id="idUser" name="idUser"  value="<?=$idUser?>">
                <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                <input type="submit" class=" btn btn-success" value="Salvar">
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