<?php
include('../dao/conexao.php');

$querySelect = "SELECT * FROM tab_galeria";

$resultado = $conexao->query($querySelect);

$galerias = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/Cliente/galeria.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Galeria</title>
  <style>
    .btn {
      margin-left: 340%;
      background-color: #d6c396;
    }

    .botao-modal {
      width: 70px;
      height: 40px;
      font-size: 15px;
      border-radius: 15px;
      border: none;
      background-color: #d6c396;
      text-align: center;
      color: #000;
    }

    .modal-dialog {
      top: 10%;
    }

    .row {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
      position: relative;
      flex-wrap: wrap;
    }

    .image {
      max-width: 300px;
      max-height: 300px;
      margin-left: 300px;
    }

    .container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 80px;
      flex-direction: row;
    }

    .card {
      border-radius: 5px;
      box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
      padding: 30px;
      margin: 20px;
      width: 600px;
      transition: all 0.3s ease-out;
      height: 250px;

    }

    .card:hover {
      transform: translateY(-5px);
      cursor: pointer;
    }

    .card .image img {
      float: left;
      width: 100px;
      z-index: 1;
      opacity: 0.5s;
      transition: 0.5s;
      margin-right: 50px;
      align-items: right;
    }

    .content {
      top: 1px;
      text-align: left;
      font-size: 20px;

    }

    .principal {
      display: flex;
    }
  </style>
</head>

<body>


  <!--inicio navbar-->
  <?php
  include('./../Componentes/navBar.php')
  ?>
  <!--final navbar-->
  <br>

  <h2 class="titulo">Nossas coleções</h2>
  <h1 class="subTitulo">Carros de primeira linha</h1>

  <div class="principal">
    <div class="container">
      <?php foreach ($galerias as $galeria) { ?>
        <div class="card">
          <div class="row">
            <div class="col">
              <b>
                <p>Nome veículo:
              </b> <?= $galeria[1] ?></p>
              <b>
                <p>Marca:
              </b><?= $galeria[2] ?></p>
              <b>
                <p>Valor:
              </b><?= $galeria[3] ?></p>
            </div>

            <div class="col">
              <img src="../fotos/carros/<?= $galeria[4] ?>" class="card-img-top" alt="Imagem do card">
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </div><br><br><br><br>


  <div id="ctt"></div>
  <footer class="footer">
    <div class="left">
      <h4 class="title-footer">Buy<span>Cars</span></h4>
      <p class="links">
        <a href="file:///E:/ETEC/PW1/AULA%2010/SITE%20loja/ctt.index.html" title="Home">CONTATO</a>
      </p>
      <p class="Copyright">Copyright &copy; 2023 Seu site - Todos os Direitos Reservados. <br>Melhor loja auto-esportiva do Brasil, <br>nosso cliente pode ter a total confiança em nós, <br>seremos eternamente agradecidos..</p>
    </div>

    <!--inicio modal-->
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
    <!--final modal-->

    <!--inicio form-->
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
    <!--inicio form-->
  </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>