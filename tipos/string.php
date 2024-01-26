<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';

// Concatenação
echo("Nós também" . ' somos' . '<br>');
echo("O Número é " . 123 . '.');
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe o função print");
print "<br>Também existe o função print";

// Algumas funções
echo '<h1>Algumas Funções</h1>';

//Não dá pra notar a diferença por causa da fonte
echo strtoupper('maximizado');
echo '<br>';
echo strtolower('MINIMIZADO');
echo '<br>';
echo ucfirst('só a primeira letra');
echo '<br>';
echo ucwords('todas as palavras');
echo '<br>';
echo strlen('Quantas letras?');
echo '<br>';
echo mb_strlen("Eu também", "utf-8");
echo '<br>';
echo substr('Só uma parte mesmo', 7, 6);
echo '<br>';
echo str_replace('isso', 'aquilo', 'Trocar isso isso');
echo '<br>';