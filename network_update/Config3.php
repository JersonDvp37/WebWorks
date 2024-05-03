<?php
     
     $dbHost = 'localhost';
     $dbUsername = 'root';
     $dbPassword ='';
     $dbName = 'network_problem_report';

     $conexao = new mysqli ($dbHost, $dbUsername, $dbPassword,$dbName);

     if($conexao->connect_errno)
     {
          echo "Erro";
     }
     else
     {
           
     }

?>