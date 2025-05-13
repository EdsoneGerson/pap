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
          <a class="nav-link" aria-current="page" href="/gestormeu/index.php">Inicio</a>
        </li>
        <?php if(isset($_SESSION['autenticado'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="/gestormeu/php/poupanca.php">Poupança</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gestormeu/php/ordenado.php">Ordenado Atual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gestormeu/php/conversor.php">Conversor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/gestormeu/php/logout.php">Logout</a>
        </li>
        <?php } if(isset($_SESSION['autenticado']) && $_SESSION['tipoUtilizador'] == 1){ ?>
          <li class="nav-item">
          <a class="nav-link" href="#">Opções do Administrador (alterar)</a>
        </li>
        <?php } if(!isset($_SESSION['autenticado'])){?>
        <li class="nav-item">
            <a class="nav-link" href="/gestormeu/php/registar.php">Registar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/gestormeu/php/login.php">Login</a>
        </li>
        <?php } ?>
      </ul>
      <!-- Botão para alternar entre modo claro e escuro -->
      <button id="theme-toggle" class="btn btn-secondary ms-auto">Modo Escuro</button>
    </div>
  </div>
</nav>

<script src="/gestormeu/js/escuro.js"></script>