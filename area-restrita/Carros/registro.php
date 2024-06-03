  <?php
include('../../dao/conexao.php');
    if($_POST) {
      $idGaleria = $_POST['idGaleria'];
      $querySelect = "SELECT * FROM tab_galeria  WHERE idGaleria = $idGaleria";
      $resultado = $conexao->query($querySelect);
      $curso = $resultado->fetch();
      
      $idGaleria = $curso["idGaleria"];
      $nomeCarro = $curso["nomeCarro"];
      $marcaCarro = $curso["marcaCarro"];
      $valorCarro = $curso["valorCarro"];
      $imgCarro = $curso["imgCarro"];
    }else{
      $idGaleria = "";
      $nomeCarro = "";
      $marcaCarro = "";
      $valorCarro = "";
      $imgCarro = "";
    }

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buy cars - Registro Carro</title>
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
          <form method="post" action="salvar.php" enctype="multipart/form-data">
            <div class="card-header">
              <strong>INFORMAÇÕES DO VEÍCULO</strong>
            </div>
              <div class="card-body row " style="align-items: center; justify-content: center;">
                <div class="col-md-2   text-center">
                  <div class="bg-white rounded">
                    <img id="preview" src="../../fotos/carros/<?=$imgCarro!="" ? $imgCarro : 'perfil.png';?>"
                      alt="..." class=" w-75">
                  </div>
                </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="recipient-name" class="col-form-label">Nome veículo:</label>
                    <input type="text" class="form-control" name="nomeCarro"  maxlength="50" value="<?=$nomeCarro?>">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">Marca:</label>
                    <input type="text" class="form-control" name="marcaCarro" maxlength="50" value="<?=$marcaCarro?>">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="recipient-name" class="col-form-label">Valor do veículo:</label>
                    <input type="text" class="form-control" name="valorCarro" maxlength="50" value="<?=$valorCarro?>">
                  </div>
                </div>
                
                <div class="col-md-3 mt-5">
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                </div>
                <input type="hidden" id="imgCarro" name="imgCarro" value="<?=$imgCarro?>">

              </div>
              <div class=" text-end p-3">
                <input type="hidden" id="idGaleria" name="idGaleria" value="<?=$idGaleria?>">
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