<?php
    include('conexao.php');
    if(isset($_POST['ong-insert'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cnpj = $_POST['cnpj'];
        $password = $_POST['password'];
        $crypt_password = password_hash($password, PASSWORD_DEFAULT);
        $phone = $_POST['phone'];
        $level = 2;
        $path= "arquivos/perfil/default_icon.png";
    
        $sql_insert="INSERT INTO tb01_usuario (tb01_nome, tb01_email, tb01_cnpj, tb01_senha, tb01_telefone, tb01_id_nivel, tb01_nome_foto, tb01_caminho_foto) VALUES ('$name','$email','$cnpj','$crypt_password','$phone', '$level', 'default_icon', '$path')";
        $slq_exec_insert=$conn->query($sql_insert) or die($conn->error);
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlcui ong</title>
</head>
<body>
    <form method="post">
        <label>Nome</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="text" name="email">

        <label>CNPJ</label>
        <input type="text" name="cnpj">

        <label>Senha</label>
        <input type="text" name="password">

        <label>Telefone</label>
        <input type="text" name="phone">

        <button type="submit" name="ong-insert">Enviar</button>
    </form>
</body>
</html>