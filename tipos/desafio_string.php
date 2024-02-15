<div class="titulo">Desafio String</div>

<p>
Enunciado:
Avaliando os métodos da documentação da string, qual o métodos que a posicao do texto 'abc' na string '!AbcaBcabc' retorne 1?
</p>

<pre>
    <code class="code-style">
        echo strpos('!AbcaBcabc', 'abc');
        echo stripos('!AbcaBcabc', 'abc');
        echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));
    </code>
</pre>

<?php

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));