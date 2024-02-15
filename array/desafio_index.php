<div class="titulo">Desafio Index</div>

<p>
    Não faça isso! NUNCA!
</p>

<pre>
    <code class="code-style">
        $lista = array(
            1,
            4 =>  2,
            3 =>  3,
            'a' =>  4,
            5,
            '9' =>  6,
            '06' => 7,
            0 => 8
        );

        print_r($lista);
    </code>
</pre>

<?php
$lista = array(
    1,
    4 =>  2,
    3 =>  3,
    'a' =>  4,
    5,
    '9' =>  6,
    '06' => 7,
    0 => 8
);

// Array([0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 => [06] => 7)
print_r($lista);
var_dump($lista);