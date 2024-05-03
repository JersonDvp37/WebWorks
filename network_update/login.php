<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginStyle.css">
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

    <form action="testeLogin.php" method="POST" class="form">
        <h1><strong style="font-family:Arial, Helvetica, sans-serif;" class="title" id="title">SIGN IN</strong></h1><br><br>
        <Strong class="bemvindo"> SEJA BEMVINDO!</Strong>
        
        <img src="Icons/NetWork State reporting.png" alt="" class="logo">
        <Strong class="nts">NETWORK TECHNICAL SUPPORT</Strong>
        <a href="signUp.php"><label class="signs" style="font-size: 13px;">SignUp - quer criar uma nova conta?</label></a>

        <Strong style="font:Arial;color: white">Usuario</Strong><br>
        <input type="text" name="usu" id="usuario" class="usuario" placeholder="Insira o usuario" required>
<br><br>
        <Strong style="font:Arial; color: white;">Senha</Strong><br>
        <input type="password" style="font-family:Arial, Helvetica, sans-serif;" name="sen" id="senha" class="senha" 
               placeholder="Insira a senha" required>
<br><br><br>
         <input type="submit" name="sbmt" class="sbmt" id="sbmt">
    </form>
</div>

</body>
</html>