<div class="titulo">Calculadora de Desconto</div>

<form action="#" method="post">
    <label for="fname">% Desconto:</label>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Valor Total:</label>
    <input type="text" id="lname" name="lname">
    <button>Calcular</button>
</form>

<?php

$porcent=(float)$_POST['fname'];
$valor=(float)$_POST['lname'];

//var_dump($porcent);
//var_dump($valor);
$desconto=($porcent/100)*$valor;
$resposta=$valor-$desconto;
echo "O produto sai por: $resposta reais";