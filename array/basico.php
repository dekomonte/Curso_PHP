<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");

echo '<p>var_dump</p>';
var_dump($lista);

echo '<p>print_r</p>';
print_r($lista);
echo '<br>';

//Acessar elemento
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . mb_substr($texto, 10, 1);

$lista[4]='oi';
$lista[5]=TRUE;
var_dump($lista);