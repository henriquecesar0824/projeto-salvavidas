<?php

    $hostname = 'localhost';
    $bancodedados = 'clientes';
    $usuario = 'root';
    $senha = '';


    $mysql = new mysqli($hostname,$usuario,$senha,$bancodedados);

    if ($mysqli->connect_errno)
    {
        echo "Erro";
    }

    else
    {
        echo "Conectado com sucesso";
    }

?>