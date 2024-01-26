<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;0,900;1,300;1,700;1,900&family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
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
                                Olá Mundo!
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=basico&file=comentario">
                                Comentários PHP
                            </a>
                        </li>
                    </ul>
                    <!--Fim Lista-->
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos Básicos</h3>
                    <!--Início Lista-->
                    <ul>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=int">
                                Inteiro
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=float">
                                Float
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Operações Aritméticas
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=string">
                                String
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Booleano
                            </a>
                        </li>
                        <li>    
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
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