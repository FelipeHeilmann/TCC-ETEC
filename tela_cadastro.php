<?php session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/reset.css" rel="stylesheet">
    <link href="./assets/css/tela_cadastro.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon-32x32.png" type="image/png">
    <title>Me Auche</title>
</head>
<body>
        <img class="logo" src="./assets/images/logo_without_bg.png" alt="logo">
        <form class="register-form" method="POST"  action="cadastro.php">
            <h1>Nome</h1>
            <input type="text" name="name" id="name" placeholder="Apenas 1 sobrenome">
            <h1>Email</h1>
            <input type="text" name="email" id="email">
            <h1>Telefone</h1>
            <input type="phone" name="phone" id="phone">
            <h1>Senha</h1>
            <input type="password" name="password" maxlength="8" id="password">
            <p>Senha de até 8 dígitos</p> 
            <input type="password" name="confirm_password" maxlength="8" placeholder="Confirme a senha">
            <button type="submit" name="register" class="register-form-button">Cadastrar</button>
            <?php if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }?>
        </form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="assets/js/cadastro.js"></script>
</script>
</html>