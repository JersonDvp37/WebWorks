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

     include_once('config3.php');
    //table usuario  descricao
    $sql = "SELECT*FROM reporting ORDER BY id_report DESC"; 

    $result = $conexao->query($sql);


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
    <link rel="stylesheet" href="formelementsStart.css">
    <link rel="stylesheet" href="elementsStart.css">
    <link rel="stylesheet" href="HeadStyleStart.css">
</head>
<body>

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
                <div class="formAcess"><a href="Inicio.php" class="formAcess" action="testeLogin.php" method="POST">Fale conosco</a></div>
            </div>

                 <div><figure><img src="" alt=""></figure></div>

                <div class="blackdown"></div>

                            <div class="bemv"><strong>SEJA BEMVINDO!</strong></div>

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
    <div class="time">
        <div class="linha"></div>
    </div>
    <a href="login.php"><div class="logbtn" style="font-family: Arial, Helvetica, sans-serif; color: white;">Sign In</div></a>
    <a href="signUp"><div class="sgnbtn" style="font-family: Arial, Helvetica, sans-serif; color: white;">Sign Up</div></a>

            <div class="user"><figure><img src="Icons/user.png" alt="" class="user"></figure></div>

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
                    <div class="line2"></div>
                    
            </div>
                          
        <div class="formBack" id="formBack"></div>
                
                <div class="diganos">
                    <div class="wifi"><figure><a href="Inicio.php" action="testeLogin.php" method="POST"><img src="images/formulario.jpg" alt=""class="wifi"></a></figure></div>
                    <div class="irForm"></div>
                    <div class="descri">DIGA-NOS</div>
                </div>
            

<h1 style="font-family:Arial, Helvetica, sans-serif;" class="titulo"></h1>

    <div class="allForm" id="allForm">
    <h2 style="font-family:Arial, Helvetica, sans-serif;" class="subtitulo2">
        COMPARTILHE O DESEMPENHO DA REDE DO SEU DISTRITO OU BAIRRO</h2> 
        <h2 style="font-family:Arial, Helvetica, sans-serif;" class="subtitulo3">
            VEJA O DESEMPENHO DA REDE EM OUTROS DISTRITOS</h2>
    <h3 style="font-family:Arial, Helvetica, sans-serif;" class="formHelp">
        Preencha o formulário e use dados precisos</h3>


<style>
    .userReportings{
        position: absolute;
        margin-top: 470px;
    }
    .table{
        font-size: 18px;
        border-color:rgb(9, 15, 32);
        border-radius: 10px;
        
        font-family:'Courier New, Courier, monospace';
        width: 1150px;
       
    }
    .tabela tr:nth-child(odd) {
     background-color: rgba(0,0,0,0.05);
          
    }
    .tbody{
        border-radius: 15px;
        border-style: solid;
        height: 300px;
    }
    
    
</style>


        <div class="userReportings" >
               <table class="table tabela">
                    <thead>
                          <tr class="edit">                 
                              <th></th>
                              <th scope="col">Usuario</th>
                              <th></th>
                              <th scope="col">Destrito</th> 
                              <th></th>
                              <th scope="col">Bairro</th> 
                              <th></th>
                              <th scope="col">Descrição</th> 
                              <th></th>
                          </tr>
                    </thead>
            <tbody class="tbody">
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td></td>";
                        echo "<td>".$user_data['usuario']."<td>"; 
                        echo "<td>".$user_data['distrito']."<td>"; 
                        echo "<td>".$user_data['bairro']."<td>"; 
                        echo "<td>".$user_data['descricao']."<td>";
                        echo "<td></td>";
                        echo "<tr>";
                    }
                 ?>
            </tbody>
               </table>
          </div>



<div class="box">    

            </div>
        </div>
    </div>
<div class="showUser4">
    <?php
    echo "<h2>$logado<h2/>"
     ?>
</div>
</body>
</html>