<?php
  include('../../dao/conexao.php');
  $querySelect = "SELECT * FROM tab_user";
  $resultado = $conexao->query($querySelect);
  $User = $resultado->fetchAll();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BuyCars - User</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
 <!-- depoimento -->
 <?php
   include('../../Componentes/menu.php');   
 ?>
      <div class="col-md-10  p-4">
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Lista de User
          </div>
          <div class="col text-end ">
            <a class="btn btn-success px-3" role="button" aria-disabled="true" href="registro.php"><i
                class="fas fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class=" row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="col-md-1">IdUser</th>
                <th class="col-md-2">Nome usuário</th>
                <th class="col-md-2">CPF</th>
                <th class="col-md-2">Email</th>
                <th class="text-center col-md-1">Alterar</th>
                <th class="text-center col-md-1">Excluir</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($User as $user) {?>
            <tr>
                <td><?=$user[0]?></td>
                <td><?=$user[1]?></td>
                <td><?=$user[2]?></td>
                <td><?=$user[4]?></td>
                <td class="text-center">
                  <form action="registro.php" method="POST">
                    <input type="hidden" class="form-control" id="idUser" name="idUser"
                      value="<?=$user[0]?>">
                    <button type="submit" class="dropdown-item"><i class="fas fa-edit fa-lg text-secondary"></i>
                    </button>
                  </form>
                </td>

                <td class="text-center">
                  <a class="dropdown-item" onclick="modalRemover(<?=$user[0]?>,'idUserUp')">
                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalExcluir" role="dialog">
    <div class=" modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Usuário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body  ">
          <form action="remover.php" method="post">
            <input class="form-control" id="idUserUp" name="idUserUp" type="hidden">
            <p>Tem certeza que deseja excluir o item selcionado?
            <div class=" text-end">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
              <button type="submit" class="btn btn-warning ms-3">Sim </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src='../../js/personalizar.js'></script>
</body>

</html>