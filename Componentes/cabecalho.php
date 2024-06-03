<?php
  session_start();
  if(isset($_SESSION['foto_usuario'])){
    $foto_usuario = $_SESSION['foto_usuario'];
  }
?>
<header class=" border-bottom bg-dark text-white shadow align-items-center justify-content-center d-flex"
  style="height: 10%;">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
    <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="../../img/logo/logo3.png" width="120" height="70" class="d-inline-block align-top" alt="">
      </a>
      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-3 fw-bold">
        BuyCars
      </div>
      <div class="dropdown text-end">
        <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
          aria-expanded="false">
          <img src="../../fotos/usuarios/titinga.jpg" 
            alt="mdo" width="50" height="50" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li>
            <form action="../Usuario/registro.php" method="post">
              <input type="hidden" class="form-control" id="idUser" name="idUser">
              <button type="submit" class="dropdown-item">Perfil</button>
            </form>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>