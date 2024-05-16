<?php

    $hostname = 'localhost';
    $bancodedados = 'usuarios';
    $usuario = ' root';
    $senha = '';


    $mysqli = new mysqli($hostname,$usuario,$senha,$bancodedados);

    if ($mysqli->connect_errno)
    {
        echo "Erro";
    }

    else
    {
        echo "Conectado com sucesso";
    }

?>