<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">


<head>

    
    <title>Login </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.com/libraries/jquery.mask"></script>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="topo">
        <aside class="div1">
            <h1 class="titulo"> LOGIN </h1>
            <hr style="width: 90%;">
            <br>
            <form action="PHP/validacaoLogin.php" method="post" onsubmit="return validarLogin();">
                <header class="campo">
                    <label for="email">E-mail</label>
                    <input type="text" id="EMAIL_USUARIO" name="EMAIL_USUARIO">
                </header>
                <header class="campo">
                    <label for="password">Senha</label>
                    <input type="password" id="SENHA_USUARIO" name="SENHA_USUARIO">
                </header>

                <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
                ?>

                <button class="button1" name="submit" type="submit">Entrar</button>
                <h4 style="text-align: center;"> OU </h4>
                <a href="cadastro.html"><button class="button2" name="submit" type="submit">Cadastre-se</button></a>
        </aside>
        </form>
    </nav>



</body>

</html>