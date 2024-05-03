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


 if(!empty($_GET['id_report']))
    {    
       include_once('config3.php');

       $id_report = $_GET['id_report'];

       $sqlSelect = "SELECT * FROM reporting WHERE id_report =$id_report";
       $result = $conexao ->query($sqlSelect);

        if($result -> num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
            $nome = $user_data['nome'];
            $contacto = $user_data['contacto'];
            $operadora = $user_data['operadora'];
            $tecnologia = $user_data['tecnologia'];
            $estado_rede = $user_data['estado_rede'];
            $tempo_inicio = $user_data['tempo_inicio'];
            $distrito = $user_data['distrito'];
            $bairro = $user_data['bairro'];
            $area_impacto = $user_data['area_impacto'];
            $descricao = $user_data['descricao'];
            }
        }
        else
        {
            header('location: Inicio1st.php');
        }
                                      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formelementsStart.css">
    <link rel="stylesheet" href="elementsStart.css">
    <link rel="stylesheet" href="HeadStyleStart.css">
    <link rel="stylesheet" href="formelements.css">
</head>
<body class="bodysize">

    <div>
        <figure>
            <img src="Icons/NetWork State reporting.png" alt="" class="logo" id="logo">
            
            <img src="images/bridge1.jpg" alt="" class="tela" id="tela">
        </figure>
    </div>
                 <div  class="logoback" id="logoback"> 
                       <div></div>   
                 </div>

            <div class="navbar">
                <div class="Home"><a href="Inicio1st.php" class="Home">Home</a></div>
                <div class="ReportRecentes">Reportagens recentes</div>
                <div class="formAcess"><a href="Inicio.php" class="formAcess">Fale conosco</a></div>
            </div>

                <div class="blackdown2"></div>

                            <div class="bemv2"><strong>FORMULÁRIO</strong></div>

            <div>
                <figure>
                    <img src="" alt="" class="fundo">
                    <img src="" alt="" class="fundo2">
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
    <div class="time2">
        <div class="linha"></div>
    </div>
    <a href="login.php"><div class="logbtn2" style="font-family: Arial, Helvetica, sans-serif; color: white;">Sign In</div></a>
    <a href="signUp"><div class="sgnbtn2" style="font-family: Arial, Helvetica, sans-serif; color: white;">Sign Up</div></a>

            <div><figure><img src="Icons/user.png" alt="" class="user3"></figure></div>

                <div class=" iconGeral">
                          <div class="iconTitle22"><Strong>O NOSSO OBJECTIVO É GARANTIR ASSITÊNCIA E SUPORTE</Strong></div>

    <div class="icones2" id="icones2">
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
                    <div class="line33"></div>
                    
            </div>
                          
        <div class="formBacck" id="formBack"></div>
    
    <div class="allForm" id="allForm">
    <h2 style="font-family:Arial, Helvetica, sans-serif;" class="subtitulo2">
        COMPARTILHE O DESEMPENHO DA REDE DO SEU DISTRITO OU BAIRRO</h2> 
        <h2 style="font-family:Arial, Helvetica, sans-serif;" class="subtitulo3">
    <h3 style="font-family:Arial, Helvetica, sans-serif;" class="formHelp">
        Preencha o formulário e use dados precisos</h3>

        <div class="box">    
            <form action="SaveEdit.php" method="pOST"  class="formularios">
                <div>
                    <strong style="font-family:Arial, Helvetica, sans-serif;">Nome</strong><br>
                    <input type="text" name="nome" id="nomes" class="nom"  
                     placeholder="insira o seu nome" value="<?php echo $nome ?>" required>
                </div> 
            <br><br>          
                    <div>
                        <strong style="font-family:Arial, Helvetica, sans-serif;">Contacto</strong><br>
                        <input type="text" name="contacto" id="contacto" class="contact" 
                         placeholder="Insira o contacto" value="<?php echo $contacto ?>" required>
                    </div>
            <br><br>    
                        <div>
                            <Strong style="font-family:Arial, Helvetica, sans-serif;">Operadora</Strong><br>
                               <input type="text" name="operadora" id="operadora" class="opera" 
                               placeholder="Insira a operadora" value="<?php echo $operadora ?>" required>
                        </div>
            <br><br>
            <div>
                <strong style="font-family:Arial, Helvetica, sans-serif;">Tecnologia</strong><br>
                   <select name="tecnologia" id="techno" class="tech">
                       <option name="tecnologia" value="<?php echo $tecnologia ?>"> 3G</option>
                       <option name="tecnologia" value="3.5G"> 3.5G</option>
                       <option name="tecnologia" value="4G"> 4G</option>
                       <option name="tecnologia" value="4.5G"> 4.5G</option>
                </select>
            </div>
            <br><br>
                            <div>
                                <strong style="font-family:Arial, Helvetica, sans-serif;" id="estado">Estado da rede</strong><br>
                                <div class="checkGap">
                                <input type="checkbox" name="estado_rede" value="Boa" <?php echo $estado_rede == 'Boa'?'checked':'' ?> id="estado" class="estado"> Boa 
                                <input type="checkbox" name="estado_rede" value="Razoavel" <?php echo $estado_rede == 'Razoavel'?'checked':'' ?> id="estado" class="estado"> Razoavel
                                <input type="checkbox" name="estado_rede" value="Oscilante" <?php echo $estado_rede == 'Oscilante'?'checked':'' ?> id="estado" class="estado"> Oscilante
                                <input type="checkbox" name="estado_rede" value="Pessimo" <?php echo $estado_rede == 'Pessimo'?'checked':'' ?> id="estado" class="estado"> Pessimo
                            </div>
                            </div> 
            <br><br> 
            
            
                    <div class="formPart" id="formPart">
                        <div>
                            <strong style="font-family:Arial, Helvetica, sans-serif;">Início da ocorrência</strong><br>
                            <select name="tempo_inicio" id="tempoimpacto" class="tempoimpact">
                            <option name="tempo_inicio" value="Alguns meses atras" <?php echo $tempo_inicio  == 'Alguns meses atras'?'checked':'' ?>>Alguns meses atrás</option>
                            <option name="tempo_inicio" value="Alguns anos atras" <?php echo $tempo_inicio  == 'Alguns anos atras'?'checked':'' ?>>Alguns anos atrás</option>
                            <option name="tempo_inicio" value="Sempre" <?php echo $tempo_inicio  == 'Sempre'?'checked':'' ?>>Sempre</option>
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
                    <input type="text" name="bairro" id="bairro" class="bairr" placeholder="Insira o bairo" 
                              value="<?php echo $bairro ?>" required>
                </div>
            <br><br>
            <div>
                <Strong style="font-family:Arial, Helvetica, sans-serif;">Escopo do impacto</Strong><br>
                <select name="area_impacto" id="geografia" class="geograf">
                    <option name="area_impacto" value="eu">Apenas eu</option>
                    <option name="area_impacto" value="Meu bairro">Meu bairo</option>
                    <option name="area_impacto" value="Alguns Bairros">Alguns bairros</option>
                    <option name="area_impacto" value="Todo Distrito">Todo o distrito</option>
                </select>
            </div>
            </div>
            
            
            <div class="formInferior" id="formInferior">
            <br><br>
                <div>
                    <strong style="font-family:Arial, Helvetica, sans-serif;">Descrição</strong><br>
                    <textarea name="descricao" id="coment" cols="30" rows="10" class="descri" 
                    style="font-family:Arial, Helvetica, sans-serif;" 
                          value="<?php echo $descricao ?>"placeholder="Descreva o problema aqui!"></textarea>
                </div>     
            <br> 
                    <div>
                        <input type="checkbox" name="checkb" id="checkb" value="termosCondicoes" class="check2">
                        <Strong style="font-family:Arial, Helvetica, sans-serif;" class="condicoes" id="condicoes">Concorda com os termos e condições?</Strong>       
                    </div> 
            <br>
                    <input type="hidden" name="id_report" value="<?php echo $id_report ?>">
                        <div>
                            <input type="submit" name="update" id="update" value="submeter" class="submeter"
                                           style="font-family:Arial, Helvetica, sans-serif;">
                        </div>    
            </form>

        </div>
    </div>
<div class="showUser3">
    <?php
    echo "<h2>$logado<h2/>"
     ?>
</div>
</body>
</html>