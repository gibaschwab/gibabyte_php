<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title>forma</title>
</head>

<?php
    $erro = $_GET['erro'] ?? false;
    
    switch ($erro) {
        case 1:
            echo 'usuario/senha invalido';
            break;
        case 2:
            echo 'voce n esta autenticado';
        case 3:
            echo 'voce saiu com sucesso';
    }
?>

<form action="form_receber.php" method="post">
    <div class="container mt-4 mx-lg-5 px-lg-5">
        <div class="row mt-2">
            <div class="col-md-2 form-group">
                <label for="campo-titulo" class="mb-1">Usuário</label>
                <input type="text" class="form-control" name="usuario">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2 form-group">
                <label for="campo-titulo" class="mb-1">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2 form-group">
                <button type="submit" value="Acessar" class="btn btn-primary btn-block">OK</button>
            </div>
        </div>
    </div>
</form>