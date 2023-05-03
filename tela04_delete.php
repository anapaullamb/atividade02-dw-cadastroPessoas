<?php
    include_once 'rotina_tabela.php';

    $cpf = $_GET['cpf'];
    $arr = readArray();
    unset($arr[$cpf]);
    unlink("pessoas.txt");
    addArray($arr);
    echo "<script>alert('[OK] $cpf removido com Sucesso!')</script>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Utilizando Bootstrap 5</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
            <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <span class="ms-3 fs-5">Usuários do Sistema</span>
            </a>
        </nav>
        <div class="container">
            <h2>DELETE</h2>
            <a class="btn btn-secondary btn-lg" href="tela01_dinamica.php" role="button">Voltar</a>
        </div>
    </body>
</html>
