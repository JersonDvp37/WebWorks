<?php
     session_start();
     //print_r($_SESSION['usuario']);

     if((!isset($_SESSION['usuario']) == true) and ((!isset($_SESSION['senha']) == true)))
     {
           unset($_SESSION['usuario']);
           unset($_SESSION['senha']);
           header("Location: login.php");
     }
     $logado = $_SESSION['usuario'];


    if(isset($_POST['submit']))
    {
        
       include_once('config3.php');

       $nome = $_POST['nomes'];
       $contacto = $_POST['contacto'];
       $operadora = $_POST['operadora'];
       $tecnologia = $_POST['techno'];
       $estado_rede = $_POST['estado'];
       $tempoImpacto = $_POST['tempoimpacto'];
       $distrito = $_POST['distrito'];
       $bairro = $_POST['bairro'];
       $area_impactada = $_POST['geografia'];
       $comentarios = $_POST['coment']; 

       $result = mysqli_query($conexao, "INSERT INTO reporting (nome,contacto,operadora,tecnologia,
                                         estado_rede,tempo_inicio,distrito,bairro,area_impacto,descricao)

                                  VALUES ('$nome','$contacto','$operadora','$tecnologia','$estado_rede','$tempoImpacto',
                                          '$distrito','$bairro','$area_impactada','$comentarios')" );     
                                         
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formelements.css">
    <link rel="stylesheet" href="elements.css">
    <link rel="stylesheet" href="HeadStyle.css">
</head>
<body>

    <div>
        <figure>
            <img src="Icons/NetWork State reporting.png" alt="" class="logo" id="logo">
            
            <img src="images/fundo3334.jpg" alt="" class="tela" id="tela">
        </figure>
    </div>
                 <div  class="logoback" id="logoback"> 
                       <div></div>
                    
                 </div>

                             <div class="bemv"><strong>SEJA BEMVINDO!</strong></div>
            <div>
                <figure>
                    <img src="images/fundo principal2.jpg" alt="" class="fundo">
                    <img src="images/fundo principal3.jpg" alt="" class="fundo2">
                </figure>
            </div>
                                <div class="cabecalho">
                                     <div><label class="Iniciar">Inicio</label></div>
                                     <div class=""></div>
                                     <div></div>
                                </div>

                          <div>
                              <strong>Antenas</strong>
                          </div>
    <div class="time">
        <div><figure><img src="Icons/user.png" alt="" class="user"></figure></div>
        <div class="linha"></div>

        <a href="login.php"><div class="logbtn" style="font-family: Arial, Helvetica, sans-serif; color: white;">Sign In</div></a>
        <a href="signUp"><div class="sgnbtn" style="font-family: Arial, Helvetica, sans-serif; color: white;">Sign Up</div></a>
    </div>

                <div class=" iconGeral">
                          <div class="iconTitle"><Strong>O NOSSO OBJECTIVO É GARANTIR ASSITÊNCIA E SUPORTE</Strong></div>

    <div class="icones" id="icones">
                     <div class="iconDsc">
                        <Strong class="iconAntena">Antenas</Strong>
                        <strong class="iconManutencao">Manutenção</strong>
                        <strong class="iconInt">Internet</strong>
                        <strong class="iconCom">Comunicação</strong>
                     </div>
        <figure class="conjuntoIcn">
            <img src="Icons/antena-de-radio.png" alt="antena de radio" class="antenaIcn" id="antenaIcn">
            <img src="Icons/manutencao.png" alt="imagem sobre manutencao" class="manutencaoIcn" id="manutencaoIcn">
            <img src="Icons/www.png" alt="internet" class="internetIcn" id="internetIcn"> 
            <img src="Icons/comentarios.png" alt="" class="comentIcn" id="comentIcn">
        </figure>
    </div>
            </div>
                <div class="backgroundAside" id="backgroundAside">
                    <div class="line"></div>
                    <div class="separacao"></div>
                    <div class="separacao2"></div>
                    <div class="separacao3"></div>
                    <div class="separacao4"></div>
                    <div class="formline2"></div>
            </div>
                          
        <div class="formBack" id="formBack"></div>

<h1 style="font-family:Arial, Helvetica, sans-serif;" class="titulo">
    Actualização do desempenho da rede nos distritos de Maputo</h1>

    <div class="allForm" id="allForm">
    <h2 style="font-family:Arial, Helvetica, sans-serif;" class="subtitulo">
        FORMULÁRIO</h2> 
    <h3 style="font-family:Arial, Helvetica, sans-serif;" class="formHelp">
        Preencha o formulário e use dados precisos</h3>

<div class="box">    
<form action="Inicio.php" method="POST">
    <div>
        <strong style="font-family:Arial, Helvetica, sans-serif;">Nome</strong><br>
        <input type="text" name="nomes" id="nomes" class="nom"  
         placeholder="insira o seu nome" required>
    </div> 
<br><br>          
        <div>
            <strong style="font-family:Arial, Helvetica, sans-serif;">Contacto</strong><br>
            <input type="text" name="contacto" id="contacto" class="contact" 
             placeholder="Insira o contacto">
        </div>
<br><br>    
            <div>
                <Strong style="font-family:Arial, Helvetica, sans-serif;">Operadora</Strong><br>
                   <input type="text" name="operadora" id="operadora" class="opera" placeholder="Insira a operadora">
            </div>
<br><br>
<div>
    <strong style="font-family:Arial, Helvetica, sans-serif;">Tecnologia</strong><br>
       <select name="techno" id="techno" class="tech">
           <option name="tech" value="3G"> 3G</option>
           <option name="tech" value="3.5G"> 3.5G</option>
           <option name="tech" value="4G"> 4G</option>
           <option name="tech" value="4.5G"> 4.5G</option>
    </select>
</div>
<br><br>
                <div>
                    <strong style="font-family:Arial, Helvetica, sans-serif;" id="redestr">Estado da rede</strong><br>
                    <input type="radio" name="estado" value="Boa" id="estado" class="estado"> Boa 
                    <input type="radio" name="estado" value="Razoavel" id="estado" class="estado"> Razoavel
                    <input type="radio" name="estado" value="Oscilante" id="estado" class="estado"> Oscilante
                    <input type="radio" name="estado" value="Pessimo" id="estado" class="estado"> Pessimo
                </div> 
<br><br> 


        <div class="formPart" id="formPart">
            <div>
                <strong style="font-family:Arial, Helvetica, sans-serif;">Início da ocorrência</strong><br>
                <select name="tempoimpacto" id="tempoimpacto" class="tempoimpact">
                <option name="tempoimpacto" value="Alguns meses atras">Alguns meses atrás</option>
                <option name="tempoimpacto" value="Alguns anos atras">Alguns anos atrás</option>
                <option name="tempoimpacto" value="Sempre">Sempre</option>
                </select>
            </div> 
<br><br>   
        <div>
            <Strong style="font-family:Arial, Helvetica, sans-serif;">Distrito</Strong><br>
               <select name="distrito" id="distrito" class="distrit">
                    <option name="distrito" value="Matola">Matola</option>
                    <option name="distrito" value="C.Provincial">Capital Provincial</option>
                    <option name="distrito" value="Marracuene">Marracuene</option>
                    <option name="distrito" value="Manhica">Manhica</option>
                    <option name="distrito" value="Magude">Magude</option>
                    <option name="distrito" value="Moamba">Moamba</option>
                    <option name="distrito" value="Boane">Boane</option>
                    <option name="distrito" value="Namaacha">Namaacha</option>
                    <option name="distrito" value="Matituine">Matituine</option>
                </select>
        </div>    
<br><br>
    <div>
        <Strong style="font-family:Arial, Helvetica, sans-serif;">Bairro</Strong><br>
        <input type="text" name="bairro" id="bairro" class="bairr" placeholder="Insira o bairo" required>
    </div>
<br><br>
<div>
    <Strong style="font-family:Arial, Helvetica, sans-serif;">Escopo do impacto</Strong><br>
    <select name="geografia" id="geografia" class="geograf">
        <option value="eu">Apenas eu</option>
        <option name="geografia" value="Meu bairso">Meu bairo</option>
        <option name="geografia" value="Alguns Bairros">Alguns bairros</option>
        <option name="geografia" value="Todo Distrito">Todos o distrito</option>
    </select>
</div>
</div>


<div class="formInferior" id="formInferior">
<br><br>
    <div>
        <strong style="font-family:Arial, Helvetica, sans-serif;">Descrição</strong><br>
        <textarea name="coment" id="coment" cols="30" rows="10" class="descri" 
        style="font-family:Arial, Helvetica, sans-serif;" placeholder="Descreva o problema aqui!"></textarea>
    </div>     
<br> 
        <div>
            <input type="checkbox" name="checkb" id="checkb" value="termosCondicoes" class="check2">
            <Strong style="font-family:Arial, Helvetica, sans-serif;" class="condicoes" id="condicoes">Concorda com os termos e condições?</Strong>       
        </div> 
<br>
            <div>
                <input type="submit" name="submit" id="submit" value="submeter" class="submeter"
                               style="font-family:Arial, Helvetica, sans-serif;">
            </div>    
</form>
            </div>
        </div>
    </div>
<div class="showUser">
    <?php
    echo "<h2>$logado<h2/>"
     ?>
</div>
</body>
</html>