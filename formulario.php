<?php

    if(isset($_POST['submit']))
    {

        print_r('Nome :' . $_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
        print_r('<br>');
        print_r($_POST['familia']);
        print_r('<br>');
        print_r($_POST['data_nascimento']);
        print_r('<br>');
        print_r($_POST['cidade']);
        print_r('<br>');
        print_r($_POST['estado']);
        print_r('<br>');
        print_r($_POST['endereco']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 85%;
            background-image: linear-gradient(to right,rgb(20,147,220)rgb(17,54,71));
            
        }
        .box{
            color: white;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            width: 50%;
            
        

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
            letter-spacing: 2px;
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
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend>
                    <b>Formulario para quem quer ajudar</b>
                </legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class = "labelInput">Nome completo</label>
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
                
                <p>Voce deseja abrigar quantas familias?</p>
                <input type="radio" name="familia" id="1familia" value="1familia">
                <label for="1familia"><b> 1 familia</b></label>
                <br><br>
                
                <input type="radio" name="familia" id="2familia" value="2familia">
                <label for="2familia"><b> 2 familias</b></label>
                <br><br>
                <input type="radio" name="familia" id="3familia" value="3familia">
                <label for="3familia"><b>3 Familias</b></label>
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
                <input type="submit" value="Enviar" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>