<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['sbmt']) && !empty($_POST['usu']) && !empty($_POST['sen']))
    {
        include_once('Config3.php');
        
        $usu = $_POST['usu'];
        $sen   = $_POST['sen'];

        $sql_attempt_check = "SELECT COUNT(*) AS attempt_count, MAX(timestamp) AS last_login_time 
                              FROM signup 
                              WHERE usuario = '$usu' 
                              AND timestamp >= NOW() - INTERVAL 1 MINUTE";
                $result_attempt_check = $conexao->query($sql_attempt_check);
                $row_attempt_check = $result_attempt_check->fetch_assoc();
                $attempt_count = $row_attempt_check['attempt_count'];
                $last_login_time = $row_attempt_check['last_login_time'];
        
       
        $sql = "SELECT * FROM signup WHERE usuario = '$usu' and senha = '$sen'";

        $result = $conexao->query($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
           unset($_SESSION['usuario']);
           unset($_SESSION['senha']);
           header("Location: login.php");
        }
        else
        {
            $_SESSION['usuario'] = $usu;
            $_SESSION['senha'] = $sen;
            header("Location: Inicio1st.php");


            $sql_insert_attempt = "INSERT INTO login_attempts (username, timestamp) 
                                    VALUES ('$usu', NOW())";
                         $conexao->query($sql_insert_attempt);
            
        }
    }
    else
    {
        echo 'erro';
    }
    

?>