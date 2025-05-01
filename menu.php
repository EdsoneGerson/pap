<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><b>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <?php if (isset($_SESSION['autenticado'])) { ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="simulador.php">Anual</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="poupanca.php">Mensal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ordenado.php">Ordenado</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conversor.php">Conversor</a>
            </li>

          <?php }
          if (isset($_SESSION['autenticado']) && $_SESSION['tipoUtilizador'] == 1) { //se administrador
          ?>
            <li class="nav-item">
              <a class="nav-link" href="adm.php">Administrador</a>
            </li>
          <?php } if (!isset($_SESSION['autenticado'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="registar.php">Registar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <?php } if (isset($_SESSION['autenticado'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php } ?>
        </ul>
    </b>
  </div>
  </div>
</nav>