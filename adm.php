<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/adm.css">
</head>

<body>
    <?php require_once('inc/menu.php'); ?>

    <main class="container-fluid">
        <section class="row">
            <!-- não alterar nada acima desta linha -->
            <div class="col-12 text-center mt-4">
                <h1><b>Controle Administrativo</b></h1>
            </div>
        </section>
        <section class="row">
            <div class="col-sm-12 col-lg-10 text-center mx-auto">
                <!-- o conteúdo específico de cada página vem aqui -->
                <div class="container">
                    <nav>
                        <button class="btn btn-outline-dark"><a href="visualizar.php">Visualizar Dados</a></button>
                        <button class="btn btn-outline-dark"><a href="historico.php">Histórico de Ações</a></button>
                        <button class="btn btn-outline-dark"><a href="utilizadores.php">Gestão de Utilizadores</a></button>
                    </nav>
                </div>
        </section>
        <!-- não alterar nada abaixo desta linha -->
    </main>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>