<div class="titulo">Array como Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);
echo '<p>Chave-Valor</p>';
print_r($dados);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);
?>

<p>
Array Associativo: Array no PHP é um mapa ordenado (valor e chave).
</p>

<pre>
    <code class="code-style">
        $conta1 = [
            'titular'=>'Andressa',
            'saldo'=>20
        ];
        $conta2 = [
            'titular'=>'Fu',
            'saldo'=>14900
        ];
        $conta3 = [
            'titular'=>'Ayo',
            'saldo'=>5600
        ];

        $listaContas = [$conta1,$conta2,$conta3];

        #Loop - Método 1 (for)
        for($i=0;$i<=sizeof($listaContas);$i++){
            echo $listaContas[$i]['titular'];
            echo $listaContas[$i]['saldo'];
        }
    </code>
</pre>

<?php
//Array Associativo
#Array no PHP é um mapa ordenado (valor e chave)
$conta1 = [
    'titular'=>'Andressa',
    'saldo'=>20
];
$conta2 = [
    'titular'=>'Fu',
    'saldo'=>14900
];
$conta3 = [
    'titular'=>'Ayo',
    'saldo'=>5600
];

$listaContas = [$conta1,$conta2,$conta3];
echo '<br>';

#Loop - Método 1 (for)
for($i=0;$i<sizeof($listaContas);$i++){
    echo $listaContas[$i]['titular'].PHP_EOL;
    echo $listaContas[$i]['saldo'].PHP_EOL;
    echo '<br>';
}

echo '<br>';
?>