<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['matricula']);
        //print_r($_POST['turma']);
        //print_r($_POST['senha']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $turma = $_POST['turma'];
        $senha = $_POST['senha'];
        $imagemUpada = $_POST['imagem'];
        
        if(isset($_FILES["file"]) && !empty($_FILES["file"])){
            $imagem = "./arquivos/" . $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]['tmp_name'], $imagem);
        }

        $result = mysqli_query($mysqli, "INSERT INTO alunos(nome,matricula,turma,senha,imagem) 
        VALUES ('$nome','$matricula','$turma','$senha', '$imagem')");

    if(!isset($_SESSION)) {
        session_start();
    }

    header("Location: index.php");

    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body>
    <header>
        <nav class="menu">
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php">Login</a></li>
                <li class="nav-item"><a href="paginaCadastro.php">Cadastrar</a></li>
            </ul>
        </nav> 
    </header>
    <h2 class="titulo">Cadastrar-se</h2>

    <section id="secao1">
        <form class="formCadastro" action="paginaCadastro.php" method="POST">
            <div>
                <label for="Nome">Nome</label>
                <input placeholder="Seu nome completo" id="nome" class="campo-required" type="text" name="nome" oninput="nameValidate()">
                <span class="span-required">Nome deve ter no mínimo 3 caracteres</span>
            </div>

            <div>
                <label for="Matricula">Matrícula</label>
                <input placeholder="Sua matricula" maxlength="12" id="matricula" class="campo-required" type="text" name="matricula" oninput="matriculaValidate()">
                <span class="span-required">Matrícula deve ter 12 números</span>
            </div>

            <div>
                <label for="Turma">Turma</label>
                <input placeholder="Sua turma" id="turma" class="campo-required" type="text" name="turma">
                <span class="span-required">Escolha uma turma</span>
            </div>

            <div>
                <label for="Senha">Senha</label>
                <input placeholder="Digite sua senha de 8 dígitos" maxlength="8" id="senha" class="campo-required" type="password" name="senha" oninput="senhaValidate()">
                <span class="span-required">A senha deve ter 8 dígitos</span>
            </div>

            <div>
                <label for="Imagem">Perfil</label>
                <input id="ft_perfil" class="campo-required" type="file" name="file">
            </div>

            <br>
            <div class="salvar">
                <input type="checkbox">
                <p>Salvar informações</p>
            </div>
            <br>
            <button id="submit" name="submit" class="cadastrar" type="submit" onclick="cadastrado()">CADASTRAR</button>
        </form>
    </section>
    
</body>
<script src="main.js"></script>
</html>