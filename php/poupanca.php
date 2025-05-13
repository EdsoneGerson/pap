<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poupança</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <?php require_once('../inc/menu.php'); ?>

    <main class="container-fluid">
        <section class="row">
            <!-- não alterar nada acima desta linha -->
            <div class="col-12 text-center mt-4">
                <h1>Quanto poupar para atingir o meu objectivo</h1>
            </div>
        </section>
        <section class="row">
            <div class="col-sm-12 col-lg-10 text-center mx-auto">
                <!-- o conteúdo específico de cada página vem aqui -->
                <div class="col-sm-12 col-lg-5 mx-auto">
                    <div class="mb-3">
                        <div class="wprt-container">
                            <div id="calc_moneylab">
                                <div class="calc_moneylab_left">
                                    <form method="post" class="calc_form">
                                        <div>
                                            <label for="valor">Valor acumulado até agora: </label>
                                            <input type="text" name="valor" id="valor" placeholder="0" />
                                        </div>

                                        <div>
                                            <label for="montante">Montante desejado: </label>
                                            <input type="text" name="montante" id="montante" placeholder="0" />
                                        </div>

                                        <div>
                                            <label for="anos">Número de anos: </label>
                                            <input type="text" name="anos" id="anos" placeholder="0" />
                                        </div>

                                        <div>
                                            <label for="taxa">Taxa anual %:</label>
                                            <input type="text" name="taxa" id="taxa" placeholder="0" />
                                        </div>

                                        <button id="calc" type="button">Calcular</button>
                                    </form>
                                </div>

                                <div class="calc_moneylab_right">
                                    <div class="calc_results">
                                        <div class="calc_title">Montante de poupança mensal:</div>
                                        <div class="calc_desc" id="poupanca"></div>
                                    </div>
                                </div>

                            </div>
                            <script src="../js/poupança.js"></script> <!-- Link para o JavaScript externo -->
                        </div>
        </section
            <!-- não alterar nada abaixo desta linha -->
    </main>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
</body>