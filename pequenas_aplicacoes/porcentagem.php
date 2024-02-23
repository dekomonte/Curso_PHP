<div class="titulo">Caculadora de Porcentagem</div>

<form action="#" method="post">
    <label for="fname">Porcentagem:</label>
    <input type="text" id="fname" name="fname">
    %
    <label for="lname">de</label>
    <input type="text" id="lname" name="lname">
    <button>Calcular</button>
</form>

<?php

$porcent=(float)$_POST['fname'];
$valor=(float)$_POST['lname'];

//var_dump($porcent);
//var_dump($valor);

$resposta=($porcent/100)*$valor;
echo $resposta;