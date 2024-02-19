<div class="titulo">Desafio Impressão</div>

<p>
Enunciado: 
<ul>
    <li>Imprima apenas os valores do array que contém indice par;</li>
    <li>Resolver com for e foreach</li>
    <li>Valores esperados: AAA, CCC, EEE</li>
</ul>
</p>


<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}

echo "<br>";

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}