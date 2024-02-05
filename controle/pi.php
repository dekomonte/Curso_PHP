<div class="titulo">Número PI</div>

<?php

echo pi();
$pi = 3.14;

echo '<p class="divisao">Exemplo</p>';
echo 'Tarefa: comparar valores de PI e decidir sobre sua tolerância.<br>';

$tol = 0.0001;
$dif = abs($pi-pi());

if ($dif <= $tol){
    echo "Correto.<br>";
}
else{
    echo "INCORRETO.<br>";
}




