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
    <title>Poupança</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/poupanca.css">
    <script src="js/poupanca.js"></script>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>

    <main class="container-fluid">
        <section class="row">
            <!-- não alterar nada acima desta linha -->
            <div class="col-12 text-center mt-4">
                <h1><b>Poupança Mensal</b></h1>
            </div>
        </section>
        <section class="row">
            <div class="col-sm-12 col-lg-10 text-center mx-auto">
                <div class="container">
                    <form id="savingsForm" class="calc_form">

                        <label for="montante">Montante desejado (€):</label>
                        <input type="number" id="montante" name="montante" required step="0.01" min="0" placeholder="0">

                        <label for="anos">Número de meses:</label>
                        <input type="number" id="meses" name="meses" required step="1" min="1" placeholder="0">

                        <button type="button" class="btn btn-outline-dark" id="calc">Calcular</button>
                    </form>
                    <div class="result" id="poupanca"></div>
                </div>
            </div>
        </section>
        <!-- não alterar nada abaixo desta linha -->
    </main>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
