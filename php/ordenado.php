<?php
session_start();

$salarios = [
    1974 => 16.47,
    1975 => 19.98,
    1977 => 22.47,
    1978 => 28.47,
    1979 => 37.41,
    1980 => 44.94,
    1981 => 53.41,
    1983 => 64.87,
    1984 => 77.99,
    1985 => 95.77,
    1986 => 112.09,
    1987 => 125.79,
    1988 => 135.73,
    1989 => 149.62,
    1990 => 174.57,
    1991 => 199.26,
    1992 => 225.85,
    1993 => 243.89,
    1994 => 255.52,
    1995 => 271.85,
    1996 => 291.13,
    1997 => 305.87,
    1998 => 318.15,
    1999 => 331.13,
    2000 => 346.15,
    2001 => 363.42,
    2002 => 341.23,
    2003 => 353.20,
    2004 => 365.60,
    2005 => 374.70,
    2006 => 385.90,
    2007 => 403.00,
    2008 => 426.00,
    2009 => 450.00,
    2010 => 475.00,
    2011 => 485.00,
    2012 => 485.00,
    2013 => 485.00,
    2014 => 505.00,
    2015 => 505.00,
    2016 => 530.00,
    2017 => 557.00,
    2018 => 580.00,
    2019 => 600.00,
    2020 => 635.00,
    2021 => 665.00,
    2022 => 705.00,
    2023 => 760.00,
    2024 => 820.00,
    2025 => 870.00
];
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valor do Ordenado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/ordenado.css">
</head>

<body>
    <?php require_once('../inc/menu.php'); ?>

    <main class="container-fluid">
        <section class="row">
            <!-- não alterar nada acima desta linha -->
            <div class="col-12 text-center mt-4">
                <h1><b>Valor do ordenado atual</b></h1>
            </div>
        </section>
        <section class="row">
            <div class="salario">
                <!-- o conteúdo específico de cada página vem aqui -->
                <h2 style="text-align: center;">Evolução do Salário Mínimo em Portugal</h2>
                <table>
                    <tr>
                        <th>Ano</th>
                        <th>S.M (€)</th>
                    </tr>
                    <?php foreach ($salarios as $ano => $valor) : ?>
                        <tr>
                            <td><?= $ano; ?></td>
                            <td><?= number_format($valor, 2, ',', '.');?>€</td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </section>
        <!-- não alterar nada abaixo desta linha -->
    </main>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>