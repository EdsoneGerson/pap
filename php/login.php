<?php
session_start();
//verificar se o ficheiro foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //incluir ligação a base de dados
    require_once('../inc/Medoo.php');
    //verificar se existe alguma linha com nome, email e password
    $usuario = $basedados->get("tbutilizadores",
    "*",
    [
        "email" => $email,
        "password" => $password
    ]);

    //verificar se dados de acesso estão corretos
    if ($usuario) {
        $_SESSION['autenticado'] = true;
        $_SESSION['nomeUtilizador'] = $usuario['nome'];
        $_SESSION['tipoUtilizador'] = $usuario['tipo'];
        //redireccionar para a página inicial
        header(header: "location: ../index.php");
    } else {
        echo "<p>Dados de acesso inválidos!!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php require_once('../inc/menu.php'); ?>
    <main class="container-fluid">
        <section class="row">
            <!-- não alterar nada acima desta linha -->
            <div class="col-12 text-center mt-4">
                <h1>Login</h1>
            </div>
        </section>
        <section class="row">
            <div class="col-12 text-center">
            </div>
        </section>
        <section class="row">
            <div class="col-sm-12 col-lg-12 mx-auto">
                <form method="post" class="form-box">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Logar</button>
                </form>
                <p>Não tem uma conta? <a href="registar.php">Crie uma agora</a></p>
            </div>
        </section>
        <!-- não alterar nada abaixo desta linha -->
    </main>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>