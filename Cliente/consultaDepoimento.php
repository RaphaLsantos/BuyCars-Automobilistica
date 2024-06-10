<?php
include('../dao/conexao.php');
$querySelect = "SELECT * FROM tab_depoimento";
$resultado = $conexao->query($querySelect);
$depoimentos = $resultado->fetchAll();
?>
<?php
include('../dao/conexao.php');
$querySelect = "SELECT * FROM tab_email";
$resultado = $conexao->query($querySelect);
$email = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./../css/Cliente/homee.css">
  <link rel="stylesheet" href="./../css/Cliente/depoimento.css">
  <title>Document</title>
</head>

<body>
  <!--inicio navbar-->
  <?php
  include('./../Componentes/navBar.php')
  ?>
  <!--final navbar-->

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <h1 class="text-1">Depoimentos de nossos clientes</h1>
      </div>

      <div class="card-header">
        <div class="card-body">

          <div class=" row">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="col-md-2">Tipo</th>
                  <th class="col-md-5">Depoimento</th>
                  <th class="col-md-2">Autor</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($depoimentos as $depoimento) { ?>
                  <tr>
                    <td><?= $depoimento[1] ?></td>
                    <td><?= $depoimento[2] ?></td>
                    <td><?= $depoimento[3] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div class="row mt-5">
            <div class="col-6">
              <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div id="ctt"></div>
  <footer class="footer">
    <div class="left">

      <h4 class="title-footer">Buy<span>Cars</span></h4>

      <p class="links">

        <a href="file:///E:/ETEC/PW1/AULA%2010/SITE%20loja/ctt.index.html" title="Home">CONTATO</a>
      </p>

      <p class="Copyright">Copyright &copy; 2023 Seu site - Todos os Direitos Reservados. <br>Melhor loja auto-esportiva do Brasil, <br>nosso cliente pode ter a total confiança em nós, <br>seremos eternamente agradecidos..</p>


    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Contato</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="../area-restrita/Email/salvar.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
              <div class="col mb-3">
                <label for="recipient-name" class="col-form-label">Assunto:</label>
                <select class="form-select" name="assunto">
                  <option value="Documento não validado">Documento não validado</option>
                  <option value="Veículo em péssimas condições">Veículo em péssimas condições</option>
                  <option value="Falta de peça">Falta de peça</option>
                  <option value="Entrega fora do prazo">Entrega fora do prazo</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer>
  
    <form action="../area-restrita/Email/salvar.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      <div class="col mb-3">
        <label for="recipient-name" class="col-form-label">Assunto:</label>
        <select class="form-select" name="assunto">
          <option value="Documento não validado">Documento não validado</option>
          <option value="Veículo em péssimas condições">Veículo em péssimas condições</option>
          <option value="Falta de peça">Falta de peça</option>
          <option value="Entrega fora do prazo">Entrega fora do prazo</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>