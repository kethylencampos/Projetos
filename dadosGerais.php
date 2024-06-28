<?php
    include('protect.php');
    include('config.php');

    if(isset($_SESSION['matricula']) && isset($_SESSION['senha'])) {
        session_start();
    }

    if(isset($_FILES["file"]) && !empty($_FILES["file"])){
        $imagem = "./arquivos/" . $_FILES["file"]["name"];
        $imagemUpada = move_uploaded_file($_FILES["file"]['tmp_name'], $imagem);
    }

    $query = "INSERT INTO alunos (imagem) VALUES ($imagemUpada)";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha conta</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <aside class="sidebar">
        <header class="sidebar-header">
            <img class="fotoPerfil" src="<?php echo "$imagem" ?>" alt="">
            <p><?php echo $_SESSION['nome']; ?></p>
        </header>
        
            <nav>
                <button>
                    <div>
                        <i class="material-symbols-outlined">Person</i>
                        <span><a class="links" href="dadosGerais.php">Minha Conta</a></span>
                    </div>
                </button>

                <button>
                    <div>
                        <i class="material-symbols-outlined">Stars</i>
                        <span><a class="links" href="notas.php">Notas</a></span>
                    </div>
                </button>

                <button>
                    <div>
                        <i class="material-symbols-outlined">Whatshot</i>
                        <span><a class="links" href="frequencia.php">Frequência</a></span>
                    </div>
                </button>

                <button>
                    <div>
                        <i class="material-symbols-outlined">Wysiwyg</i>
                        <span><a class="links" href="historico.php">Histórico</a></span>
                    </div>
                </button>

                <button>
                    <div id="logout-icon">
                        <i class="material-symbols-outlined" style="color: #646464;">Output</i>
                        <span><a class="links" href="logout.php">Sair</a></span>
                    </div>
                </button>
            </nav>
        </aside>

        <main class="main">
            <h2>Dados gerais</h2>
            <p>Confira se suas informações estão corretas e sempre mantenha seus dados atualizados.</p>

            <form class="form-profile" enctype="multipart/form-data" class="profile" action="dadosGerais.php" method="POST">
                <img style="width:100px; object-fit:cover;" src="<?php echo "$imagem" ?>" alt="">

                <div class="trocar-foto">
                    <input name="file" type="file" accept="image/*" class="upload"><br>
                    <button type="submit" class="btn-profile">Trocar foto</button>
                </div>
                
            </form>
        </main>

        <form class="dadosPerfil" action="dadosGerais.php" method="">
            <div class="input-left">
                <label for="">Nome</label>
                <input type="text">

                <label for="">Turma</label>
                <input type="text">

                <label for="">Matricula</label>
                <input type="text">

                <button type="submit">Salvar</button>
            </div>
        </form>
</body>
</html>