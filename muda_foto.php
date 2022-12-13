<?php
    include('conexao.php');
    session_start();
    $user_id = $_SESSION['id']; 
    $sql = "SELECT * FROM tb01_usuario WHERE tb01_id_usuario = '$user_id'";
    $sql_exec = $conn->query($sql) or die($conn->error);
    $user_data = mysqli_fetch_assoc($sql_exec); 

    if(isset($_FILES['file'])){
        $photo = $_FILES['file'];
        $folder= "arquivos/perfil/$user_id/";
        $fileName = $photo['name'];
        $extension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
        $newName = "profile_icon"; 
        $path= $folder . $newName . "." . $extension;
        $user_id = $_SESSION['id'];
        
        if($extension != "jpg" && $extension !="jpeg" && $extension != "png"){
            $_SESSION['file-error']= "<script>alert('Arquivo não aceito!')</script>";
        
        }
        if(is_dir($folder)){
            $move_file= move_uploaded_file($photo['tmp_name'], $path);
            if($move_file){
                $conn->query("UPDATE tb01_usuario SET tb01_nome_foto ='$fileName', tb01_caminho_foto ='$path' WHERE tb01_id_usuario = '$user_id'")  or die($conn->error);
            }
        }
        else{
            mkdir($folder);
            $move_file= move_uploaded_file($photo['tmp_name'], $path);
            if($move_file){
                $conn->query("UPDATE tb01_usuario SET tb01_nome_foto ='$fileName', tb01_caminho_foto ='$path' WHERE tb01_id_usuario = '$user_id'")  or die($conn->error);
            }
        }
        
 
    } 
 
            
?> 