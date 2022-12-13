<?php
    function validateSize($email, $name, $phone, $pass, $confirmPass){
        if(strlen($email) > 2 && strlen($name) > 2 && strlen($phone) > 2 && strlen($pass) > 2 && strlen($confirmPass) > 2){
            return true;
        }
        else{
            return false;
       }  
    }
    function validateEmail($email){
        include('conexao.php');
        $sql = "SELECT * FROM tb01_usuario WHERE tb01_email = '$email'";
        $sql_exec = $conn->query($sql);
        if(mysqli_num_rows($sql_exec) < 1 && filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        else {
            return false;
        }
    }

?>    