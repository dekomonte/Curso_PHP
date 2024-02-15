<div class="titulo">Desafio Variáveis</div>

<pre>
    <code class="code-style">
        $a = 'Nossa';
        $Nossa = 'Eu';
        $Eu = 'consegui';
        $consegui = 'responder';
        $responder = 'esse';
        $esse = 'desafio';

        echo "Nossa! Eu consegui responder esse desafio.";

        echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";
    
    </code>
</pre>

<?php

$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "Nossa! Eu consegui responder esse desafio.";

// $a
echo "<br>";
echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";