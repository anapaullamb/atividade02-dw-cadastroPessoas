<?php
    include_once 'rotina_tabela.php';
    
    if( !empty($_POST['form_submit']) ) {

        $fp = fopen('pessoas.txt', 'a+');

        if ($fp) {
            $cpf = lastCpf();
            fputs($fp, "$cpf\n");
            $linha = $_POST['nome']."#".$_POST['endereco']."#".$_POST['telefone'];
            fputs($fp, "$linha\n");
            fclose($fp);
        }
        echo "<script>alert('[OK] Dados escritos com Sucesso!')</script>";
    }
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
            <h2>CREATE</h2>
            <form action="tela02_create.php" method="post">
                <input type="hidden" name="form_submit" value="OK">
                
                <div class="input-group mb-3">
                    <input placeholder="Nome" type="text" class="form-control" name="nome">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Endereco" type="text" class="form-control" name="endereco">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Telefone" type="text" class="form-control" name="telefone">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                <a class="btn btn-secondary btn-lg" href="tela01_dinamica.php" role="button">Voltar</a>
            </form>
        </div>
    </body>
</html>
