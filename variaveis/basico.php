<div class="titulo">Variáveis</div>

<?php

echo "<p>Variáveis representam um valor.<br>No PHP não é necessário declarar o tipo.</p>";
echo "<p>Exemplos:</p>";

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
echo '<br>';
echo '<br>';

echo "<p>A função unset() destrói as variáveis especificadas:</p>";
var_dump(isset($somaDosNumeros));
unset($somaDosNumeros);
echo '<br>';
//var_dump($somaDosNumeros); //Rodar essa linha gera erro, mostrando que ela não existe

echo "<p>Mudando o tipo da variável:</p>";
$variavel = 10;
echo $variavel;
echo '<br>';

$variavel = "Agora sou uma string!";
echo $variavel;
echo '<br>';

// Nomes de variável - Nomenclatura
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';
echo '<br>';

echo $_SERVER["HTTP_HOST"];
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);