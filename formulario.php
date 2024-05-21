<?php

    if(isset($_POST['submit']))
    {

        //print_r('Nome :' . $_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['email']);
        //print_r('<br>');
        //print_r($_POST['senha']);
        //print_r('<br>');
        //print_r($_POST['telefone']);
        //print_r('<br>');
        //print_r($_POST['familia']);
        //print_r('<br>');
        //print_r($_POST['data_nascimento']);
        //print_r('<br>');
        //print_r($_POST['cidade']);
        //print_r('<br>');
        //nome//print_r($_POST['estado']);
        //print_r('<br>');
        //print_r($_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $familia = $_POST['familia'];
        $parente = $_POST['parente'];
        $data_nasci = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,familia,parente,data_nasci,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$familia','$parente','$data_nasci','$cidade','$estado','$endereco')");
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="shortcut icon" href="sos.png" type="image/x-icon">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 80%;
            background-image: linear-gradient(to right,rgb(20,147,220),rgb(17,54,71));
            
        }
        .box{
            color: white;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            width: 40%;
            
        

        }
        fieldset{
            border: 3px solid dodgerblue;
            
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
            
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput, 
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0,93,197), rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            border-radius: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0,80,172),
            rgb(80,19,195));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="home.php" method="post">
            <fieldset>
                <legend>
                    <b>Formulario para quem quer ajudar</b>
                </legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class = "labelInput">Nome completo</label>
                </div>
                <BR></BR>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class = "labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class = "labelInput">Email</label>
                </div>
                    <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class = "labelInput"> Telefone</label>
                </div>
                
                <p>O que você deseja abrigar?</p>
                <input type="radio" name="familia" id="1" value="1">
                <label for="1" class = 'radio'><b> Um pet </b></label>
                <br><br>
                
                <input type="radio" name="familia" id="2" value="2">
                <label for="2" class = 'radio'><b> Uma pessoa nessecitada </b></label>
                <br><br>
                <input type="radio" name="familia" id="3" value="3">
                <label for="3" class = 'radio'><b>os dois</b></label>
                <br><br>

                    <p>O que você deseja doar? </p>
                <input type="radio" name="parente" id="4" value="4">
                <label for="4" class = 'radio'><b> Alimentos </b></label>
                <br><br>
                
                <input type="radio" name="parente" id="5" value="5">
                <label for="5" class = 'radio'><b> Produtos Higienicos</b></label>
                <br><br>
                <input type="radio" name="parente" id="6" value="6">
                <label for="6" class = 'radio'><b>Os dois</b></label>
                <br><br>

                
                <div >
                    <label for="data_nascimento"> <b>Data de nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento"  required>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class = "labelInput"> Cidade</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class = "labelInput"> Estado</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class = "labelInput"> Endereco</label>
                </div>
                <br><br>
                <input type="submit" value="Enviar" name="submit" id="submit" required>
            </fieldset>
        </form>
    </div>
</body>
</html>