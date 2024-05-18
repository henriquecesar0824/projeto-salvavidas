<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(to right,rgb(22,170,220), rgb(17,54,71)) ;
        }
        .tela-login{
            background-color: rgba(0,0,0,0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
        }
        #botao{
            background-color: dodgerblue;
            padding: 15px;
            width: 100%;
            border: 10px;
            color: white;
            font-size: 15px;
        }

    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div id="tela-login">
        <h1>Login</h1>
         <form action="testlogin.php" method="post"></form>
        <input type="text" name="nome" id="nome" placeholder="nome">
        <br><br>
        <input type="password" name="senha" id="senha" placeholder="senha">
        <br><br>
        <input type="submit" value="Enviar" id="botao">
    </div>
</body>
</html>