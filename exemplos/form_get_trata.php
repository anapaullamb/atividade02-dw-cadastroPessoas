<?php
    echo $_GET['aluno'];
    echo "<br>";
    echo $_GET['turma'];
?>

<html lang="pt-br">
    <head>
        <title> Formulário - GET </title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form_get_trata.php" method="get">
            <p> Aluno: <input type="text" name="aluno"/> </p>
            <p> Turma: <input type="text" name="turma"/> </p>
            <p> <input type="submit" value="Enviar!"/> </p>
        </form>
    </body>
</html>
