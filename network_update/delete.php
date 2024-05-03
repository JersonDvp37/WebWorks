<?php

include_once('config3.php');

if(!empty($_GET['id_report']))
{
include_once('Config3.php');

    $id_report = $_GET['id_report'];

    $sqlSelect = "SELECT*FROM reporting where id_report=$id_report"; 
    $result = $conexao->query($sqlSelect);

    if($result ->num_rows > 0)
    {
         while($user_data = mysqli_fetch_assoc($result))
         {
            $sqlDelete = "DELETE FROM reporting  WHERE id_report=$id_report";
            $sqlDelete = $conexao->query($sqlDelete);

         }
    }
} 
header('location: listagem.php');

?>