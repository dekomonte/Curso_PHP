<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;0,900;1,300;1,700;1,900&family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">

    <!--Gambiarra pra adicionar cógido ao texto-->
    <style>
      pre {
        border: 4px solid gray;
        background-color: #414339;
        margin-left: 50vh;
        margin-right: 50vh;
        border-radius: 10px;    
      }  
      .code-style {
        font-family: Consolas, 'Courier New', monospace;
        color: crimson;
        font-size: 20px;
        line-height: 30px;
        color: #ffffff;  
        text-align: left; 
      }
    </style>

    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
            class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R e ANDRESSA MONTEIRO &copy <?= date('Y') ?>
    </footer>
</body>
</html>