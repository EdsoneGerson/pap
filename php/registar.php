<?php
@session_start();

//auxiliar
$msg = "";

//verificar se o ficheiro foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //incluir ligação a base de dados
    require_once('../inc/Medoo.php');

    //verificar se já existe um utilizador registado com o e-mail digitado no registado
    $emailexistente = $basedados->get(
        "tbutilizadores",
        "*",
        ["email" => $email]
    );

    if ($emailexistente) {
        $msg = "<p style='color: red'>Já existe um utilizador registado com o e-mail '$email'!</p>";
    } else {
        //verificar se existe alguma linha com email e password
        $basedados->insert("tbutilizadores", [
            "nome" => $nome,
            "email" => $email,
            "password" => $password,
            "tipo" => 2
        ]);
        $msg = "<p style='color: green;'>Conta criada com sucesso!</p>";
        header(header: "location: index.php");
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
                <h1>Criar Conta</h1>
            </div>
        </section>
        <section class="row">
            <div class="col-12 text-center">
            <?php echo $msg; //ver msg do resultado do registo ?>
            </div>
        </section>
        <section class="row">
            <div class="col-sm-12  mx-auto">
                <form method="post" class="form-box">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registar</button>
                </form>
            </div>
        </section>
        <!-- não alterar nada abaixo desta linha -->
    </main>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>