<?php 
    include('conexao.php');
    session_start();
     if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true )){
         unset($_SESSION['email']);
         unset($_SESSION['senha']);
         header('Location: index.php');
    }

    $user_id=$_SESSION['id'];
    $id_animal = $_GET['id'];

    $sql = "(SELECT *
            FROM tb02_animal JOIN tb01_usuario ON tb01_id_usuario = tb02_id_usuario
                     JOIN tb03_cor ON tb02_id_cor = tb03_id_cor
                     JOIN tb04_especie ON tb02_id_especie = tb04_id_especie
                     JOIN tb05_porte ON tb02_id_porte = tb05_id_porte
                     JOIN tb07_status ON tb02_id_status = tb07_id_status
    WHERE tb02_id_animal ='$id_animal')";
    $sql_exec=$conn->query($sql) or die($conn->error);
    $result = $sql_exec->fetch_assoc();
    $slq_user = $conn->query("SELECT tb01_id_nivel FROM tb01_usuario WHERE tb01_id_usuario = {$_SESSION['id']} ");
    $user_data = $slq_user->fetch_assoc();
    if($user_data['tb01_id_nivel'] == 1){
        $tela = 'user';
    }
    else{
        $tela = 'ong';
    }
    if(isset($_GET['delete'])){
        $slq_delete = "DELETE FROM tb02_animal WHERE tb02_id_animal ={$_GET['delete']}";
        $slq_delete_query= $conn->query($slq_delete) or die($conn->error);
        header('Location: menu_user.php');

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/32b5383cc3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="crossorigin=""></script>
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/animal.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/png">
    <title>Animal</title>
</head>
<body>
        <section class="banner">
            <button onclick="location = 'menu_<?php echo $tela;?>.php'" class="back-btn" id="back-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </button>
            <img src="<?php echo $result['tb02_caminho_foto'];?>" class="animal-photo" alt="">
        </section>
        <main>
            <section class="info">
                <div class="animal-info">
                    <h1>Caraterísticas</h1>
                    <h2>Espécie</h2>
                    <h3><?php echo $result['tb04_descricao'];?></h3>
                    <h2>Porte</h2>
                    <h3><?php echo $result['tb05_descricao'];?></h3>
                    <h2>Cor</h2>
                    <h3><?php echo $result['tb03_descricao'];?></h3>
                    <h2>Denunciado por</h2>
                    <h3><?php echo $result['tb01_nome'];?></h3>
                    <h2>Dia e Horário</h2>
                    <h3><?php echo date("d/m/Y H:i",strtotime($result['tb02_data']));?></h3>
                    <input id="latitude_animal" type="text" value="<?php echo $result['tb02_latitude'];?>">
                    <input id="longitude_animal" type="text" value="<?php echo $result['tb02_longitude'];?>">
                    <h2>Observações</h2>
                    <h3><?php echo $result['tb02_observacoes'];?></h3>
                    <h2>Contato</h2>
                    <h3><?php echo $result['tb02_contato'];?></h3>
                    <h2>Status da denúncia<h2>
                    <h3><?php echo utf8_encode($result['tb07_descricao'])?></h3>
                    <?php
                        switch(true) {
                            case($user_id == $result['tb02_id_usuario'] && $result['tb02_id_status'] == 1):
                                echo "<a href='muda_status.php?id={$id_animal}&status=2'><button class='status'>Em espera</button></a>";
                                echo "<a href='muda_status.php?id={$id_animal}&status=3'><button class='status'>Encontrado</button></a>";
                                break;
                            case($user_id == $result['tb02_id_usuario'] && $result['tb02_id_status'] == 2):
                                echo "<a href='muda_status.php?id={$id_animal}&status=3'><button class='status'>Encontrado</button></a>";
                                echo "<a href='muda_status.php?id={$id_animal}&status=1'><button class='status'>Cancelar resgate</button></a>"; 
                                break;
                            case($user_data['tb01_id_nivel'] == 2 && $result['tb02_id_status'] == 1):
                                echo "<a href='muda_status.php?id={$id_animal}&status=2'><button class='status'>Aceitar Denuncia</button></a>";
                                echo "<a href='muda_status.php?id={$id_animal}&status=3'><button class='status'>Resgatado</button></a>";
                                break;
                            case($user_data['tb01_id_nivel'] == 2 && $result['tb02_id_status'] == 2):
                                echo "<a href='muda_status.php?id={$id_animal}&status=3'><button class='status'>Resgatado</button></a>"; 
                                echo "<a href='muda_status.php?id={$id_animal}&status=1'><button class='status'>Cancelar resgate</button></a>";      
                        }
                    ?>
                </div>
            </section>    
                <section class="map">
                <div id="map" class="map-image"></div>
            </section>
            <?php if($user_id == $result['tb02_id_usuario']) echo '<button class="delete-button">Exlcuir denúncia</button>'?>
            <div class="modal" id="modal">
                <form class="modal-form">
                    <h2>Deseja mesmo excluir essa denúncia?</h2>
                <a href="?id=<?php echo $id_animal?>&delete=<?php echo $id_animal?>"><button type="button">Excluir</button></a>
                    <button id="cancel" type="button">Cancelar</button>
                </form>
            </div>
        </main>
</body>
<script src="assets/js/animal.js"></script>
</html>