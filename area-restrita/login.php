<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loja Buy cars</title>
  <link rel="stylesheet" href="css/estilo.css">
  <link href="../Bootstrap5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../fontawesome/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../img/logo/logo3.png" />
</head>

<body style=" height: 100vh;  justify-content: center; align-items: center;">
  <div class="container col-xl-10 col-xxl-8  " style="height: 95vh; padding:8% 30px">
    <div class="row align-items-center g-lg-5 py-4 ">
      <div class="col-lg-7 text-center text-lg-start">
        <a href="../Cliente/home.php" class="d-block link-dark text-decoration-none ">
          <img src="../img/logo/logo3.png" class="rounded mx-auto d-block" alt="...">
        </a>
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 text-center">BuyCars</h1>
        <p class="col-lg-10 fs-5 text-center w-100 display-4 fw-bold lh-1">Painel Adminstrativo</p>
      </div>
      
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="validarUsuario.php">
          <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating ">
            <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
          </div>
          <div class="checkbox mt-3 mb-2">
            <label>
              <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
          <hr class="my-4">
          <small class="text-body-secondary">Ao clicar em Cadastre-se, você concorda com os termos de uso.</small>
        </form>
      </div>
    </div>
  </div>

  <script src="../Bootstrap5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>