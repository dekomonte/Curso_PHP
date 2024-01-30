<div class="titulo">Operador Ternário</div>

<h2>Exemplo 1</h2>

<?php
$idade = 70;
$status;

if($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

//$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';
//echo "$status<br>";
?>

<h2>Exemplo 2</h2>
<?php
#Operador ternário
$idade = 22;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;
echo "\n";

$resultado = TRUE;
echo ($resultado) ? 'Verdadeiro!' : 'Falso!';
echo "\n";
?>
