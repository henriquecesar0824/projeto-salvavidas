<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbName = 'formulario-henrique';

    $conexao = new mysqli($dbHost,$dbUsername,$dbpassword,$dbName)

    ($conexao->connect_errno){

        echo "erro";
    }
    else{
        echo"efetuado com sucesso";
    }

?>