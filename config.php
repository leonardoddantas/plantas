<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $basededados = 'bd_login';

    $conexao = new mysqli($servidor, $usuario, $senha,
    $basededados);

    if($conexao->connect_errno) {
    echo 'Falha ao conectar: (' . $conexao->connect_errno . ')'
    . $conexao->connect_error;
    }

?>