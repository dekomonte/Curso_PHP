<div class="titulo">Valor x Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";
echo "<br>";

// Atribuição por Referência
$variavelReferencia = &$variavel;
echo "$variavelReferencia<br>";
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel x $variavelReferencia";