<?php

require('models/Model.php');
require('models/Produto.php');

$prod = new Produto();

$resultado = $prod->getAll();

var_dump($resultado);
