<div class="titulo">Variáveis Variáveis</div>

<?php

echo 'São variáveis com nomes de variáveis.';
echo 'Não é muito utilizado.';
echo '<br>';

$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo "$epa {$$epa} {$$$epa}";