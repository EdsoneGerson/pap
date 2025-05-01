<?php
// Inicia a sessão PHP
session_start();

// Define as moedas mais fortes suportadas
$moedas = [
    "EUR",   // Euro
    "BRL",    // Real Brasileiro
    "USD",   // Dólar Americano
    "CHF",   // Franco Suíço
    "GBP",   // Libra Esterlina
    "AUD",   // Dólar Australiano
    "CAD",   // Dólar Canadense
    "SGD",   // Dólar de Cingapura
    "NZD",   // Dólar Neozelandês
    "SEK",   // Coroa Sueca
    "NOK",   // Coroa Norueguesa
    "DKK",   // Coroa Dinamarquesa
    "HKD",   // Dólar de Hong Kong
    "INR",   // Rupia Indiana
    "KRW",   // Won Sul-Coreano
    "JPY",   // Iene Japonês
    "CNY",   // Yuan Chinês
    "KWD",   // Dinar Kuwaitiano
    "BHD",   // Dinar Bahreiniano
    "OMR",   // Rial Omaniano
    "QAR",   // Rial Qatarense
    "SAR",   // Rial Saudita
    "AED",   // Dirham dos Emirados Árabes Unidos
    "MYR",   // Ringgit Malaio
    "ZAR",   // Rand Sul-Africano
];
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conversor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/poupanca.css">
    <script src="js/conversor.js" defer></script>
</head>

<body>
    <?php require_once('inc/menu.php'); ?>

    <main class="container-fluid">
        <section class="row">
            <div class="col-12 text-center mt-4">
                <h1><b>Converter moedas</b></h1>
            </div>
        </section>
        <div class="container">
            <section class="row">
                <div class="col-sm-12 col-lg-6 text-center mx-auto">
                    <!-- Formulário com seleção de moedas e entrada de valor -->
                    <form class="row g-3 justify-content-center mt-4">
                        <!-- Linha de moeda de origem e valor -->
                        <div class="col-6">
                            <label for="from_currency" class="form-label">Moeda de Origem</label>
                            <select class="form-select" id="from_currency" required>
                                <?php foreach ($moedas as $moeda): ?>
                                    <option value="<?= $moeda ?>"><?= $moeda ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="amount" class="form-label">Valor</label>
                            <input type="number" class="form-control" id="amount" step="0.01" min="0" placeholder="0" required>
                        </div>

                        <!-- Linha de moeda de destino e resultado -->
                        <div class="col-6">
                            <label for="to_currency" class="form-label">Moeda de Destino</label>
                            <select class="form-select" id="to_currency" required>
                                <?php foreach ($moedas as $moeda): ?>
                                    <option value="<?= $moeda ?>"><?= $moeda ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="converted" class="form-label">Valor Convertido</label>
                            <input type="text" class="form-control" id="converted" placeholder="0" readonly>
                        </div>
                    </form>

                    <!-- Botão para trocar as moedas (⇄) -->
                    <button type="button" class="btn btn-outline-dark" onclick="trocarMoedas()">⇵</button>

                    <!-- Alertas de erro -->
                    <div id="erro" class="alert alert-danger mt-4 d-none" role="alert"></div>
                </div>
            </section>
        </div>
    </main>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>