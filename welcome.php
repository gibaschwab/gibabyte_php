<?php
    session_start();
    if (!isset($_SESSION['usuario'])){
        header('location:form.php?erro=2');
        die;
    }

    echo 'login realizado com sucesso!';