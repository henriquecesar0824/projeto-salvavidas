<?php
session_start();
//print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['$senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
    
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            color: white;
        }
        .sair{
            text-decoration: none;
            text-align: right;
            background-color: red;
            color: white;
            border: 5px solid red;
        }
    </style>
</head>
<body>
    <h1>Voce acessou o sistema</h1>
<div class="d-flex">
    <a class="sair" href="sair.php">Sair</a>
</div>
</body>
</html>
