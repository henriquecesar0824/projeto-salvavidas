<?php   

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'formulario-henrique';

    $conexao = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($conexao->connect_error) {
        die ('Erro'. $conexao->connect_error);
    }
    else {
        die ('Conexao efetuada com sucesso'. $conexao->connect_error);
    }

?>