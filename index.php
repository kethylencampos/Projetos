<?php
    
    include('config.php');
    
    if(isset($_POST['matricula']) || isset($_POST['senha'])) {

        if(strlen($_POST['matricula']) == 0){
            //echo "Preencha o número da sua matrícula!";
        } else if(strlen($_POST['senha']) == 0){
            //echo "Preencha sua senha!";
       } else {

            $matricula = $mysqli->real_escape_string($_POST['matricula']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM alunos WHERE matricula = '$matricula' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {

                $Username = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                   session_start();
                }

                $_SESSION['matricula'] = $Username['matricula'];
                $_SESSION['nome'] = $Username['nome'];

                header("Location: dadosGerais.php");

            } else {
                echo '<span style="color:#ff7676; font-size:12px; position: relative; top: 800px; left:400px;">Falha ao logar! Matrícula ou senha incorretos.</span>';
            }

        }
 }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas ADS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="menu">
            <ul class="nav-menu">
                <li class="nav-item"><a href="#">Login</a></li>
                <li class="nav-item"><a href="paginaCadastro.php">Cadastrar</a></li>
            </ul>
        </nav> 
    </header>
    <section class="login">
        <div class="informations">
            <img src="images/Group 50.png" alt="logo ifac">
            <div class="infos">
                <h1>Análise e <br>Desenvolvimento <br> de Sistemas </h1>
                <p style="text-decoration: none;">Sistema de notas dos alunos de ADS.</p>
            </div>
            
            <form id="formulario" action="index.php" method="POST" autocomplete="off">
                <div>
                    <input name="matricula" type="text" id="matricula-login" placeholder="N° da matrícula" oninput="validatorMatricula()"><br><br>
                    <span id="textMatricula">Insira sua matrícula</span>
                </div>
                
                <div>
                    <input name="senha" type="password" id="senha-login" minlength="6" maxlength="8" aria-required="true" placeholder="Senha" oninput="validatorSenha()"><br><br>
                    <span id="textSenha">Insira sua senha</span>
                </div>
                
                <button id="submit" type="submit" onclick="validatorMatricula()">LOGIN</button>
                
                <!--
                <div class="esquecer-senha">
                    <input type="checkbox">
                    <p>Esqueci minha senha</p>
                </div>
                -->
            </form>
        </div>
        
            <img class="imagemCara" src="images/Group 59.png" alt="imagem dev">
    </section>
</body>
<script src="main.js"></script>
</html>