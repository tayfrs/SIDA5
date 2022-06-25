<?php
    spl_autoload_extensions('.php');
    spl_autoload_register();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Consultar alunos matriculados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Pesquisar alunos</h1>
    <form method="post"><div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" class="form-control" name="matricula" id="matricula" 
                        placeholder="Informe a matrícula procurada">
    </div>
    <button type="submit" class="btn btn-primary">Pesquisar</button><br><br>
    </form>
    <?php
    if (isset($_POST['matricula'])){
        $cliente = new Client();
        $aluno[] = $_POST['matricula'];
        echo "<div class='alert alert-dark' role='alert'>"
                                    .$cliente->getName($aluno)."</div>";
    }
    ?></div></body></html>