<?php 
    include('conexao.php');
    session_start();
    if(isset($_POST['submit-risk'])){
    $size = $_POST['select_size_risk'];
    $color = $_POST['select_color_risk'];
    $specie = $_POST['select_specie_risk'];
    $note= mysqli_real_escape_string($conn, $_POST['note_risk']);
    $phone = mysqli_real_escape_string($conn, $_POST['contact_risk']);
    $latitude = $_POST['latitude_risk'];
    $longitude = $_POST['longitude_risk'];    
    $user_id = $_SESSION['id'];
    if(isset($_FILES['photo-risk'])){   
        $file = $_FILES['photo-risk'];
         
        $folder= "arquivos/risco/";
        $fileName = $file['name'];
        $newName = md5(time()) ; 
        $extension = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
        $path= $folder . $newName . "." . $extension;
        $status = 1;

        if($extension != "jpg" && $extension !="jpeg" && $extension != "png"){
            $_SESSION['file-error']= "<script>alert('Arquivo não aceito!')</script>";
            header('Location: menu_user.php');
            die();
        }
        $move_file= move_uploaded_file($file['tmp_name'], $path);
        if($move_file){
            $conn->query("INSERT INTO tb02_animal (tb02_id_usuario, tb02_id_porte, tb02_id_especie, tb02_id_cor, tb02_id_status ,tb02_observacoes, tb02_contato, tb02_data, tb02_nome_foto, tb02_caminho_foto, tb02_para_ong, tb02_latitude, tb02_longitude) VALUES ('$user_id','$size','$specie','$color','$status','$note','$phone', NOW() ,'$fileName','$path', '1','$latitude', '$longitude')") or die($conn->error);
            $_SESSION['success-message']= "<script>alert('Denúncia feita com sucesso!')</script>";
            header('Location: menu_user.php');
        }
        else{
            $_SESSION['error-message']= "<script>alert('Erro o fazer a denúncia!')</script>";
            header('Location: menu_user.php');
        }
    }
}

?>