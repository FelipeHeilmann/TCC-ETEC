<?php 
    $dbHost = '186.202.152.239';
    $dbUser = 'bd_meauche';
    $dbSenha = 'bdmeauchetcc'; 
    $dbName = 'bd_meauche';

    $conn = new mysqli($dbHost,$dbUser,$dbSenha,$dbName);
    if($conn->connect_errno){
        echo $conn->connect_errno;
    }
?>