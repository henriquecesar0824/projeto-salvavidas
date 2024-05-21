<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site SOS RS</title>
    <link rel="shortcut icon" href="sos.png" type="image/x-icon">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
            text-align: center;
            color: white;

        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 30px;
        }
        .link{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 4px;
        }
        .link:hover{
            background-color: darkblue;
            color: white;
            transition: 0.4s;
        }
    </style>
</head>
<body>
    <h1>Ajude o Rio Grande Do Sul</h1>
    <div class="box">
        <a class="link" href="login.php">Login</a>
        <a class="link" href="formulario.php">Cadastre-Se</a>
    </div>
</body>
</html>