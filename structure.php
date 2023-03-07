<?php  
    $num = 0;
    
    $arr = [1,2,3];
    // var_dump($arr);


    // if ($num > 0) {
    //     echo 'maior que zero';
    // } else if ($num < 0) {
    //     echo 'menor que zero';
    // } else {
    //     echo 'igual a zero';
    // }


    // for ($i=1; $i < 10; $i++) { 
        // echo '<p>' . $i . '</p>';
        // echo "<p>{$i}</p>";
    // }


    $var = [
        'Teste',
        'teste 2',
    ];

    foreach ($var as $valor) {
        echo "<p>{$valor}</p>";
    }

    $pessoa = [
        'nome' => 'Fulano',
        'idade' => 85,
        'cidade' => 'Bento',
    ];

    foreach ($pessoa as $valor) {
        echo "<p>{$valor}</p>";
    }
    