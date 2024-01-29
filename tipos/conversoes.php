<div class="titulo">Conversões</div>

<?php
echo (PHP_INT_MAX);
echo '<br>';
echo is_int(PHP_INT_MAX);
echo '<br>';

echo '<p>Int para Float</p>';
var_dump(PHP_INT_MAX + 1);
//echo '<br>';
var_dump(1 + 1.0);
//echo '<br>';
var_dump((float) 3);
echo '<br>';


echo '<p>Float para Int</p>';
var_dump((int) 6.8);
//echo '<br>';
var_dump(intval(2.999)); //Pega apenas o valor inteiro
//echo '<br>';
var_dump((int) round(2.8));
echo '<br>';


echo '<p>Operações com Strings</p>';
var_dump(3 + "2");
//echo '<br>';
var_dump("3" + 2);
//echo '<br>';
var_dump("3" . 2);
//echo '<br>';
var_dump(1 + "3.2");
//echo '<br>';
var_dump(1 + "-3.2e2");
//echo '<br>';
var_dump((int) "10.5");
//echo '<br>';
var_dump((float) "10.5");
echo '<br>';