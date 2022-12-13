<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/png">
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/login.css" rel="stylesheet">
    <link rel="manifest" href="manifest.json"/>    
    <title>Me Auche</title>
</head>
<body>
        <img class="logo" src="./assets/images/logo_without_bg.png" alt="logo">
        <form action="login.php" method="POST" class="login-form">
            <h1>Email</h1>
            <input type="text" name="email" id="email">
            <h1>Senha</h1>
            <input type="password" name="password" id="password" >
            <?php 
                if(isset($_SESSION['error'])){
                echo($_SESSION['error']);
                unset($_SESSION['error']);
                }
	        ?>
            <button type="submit" name="submit">Entrar</button>
            <p class="bottom-text">Não está cadastrado?<a href="tela_cadastro.php" class="link"> Clique aqui </a>para se cadastrar!</p>
        </form>     
</body>
<script>
  if (typeof navigator.serviceWorker !== 'undefined') {
    navigator.serviceWorker.register('pwabuilder-sw.js')
  }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</html>