<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulador de Poupança</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/poupanca.css">
    <script src="js/simulador.js"></script>
</head>

<body>

    <?php require_once('inc/menu.php'); ?>

    <main class="container-fluid">
        <section class="row">
            <div class="col-12 text-center mt-4">
                <h1><b>Poupança Anual</b></h1>
            </div>
        </section>

        <section class="row">
            <div class="col-sm-12 col-lg-10 text-center mx-auto">
                <div class="container">
                    <form id="savingsForm" onsubmit="event.preventDefault(); calculate();">
                        <label for="aporte">Aporte mensal (€):</label>
                        <input type="number" id="aporte" required step="0.01" min="0" placeholder="0">

                        <label for="meses">Número de meses:</label>
                        <input type="number" id="meses" required step="0.01" min="0" placeholder="0">

                        <label for="taxa">Rentabilidade mensal (%):</label>
                        <input type="number" id="taxa" required step="0.1" min="0.1" placeholder="0">

                        <button type="button" class="btn btn-outline-dark" onclick="calculate()">Calcular</button>
                    </form>
                    <div class="result mt-4" id="result"></div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>