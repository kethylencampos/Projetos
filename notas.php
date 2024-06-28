<?php

    include('protect.php');
    include('config.php');
    

    if(!isset($_SESSION)) {
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <aside class="sidebar">
        <header class="sidebar-header">
            <img class="fotoPerfil" src="images/lidinha.jpg" alt="">
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
            <h2>Notas</h2>
            <p>Notas ficarão disponíveis <strong>ao final do semestre letivo.</strong></p>
        </main>

        <div class="container">
            <input type="text" name="categoria" placeholder="Selecione o período" onfocus="dropDown(0)" onblur="dropDown(1)">

            <div class="dropDown">
                <div class="listDropDown">
                    <div class="item" id="item-1" onmousedown="category(1)">1° semestre</div>
                    <div class="item" id="item-2" onmousedown="category(2)">2° semestre</div>
                    <div class="item" id="item-3" onmousedown="category(3)">3° semestre</div>
                    <div class="item" id="item-4" onmousedown="category(4)">4° semestre</div>
                </div>
            </div>
        </div>

</body>
<script src="main.js"></script>
</html>