<?php
  @session_start();
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/gestor/index.php">Inicio</a>
        </li>
        <?php if(isset($_SESSION['autenticado'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="/gestor/php/poupanca.php">Poupança</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gestor/php/ordenado.php">Ordenado Atual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gestor/php/conversor.php">Conversor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/gestor/php/logout.php">Logout</a>
        </li>
        <?php } if(isset($_SESSION['autenticado']) && $_SESSION['tipoUtilizador'] == 1){ //se administrador?>
          <li class="nav-item">
          <a class="nav-link" href="#">Opções do Adminitsrador (alterar)</a>
        </li>
        <?php } if(!isset($_SESSION['autenticado'])){?>
        <li class="nav-item">
            <a class="nav-link" href="/gestor/php/registar.php">Registar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/gestor/php/login.php">Login</a>
        </li>
        <?php } ?>
      </ul>
      
    </div>
  </div>
</nav>