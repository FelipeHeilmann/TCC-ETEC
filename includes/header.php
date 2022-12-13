<header id="header" class="menu-header">
    <img onclick="location = 'menu_user.php'" class="logo-header" src="./assets/images/dog_only.png">
    <form method="get" class="search-bar">
            <input type="text" class="search-input" name="search">
            <button type="submit" name=""><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>    
    <img id="perfil-icon" src="<?php echo $profileIcon['tb01_caminho_foto'];?>" class="perfil-icon">
    <nav id="perfil-settings">
        <a id="close-btn">X</a>
        <img src="<?php echo $profileIcon['tb01_caminho_foto'];?>" class="perfil-icon">
        <h4 style="font-size: 18px;">Bem vindo, <?php echo $login_name?>!</h4>
        <h4><?php echo $login_email?></h4>
        <form method="POST" id="form-photo" enctype="multipart/form-data" >
            <label for="perfil-img">Escolha imagem</label>
            <input style="display:none ;" id="perfil-img" type="file" name="perfil-icon">
        </form>
        <button onclick="location = 'historico.php'" class="reports-btn">Minhas denúncias</button>
        <button onclick="location = 'logout.php'" class="logout-btn"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair da conta</button>
    </nav>
</header>