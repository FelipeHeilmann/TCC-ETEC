<?php
    include('conexao.php');
    session_start();
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true )){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
        
    }
    else{
        $login_email = $_SESSION['email'];
        $login_id = $_SESSION['id'];
        $login_name = $_SESSION['name'];   
    } 

    if(isset($_SESSION['success-message'])){
        echo $_SESSION['success-message'];
         unset($_SESSION['success-message']);
    }

    if(isset($_SESSION['error-message'])){
        echo $_SESSION['error-message'];
        unset($_SESSION['error-message']);
    }

    if(isset($_SESSION['file-error'])){
        echo $_SESSION['file-error'];
        unset($_SESSION['file-error']);
    }

    if(isset($_GET['search'])){
        $search = mysqli_real_escape_string($conn, $_GET['search']);

        $sql_animal_image = "SELECT tb02_id_animal, tb02_caminho_foto, tb03_descricao, tb04_descricao, tb05_descricao 
        FROM tb02_animal JOIN tb03_cor ON tb02_id_cor = tb03_id_cor  
                         JOIN tb04_especie ON tb02_id_especie = tb04_id_especie
                         JOIN tb05_porte ON tb02_id_porte = tb05_id_porte
                         WHERE NOT tb02_para_ong = 0 AND (tb02_id_status = 1 OR tb02_id_status = 2)
                         AND tb04_descricao LIKE '$search'
                         OR tb03_descricao LIKE '$search'
                         OR tb05_descricao LIKE '$search'";
        $sql_animal_query = $conn->query($sql_animal_image) or die($conn->error);                 
    }
    else{
        $sql_animal_image = "SELECT * FROM tb02_animal WHERE tb02_para_ong = 0 AND tb02_id_status = 1 or tb02_id_status = 2 order by tb02_data DESC";
        $sql_animal_query = $conn->query($sql_animal_image) or die($conn->error);
    }

    $sql_profile_image = ("SELECT * FROM tb01_usuario WHERE tb01_id_usuario = '$login_id'");
    $sql_profile_query = $conn->query($sql_profile_image) or die($conn->erro);
    $profileIcon = mysqli_fetch_assoc($sql_profile_query);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/32b5383cc3.js" crossorigin="anonymous"></script>
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/header.css" rel="stylesheet">
    <link href="./assets/css/menu_user.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/png">
    <title>Me Auche</title>
</head>

<body>
    <?php include('includes/header.php');?>
    <main id="main">

        <?php include_once('includes/modal_abandonado.php');?>

        <?php include_once('includes/modal_risco.php');?>
        
        <section class="carousel">
            <?php while($result = $sql_animal_query->fetch_assoc()){
                ?>
                 <img onclick="location = 'animal.php?id=<?= $result['tb02_id_animal'];?>'" src="<?php echo $result['tb02_caminho_foto']?>" class="carousel-image">
                <?php 
                }
                ?>
        </section>
    </main>

        <footer id="footer">
            <img src="./assets/images/icon_lost_animal.png" class="icon" id="perdido">
            <img onclick="location = 'menu_user.php'" src="./assets/images/icon_home.png" class="icon" id="home">
            <img src="./assets/images/icon_risk_animal.png" class="icon" id="risco">
        </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/cadastro.js"></script>  
<script src="assets/js/header.js"></script>
</html>