<?php
    include_once('config3.php');

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT*FROM reporting WHERE id_report LIKE '%$data%' or nome LIKE '%$data%' or distrito LIKE '%$data%' 
                                      or nome LIKE '%$data%' ORDER BY id_report DESC";
        
    } 
    else
    {  
        $sql = "SELECT*FROM reporting ORDER BY id_report DESC"; 

    }

    
    $result = $conexao->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">    
    
</head>
<body>

<style>
      .table{
        margin-top: 60px;
        font-size:13px;
      }

      body{
        height: 1200px;
        background-color: rgb(32, 36, 51);
      }
      .titulo{
             padding: 95px 560px;
             background-color: rgb(10, 10, 19);
             border-radius: 20px;
             font: arial;
             font-size: 40px;
             font-family:Arial, Helvetica, sans-serif;
             color:white;
             font-style:bold;
             margin-left: 16px;
      }
            .pesquisa{
                  width: 330px;
                  height:45px;
                  border: 3px;
                  border-color: rgb(31, 255, 124);
                  border-style: solid;
                  border-radius: 30px;
                  margin-top: 15px;
                  margin-left: 507px;
                  text-align:center;
                  color:white;
                  background-color:transparent;
            }
            .pesquisa:hover{
                background-color:white;
                color:black;
            }
            .lupa{
                position: absolute;
                width:30px;
                margin-top: 22px;
                margin-left: -320px;
                background-color: transparent;
            }
</style>
         <div>
            <StrongS class="titulo"> LISTAGEM</Strong>
        </div>
              <div class="box-search">
                   <input type="search" class="pesquisa" id="pesquisar" placeholder="Pesquise por registros">
                   <img src="Icons/analise" alt="" class="lupa" onclick="searchData()">
              </div>

          <div class="" >
               <table class="table text-white">
                    <thead>
                          <tr class="edit-bg">
                            <th></th>
                              <th scope="col">#</th> 
                              <th></th>  
                              <th scope="col">Nome</th>
                              <th></th>
                              <th scope="col">Usuario</th>
                              <th></th>
                              <th scope="col">Contacto</th>
                              <th></th>
                              <th scope="col">operadora</th>
                              <th></th>
                              <th scope="col">Tecnologia</th>
                              <th></th>
                              <th scope="col">E.  rede</th>
                              <th></th>
                              <th scope="col">Tempo inicio </th>
                              <th></th>
                              <th scope="col">Distrito</th>
                              <th></th>
                              <th scope="col">Bairro</th>
                              <th></th>
                              <th scope="col">A. Impacto</th>
                              <th></th>
                              <th scope="col">Descricao</th> 
                              <th></th>
                              <th scope="col">...</th>
                              <th></th>
                              <th></th>
                          </tr>
                    </thead>
            <tbody class="table-striped">
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td></td>";
                        echo "<td>".$user_data['id_report']."<td>"; 
                        echo "<td>".$user_data['nome']."<td>";
                        echo "<td>".$user_data['usuario']."<td>";
                        echo "<td>".$user_data['contacto']."<td>";
                        echo "<td>".$user_data['operadora']."<td>";
                        echo "<td>".$user_data['tecnologia']."<td>";
                        echo "<td>".$user_data['estado_rede']."<td>";
                        echo "<td>".$user_data['tempo_inicio']."<td>";
                        echo "<td>".$user_data['distrito']."<td>";
                        echo "<td>".$user_data['bairro']."<td>";
                        echo "<td>".$user_data['area_impacto']."<td>";
                        echo "<td>".$user_data['descricao']."<td>";
                        echo " <td>
                            <a href='delete.php?id_report=$user_data[id_report]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                    </svg>
                            </a>
                               </td>" ;
                        echo " <td>
                            <a href='edit.php?id_report=$user_data[id_report]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
                                    </svg>
                                    </a>         
                               </td>" ;
                        echo "<td></td>";
                        echo "<tr>";
                    }
                 ?>
            </tbody>
               </table>
          </div>
</body>
<script>
    var search = document.getElementById('pesquisar');   

    search.AddEventListener("keydown", function(event){
              if(event.key === "Enter")
              {
                searchData();
              }
    });

    function searchData()
    {
        window.location = 'listagem.php?search='+search.value;
    }
</script>
</html>