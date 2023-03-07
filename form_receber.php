<?php

// echo $_GET['user'];
// echo $_GET['senha'];
// post > get
$usuario = $_POST['user'] ?? false;
$senha = $_POST['senha'] ?? false;

if ($usuario == 'giba' && $senha == '123') {
    // echo 'login sucesso';
    session_status();
    $_SESSION['usuario'] = 'usuario';

    header('location: welcome.php');
    die;
} else {
    header('location: form.php?error=1');
}
