<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="shortcut icon" href="sos.png" type="image/x-icon">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image:linear-gradient(to right,rgb(22,170,220), rgb(17,54,71)) ;
        }
        div{
            background-color: rgba(0,0,0,0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
            box-shadow: 2px 2px 3px black;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            width: 87%;
        }
        .inputSubmit{
            background-color: dodgerblue;
            padding: 15px;
            width: 100%;
            border: 10px;
            color: white;
            font-size: 15px;
            border-radius: 10px
        }
        .cadastro{

            text-decoration: none;
            color: white;
        }
        #link{
            position: relative;
            left: -30%;
            bottom: -73px;
        }
        #h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <a class="login" href="home.php">Voltar</a>
    <div>
        <h1 id="h1">Login</h1>
         <form action="testlogin.php" method="post">
        <input type="text" name="email" id="email" placeholder="email" required>
        <br><br>
        <input type="password" name="senha" id="senha" placeholder="senha" required>
        <br><br>
        <input type="submit" value="Enviar" name="submit" class="inputSubmit">
        </form>
        <a id="link", class="cadastro" href="formulario.php">Nao tem cadastro? Faça-o aqui</a>
    </div>
</body>
</html>