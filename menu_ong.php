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

    if(isset($_GET['search'])){
        $search = mysqli_real_escape_string($conn, $_GET['search']);

        $sql_animal_image = "SELECT tb02_id_animal, tb02_caminho_foto, tb03_descricao, tb04_descricao, tb05_descricao 
        FROM tb02_animal JOIN tb03_cor on tb02_id_cor = tb03_id_cor  
                         JOIN tb04_especie on tb02_id_especie = tb04_id_especie
                         JOIN tb05_porte ON tb02_id_porte = tb05_id_porte
                         WHERE tb02_para_ong = 1
                         AND tb03_descricao LIKE '%$search%'
                         OR tb04_descricao LIKE '%$search%'
                         OR tb05_descricao LIKE '%$search%'";
        $sql_animal_query = $conn->query($sql_animal_image) or die($conn->error);                 
    }
    else{
        $sql_animal_image = "SELECT * FROM tb02_animal WHERE tb02_para_ong = 1 order by tb02_data DESC";
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
    <link href="./assets/css/menu_ong.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/favicon-32x32.png" type="image/png">
    <title>Me Auche</title>
</head>
    
<body>
    
    <?php include('includes/header.php')?>

    <section class="main">
        <div class="container">
        <?php while($result = $sql_animal_query->fetch_assoc()){
            ?>
            <div class="container-iten">
                <img onclick="location = 'animal.php?id=<?= $result['tb02_id_animal']?>'" src="<?php echo $result['tb02_caminho_foto']?>" class="animal-photo">
            </div>
            <?php 
            }
            ?>
    </section>
</body>
<script src="assets/js/header.js"></script>
</html>
