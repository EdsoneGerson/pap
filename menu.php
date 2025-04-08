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
          <a class="nav-link" aria-current="page" href="index.php">C&D</a>
        </li>
        <?php if(isset($_SESSION['autenticado'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="poupanca.php">Poupança</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ordenado.php">Ordenado Atual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conversor.php">Conversor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php } if(isset($_SESSION['autenticado']) && $_SESSION['tipoUtilizador'] == 1){ //se administrador?>
          <li class="nav-item">
          <a class="nav-link" href="control.php">ADM Control</a>
        </li>
        <?php } if(!isset($_SESSION['autenticado'])){?>
        <li class="nav-item">
            <a class="nav-link" href="registar.php">Registar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php } ?>
      </ul>
      
    </div>
  </div>
</nav>