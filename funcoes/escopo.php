<div class="titulo">Função e Escopo</div>

<p class="divisao">Função</p>
<p>Algoritmo (sequência de passos) que você dá um nome e pode reutilizar esses passos. Você dá um nome para o bloco de código e chama sempre que for necessário.</p>

<p class="divisao">Escopo</p>
<p>Extensão de influência de elementos.</p>

<hr>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Chamando a função!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo '<br>';
echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo '<br>';
echo "Mudando a variável para global:<br>";
function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());