<div class="titulo">Array Multidimensionais</div>

<p>Posso acessar os elementos e posso adicionar novos elementos.</p>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

//Como acessar os elementos
print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

//Adicionar novos elementos
$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

//Eliminar um elemento não faz o Array reordenar os índices
unset($dados[1]);
echo '<br>';
var_dump($dados);