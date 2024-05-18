<?php
  
if (isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha']))
  {
        //acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r('email :' . $email);
        print_r('senha :' . $senha);

  }
  else
  {
        //nao acessa
    header('location: login.php');
  }

?>