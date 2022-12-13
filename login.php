<?php 
    session_start();
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
     {
          include('conexao.php');
          include('valida.php');
          $email=mysqli_real_escape_string($conn, $_POST['email']);
          $password=mysqli_real_escape_string($conn, $_POST['password']);
           $sql="SELECT  * FROM tb01_usuario WHERE tb01_email= '$email' LIMIT 1"; 
          $sql_exec=$conn->query($sql) or die($conn->error);

          if(mysqli_num_rows($sql_exec)<1)
          {
               unset($_SESSION['email']);
               unset($_SESSION['password']);
               $_SESSION['error'] = "<p>Usuário não existe!</p>";
               header('Location: index.php');
          }
          else if(mysqli_num_rows($sql_exec)==1)
          {
               $user = mysqli_fetch_assoc($sql_exec); 
               if($user['tb01_id_nivel']== 1 && password_verify($password, $user['tb01_senha']))
               {
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$password;
                    $_SESSION['id']=$user['tb01_id_usuario'];
                    $_SESSION['name']=$user['tb01_nome']; 
                    header('Location: menu_user.php');
               }
               else if($user['tb01_id_nivel']== 2 && password_verify($password, $user['tb01_senha']))
               {
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$password;
                    $_SESSION['id']=$user['tb01_id_usuario'];
                    $_SESSION['name']=$user['tb01_nome']; 
                    header('Location: menu_ong.php');
               }     
               else
               {
                    unset($_SESSION['email']);
                    unset($_SESSION['password']);
                    $_SESSION['error'] = "<p>Usuário ou senha inválido!</p>";
                    header('Location: index.php');
               }
          }
     }
     else
     {
          $_SESSION['error'] = "<p>Campos Vazios</p>";
          header('Location: index.php');
     }

 
?>