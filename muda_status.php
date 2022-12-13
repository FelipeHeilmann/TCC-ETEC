<?php 
    include('conexao.php');

    $status =$_GET['status'];
    $id =$_GET['id'];

    
    $sql = "UPDATE tb02_animal SET tb02_id_status = '$status' WHERE tb02_id_animal = '$id'";
    $sql_exec = $conn->query($sql) or die($conn->error);
    header("Location: animal.php?id={$id}");

?>