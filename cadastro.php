<?php
    if(isset($_POST['register'])&& !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['confirm_password']))
    {
        include('conexao.php');
        include('valida.php');
        if(validateSize($_POST['name'], $_POST['email'],$_POST['phone'],$_POST['password'], $_POST['confirm_password']) && validateEmail($_POST['email']))
        {
            $name= mysqli_real_escape_string($conn, $_POST['name']);
            $email= mysqli_real_escape_string($conn, $_POST['email']);
            $phone= mysqli_real_escape_string($conn, $_POST['phone']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
        }
        else
        {
            session_start();
            $_SESSION['error'] = "<p>Preencha os campos corretamente!</p>";
            header('Location: tela_cadastro.php');
        }
        $level = 1;
        if($password == $confirm_password)
        {
            $crypt_password= password_hash($password, PASSWORD_DEFAULT);
            $path= "arquivos/perfil/default_icon.png";
    
            $sql_insert="INSERT INTO tb01_usuario (tb01_nome, tb01_email, tb01_senha, tb01_telefone, tb01_id_nivel, tb01_nome_foto, tb01_caminho_foto) VALUES ('$name','$email','$crypt_password','$phone', '$level', 'default_icon', '$path')";
            $slq_exec_insert=$conn->query($sql_insert) or die($conn->error);
        
            $sql_select = "SELECT * FROM tb01_usuario WHERE tb01_email = '$email'";
            $slq_exec_select=$conn->query($sql_select) or die($conn->error);
            if(mysqli_num_rows($slq_exec_select)==1)
            {
                session_start();
                $user = mysqli_fetch_assoc($slq_exec_select);
                if(password_verify($password, $user['tb01_senha']))
                {
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$senha;
                    $_SESSION['id']=$user['tb01_id_usuario'];
                    $_SESSION['name']=$user['tb01_nome'];
                    header('Location: menu_user.php');
                }
                else
                {
                    unset($_SESSION['email']);
                    unset($_SESSION['password']);
                    header('Location: tela_cadastro.php');
                }
            }
        }
        else
        {
            session_start();
            $_SESSION['error'] = "<p>As senhas não coincidem</p>";
            header('Location: tela_cadastro.php');
        }
    }
    
    else
    {
        header('Location: tela_cadastro.php');
    }

    
?>