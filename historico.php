<?php

    include('protect.php');
    

    if(!isset($_SESSION)) {
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <img class="fotoPerfil" src="images/lidinha.jpg" alt="">
            <p><?php echo $_SESSION['nome']; ?></p>
        </div>

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
                    <i class="material-symbols-outlined">Output</i>
                    <span><a style="color: #808080;" class="links" href="logout.php">Sair</a></span>
                </div>
            </button>
        </nav>
    </aside>

    <main class="main">
        <h2>Histórico</h2>
        <p>Notas referentes ao <strong>Primeiro Semestre</strong> de 2024.</p>

        <div class="semestres-list">
            <button class="semestre" type="submit">1° SEMESTRE</button>
            <button class="semestre" type="submit">2° SEMESTRE</button>
            <button class="semestre" type="submit">3° SEMESTRE</button>
            <button class="semestre" type="submit">4° SEMESTRE</button>
        </div>
    </main>

</body>
</html>