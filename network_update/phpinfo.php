<?php phpinfo();  ?>
<?php      
      include("Config3.php");

    function getData(){
         $dados = array();
         $dados[1] = $_POST['nomes'];
         $dados[2] = $_POST['contacto'];
         $dados[3] = $_POST['operadora'];
         $dados[4] = $_POST['techno'];
         $dados[5] = $_POST['estado'];
         $dados[6] = $_POST['tempoimpacto'];
         $dados[7] = $_POST['distrito'];
         $dados[8] = $_POST['bairro'];
         $dados[9] = $_POST['geografia'];
         $dados[10] = $_POST['coment'];
         return $dados;
    }
    
    if(isset($_POST['submit']))
    {
        $info = getData();
        $insert = "INSERT INTO [relatorio] ([nome],[contacto],[operadora],[tecnologia],
        [estado_rede],[tempo_inicio],[distrito],[bairro],[area_impacto],[descricao]) 

        values ('$info[1]', '$info[2]', '$info[3]', '$info[4]', '$info[5]', '$info[6]', '$info[7]', '$info[8]', 
                '$info[9]', '$info[10]')";
                 $result = $db->prepare($db, $insert);
    }
?>