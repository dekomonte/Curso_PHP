<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;0,900;1,300;1,700;1,900&family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <!--Início Lista-->
                    <ul>
                        <li>    
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP!
                            </a>
                        </li>
                    </ul>
                    <!--Fim Lista-->
                </div>
            </nav>    
        </div>
    </main>
    <footer class="rodape">
        COD3R e ANDRESSA MONTEIRO &copy <?= date('Y') ?>
    </footer>
</body>
</html>