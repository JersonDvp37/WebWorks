<?php

    if(isset($_POST['sbmt']))
    {
        
       include_once('Config3.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $usuario = $_POST['usu'];
       $senha = $_POST['sen'];

       $result = mysqli_query($conexao, "INSERT INTO signup(nomeC,email,usuario,senha)

                                  VALUES ('$nome','$email','$usuario','$senha')" );    
                                  
                                  header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginStyle2.css">
</head>
<body>
    <div>
        <figure>
            <img src="images/fundo1.jpg" alt="" class="backlogin" id="acklogin">
        </figure>
    </div>
<div class="geral" id="geral">
             
            <div class="boxback"></div>
            <div class="boxlog" id="boxlog"></div>

                 <div><img src="Icons/J4o.gif" alt="" class="giflogo"></div>

                 <form action="signUp.php" method="POST" class="form">
                    <h1><strong style="font-family:Arial, Helvetica, sans-serif;" class="title" id="title">SIGN UP</strong></h1><br><br>
          
                    <Strong class="bemvindo"> SEJA BEMVINDO!</Strong>
                    <div class="logoback"></div>
                    <img src="Icons/NetWork State reporting.png" alt="" class="logo">
                    <Strong class="nts">NETWORK TECHNICAL SUPPORT</Strong>
                    
                    <Strong style="font:Arial;color: white">Nome completo</Strong><br>
                    <input type="text" name="nome" id="nome" class="nome" placeholder="Insira o nome completo" required>
            <br><br>
                   <Strong style="font:Arial;color: white">Email</Strong><br>
                   <input type="email" name="email" id="email" class="email" placeholder="Insira o email" required>
            <br><br>
                    <Strong style="font:Arial;color: white">Usuario</Strong><br>
                    <input type="text" name="usu" id="usuario" class="usuario" placeholder="Insira o usuario" required>
            <br><br>
                    <Strong style="font:Arial; color: white;">Senha</Strong><br>
                    <input type="password" style="font-family:Arial, Helvetica, sans-serif;" name="sen" id="senha" class="senha" 
                           placeholder="Insira a senha" required>
            <br><br><br>
                    <a href="login.php"><input type="submit" name="sbmt" class="sbmt" id="sbmt"></a>
                </form>
</div>

</body>
</html>