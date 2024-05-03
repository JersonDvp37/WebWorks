<?php
   include_once('config3.php');
   session_start();
     //print_r($_SESSION['usuario']);

     if((!isset($_SESSION['usuario']) == true) and ((!isset($_SESSION['senha']) == true)))
     {
           unset($_SESSION['usuario']);
           unset($_SESSION['senha']);
           header("Location: login.php");
     }
     $logado = $_SESSION['usuario'];

      if(isset($_POST['update']))
      {
          $id_report = $_POST['id_report'];
          $nome = $_POST['nome'];
          $contacto = $_POST['contacto'];
          $operadora =$_POST['operadora'];
          $tecnologia = $_POST['tecnologia'];
          $estado_rede = $_POST['estado_rede'];
          $tempo_inicio = $_POST['tempo_inicio'];
          $distrito = $_POST['distrito'];
          $bairro = $_POST['bairro'];
          $area_impacto = $_POST['area_impacto'];
          $descricao = $_POST['descricao'];
          
          $sqlUpdate = "UPDATE reporting SET nome='$nome', contacto='$contacto', operadora='$operadora', tecnologia='$tecnologia',
                        estado_rede='$estado_rede', tempo_inicio='$tempo_inicio', distrito='$distrito', bairro='$bairro', 
                        area_impacto=''$area_impacto, descricao='$descricao'
                        WHERE id_report=$id_report ";

        $result = $conexao ->query($sqlUpdate);
      }
      header("location: listagem.php");


?>