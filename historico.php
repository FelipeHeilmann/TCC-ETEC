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

    $sql_profile_image = ("SELECT * FROM tb01_usuario WHERE tb01_id_usuario = '$login_id'");
    $sql_profile_query = $conn->query($sql_profile_image) or die($conn->erro);
    $profileIcon = mysqli_fetch_assoc($sql_profile_query);

    $sql_animal_image = "SELECT * FROM tb02_animal WHERE tb02_para_ong = 0 and tb02_id_usuario = {$login_id} order by tb02_data DESC";
    $sql_animal_query = $conn->query($sql_animal_image) or die($conn->error);
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/png">
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/header.css" rel="stylesheet">
    <link href="./assets/css/menu_user.css" rel="stylesheet">
    <link href="./assets/css/historico.css" rel="stylesheet">
    <title>Me Auche</title>
</head>
<body>
<?php include('includes/header.php');?>
    <main id="main">
        <?php include_once('includes/modal_abandonado.php');?>

        <?php include_once('includes/modal_risco.php');?>
        <h2 class="title">Suas denúncias</h2>
        <section class="carousel">
            <?php while($result = $sql_animal_query->fetch_assoc()){
                ?>
                 <img onclick="location = 'animal.php?id=<?= $result['tb02_id_animal'];?>'" src="<?php echo $result['tb02_caminho_foto']?>" class="carousel-image">
                <?php 
                }
                ?>
        </section>
    </main>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="assets/js/menu.js"></script>s 
<script src="assets/js/header.js"></script>
</html>