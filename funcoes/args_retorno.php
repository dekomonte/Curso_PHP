<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem() {
    return 'Olá, sou uma função!';
}

function obterMensagemComNome($nome) {
    return "Olá, {$nome}!";
}

function trocarValor($a, $novoValor) {
    $a = $novoValor;
}

function trocarValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

function soma($a, $b) {
    return $a + $b;
}

//--------------------------
echo "<p class=divisao> Função Obter Mensagem</p>";
obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>';
echo obterMensagem();
echo '<br>';
var_dump(obterMensagem());

//--------------------------
echo "<p class=divisao> Função Obter Mensagem com Nome</p>";
echo obterMensagemComNome('Wagner');
echo '<br>';
echo obterMensagemComNome('Tiago');
echo '<br>';
echo obterMensagemComNome('Ayobami');
echo '<br>';
echo obterMensagemComNome('Pedro');
echo '<br>';
echo obterMensagemComNome('Korn');
echo '<br>';
echo obterMensagemComNome('Gabriel');
echo '<br>';

//--------------------------
echo "<p class=divisao> Função Soma</p>";
$x = 23;
$y = 58;
echo soma(45, 78);
echo '<br>';
echo soma($x, $y);
echo '<br>';
echo soma($x, 214);
echo '<br>';
echo soma(756, $y);
echo '<br>';

//--------------------------
echo "<p class=divisao> Função Troca Valor</p>";
echo "Mostra a diferença entre argumentos como referência e valor.","<br>";
$variavel = 1;
trocarValor($variavel, 3);
echo $variavel;
echo '<br>';

//--------------------------
echo "<p class=divisao> Função Troca Valor de Verdade</p>";
trocarValorDeVerdade($variavel, 5000);
echo $variavel;