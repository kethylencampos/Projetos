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
    <title>Frequência</title>
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
                    <span><a class="links" href="logout.php">Sair</a></span>
                </div>
            </button>
        </nav>
    </aside>

    <main class="main">
        <h2>Frequência</h2>
        <p>Frequência para aprovação deve ser de <strong>no mínimo 70%.</strong></p>
    </main>

    <div id="percentual">
        <h4>Estatísticas</h4>

        <div class="detalhes">
            <div class="data">
                <input class="custom-date-input" type="date" placeholder="Período">
            </div>

            <div class="bolinhas">
                <div>
                    <div class="status-presenças"></div>
                    <p>PRESENÇAS</p>
                </div>

                <div>
                    <div class="status-faltas"></div>
                    <p>FALTAS</p>
                </div>
            </div>
        </div>
    </div>

    <div class="estatisticas">
        <div class="list-data">
            <p style="width: 900px; font-size: 12px; color: #646464; font-weight: 500; margin-bottom: 30px; border-bottom: 1px solid #646464;">MATÉRIAS</p>
        </div>
        <div class="subject-list" id="subject-list">
            <div class="subject-item">
                <p class="subject-name">Matemática</p>

                <div class="progress-bar-container">
                    <div class="progress-bar" id="progress-bar-matematica"></div>
                </div>

                <p class="attendance-text" id="attendance-text-matematica">Faltas: 0</p>
            </div>

            <div class="subject-item">
                <p class="subject-name">Lógica de programação</p>

                <div class="progress-bar-container">
                    <div class="progress-bar" id="progress-bar-historia"></div>
                </div>

                <p class="attendance-text" id="attendance-text-historia">Faltas: 0</p>
            </div>

            <div class="subject-item">
                <p class="subject-name">Estatística</p>

                <div class="progress-bar-container">
                    <div class="progress-bar" id="progress-bar-historia"></div>
                </div>

                <p class="attendance-text" id="attendance-text-historia">Faltas: 0</p>
            </div>

            <div class="subject-item">
                <p class="subject-name">Linguagem de programação</p>

                <div class="progress-bar-container">
                    <div class="progress-bar" id="progress-bar-historia"></div>
                </div>

                <p class="attendance-text" id="attendance-text-historia">Faltas: 0</p>
            </div>

            <div class="subject-item">
                <p class="subject-name">Banco de dados</p>
                
                <div class="progress-bar-container">
                    <div class="progress-bar" id="progress-bar-portugues"></div>
                </div>

                <p class="attendance-text" id="attendance-text-portugues">Faltas: 0</p>
            </div>
        </div>
    </div>
        
</body>
<script src="main.js"></script>
</html>