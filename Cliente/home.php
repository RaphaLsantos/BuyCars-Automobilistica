<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../css/Cliente/homee.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Home</title>
</head>


<body>
  <!--inicio navbar-->
  <?php include('./../Componentes/navBar.php') ?>
  <!--final navbar-->

  <main class="main">
    <!--inicio home-->
    <section class="home text-center py-5 position-relative">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-6">
            <div class="home-content text-light">
              <h4 class="text-h4">Bem-vindo à BuyCars.</h4>
              <h1 class="text-h1">O melhor destino para apaixonados por carros esportivos!</h1>
              <p class="text-p">Experimente a emoção da velocidade...</p>
              <a href="#destaques" class="btn btn-primary btn-main mt-3">Veja mais</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="home-image">
              <img src="../img/home/carro_home.png" class="img-fluid rounded" alt="carro_banner">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--final home-->

    <!--inicio carousel-->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicadores -->
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
      </ol>
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/home/carro_home.png" class="d-block w-100" alt="Carro 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet.</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/carro_home.png" class="d-block w-100" alt="Carro 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet.</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/home/carro_home.png" class="d-block w-100" alt="Carro 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor sit amet.</h5>
          </div>
        </div>
      </div>
      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <!--final carousel-->


    <!--arrow descer tela inicio-->
    <div class="circle_arrow">
      <i class="fa-solid fa-arrow-down"></i>
    </div>
    <!--arrow descer tela final-->


    <!--inicio cards-->
    <div class="container_cards_total">
      <div class="container_cards_1">
        <div class="card">
          <div class="front">
            <img src="../img/home/cards/1.jpeg" alt="Car 1">
          </div>
          <div class="back">
            <h2>Car 1</h2>
            <p>Description of Car 1.</p>
          </div>
        </div>
        <div class="card">
          <div class="front">
            <img src="../img/home/cards/1.jpeg" alt="Car 2">
          </div>
          <div class="back">
            <h2>Car 2</h2>
            <p>Description of Car 2.</p>
          </div>
        </div>
      </div>

      <div class="container_cards_2">
        <div class="card">
          <div class="front">
            <img src="../img/home/cards/1.jpeg" alt="Car 1">
          </div>
          <div class="back">
            <h2>Car 1</h2>
            <p>Description of Car 1.</p>
          </div>
        </div>
        <div class="card">
          <div class="front">
            <img src="../img/home/cards/1.jpeg" alt="Car 2">
          </div>
          <div class="back">
            <h2>Car 2</h2>
            <p>Description of Car 2.</p>
          </div>
        </div>
      </div>
    </div>
    <!--final cards-->
  </main>

  <!--footer inicio-->
  <footer class="container_footer">

    <div class="itens_footer">
      <div class="item_footer_1">
        <h1 class="logo_footer">LOGO</h1>
        <p class="desc_footer">Lorem ipsum dolor sit.</p>
      </div>

      <div class="item_footer_2">
        <p class="contact">Email</p>
        <p class="email_footer">BuyCars@gmail.com</p>
      </div>

      <div class="item_footer_3">
        <p class="services_footer">Nossos serviços</p>
        <p class="services">Vendas</p>
        <p class="services">Revendas</p>
      </div>

      <div class="item_footer_4">
        <p class="item_info_footer">Quer deixar alguma sugestão?</p>
        <p class="info_footer_desc">Lorem ipsum dolor sit.</p>
      </div>
    </div>

    <hr class="linha_footer">
    <div class="icons_socials_footer">
      <div class="icons_footer">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-github"></i>
        <i class="fa-brands fa-whatsapp"></i>
      </div>
      <p class="end_footer">Lorem, ipsum dolor.</p>
    </div>

  </footer>
  <!--footer final-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>