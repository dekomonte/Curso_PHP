<div class="titulo">Desafio Palíndromo</div>

<p>Objetivo: Função que verifica se a palavra é palíndromo.</p>

<p>Duas Implementações:</p>

<p class=divisao> Primeira Forma</p>

<pre>
    <code class="code-style">
        function palindromo($palavra) {
            $ultimoIndice = strlen($palavra) - 1;
            for($i = 0; $i <= $ultimoIndice; $i++) {
                if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
                    return 'Não';
                }
            }
            return 'Sim';
        }
    </code>
</pre>

<p class=divisao> Segunda Forma</p>

<pre>
    <code class="code-style">
        function palindromoSimples($palavra) {
            return $palavra === strrev($palavra) ? 'Sim': 'Não';
        }
    </code>
</pre>

<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara');
echo '<br>';
echo palindromo('ana');
echo '<br>';
echo palindromo('abccba');
echo '<br>';
echo palindromo('bola');
echo '<br>';
echo palindromo('urubu');
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}

echo palindromoSimples('arara');
echo '<br>';
echo palindromoSimples('ana');
echo '<br>';
echo palindromoSimples('abccba');
echo '<br>';
echo palindromoSimples('bola');
echo '<br>';
echo palindromoSimples('urubu');
echo '<br>';