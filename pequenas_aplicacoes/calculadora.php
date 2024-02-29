<div class="titulo">Calculadora Simples</div>

<h3>Assume-se que o usuário não fará bobagens.</h3>

<form action="#" method="post">
    <label for="fname">Primeiro Valor:</label>
    <input type="text" id="fname" name="fname">
    <label for="lname">Segundo Valor:</label>
    <input type="text" id="lname" name="lname"><br>
    
    <br>
    <label>Operação:</label><br>
    <input type="checkbox" id="soma" name="soma" value="soma">
    <label for="soma">+</label><br>
    <input type="checkbox" id="subtracao" name="subtracao" value="subtracao">
    <label for="subtracao">-</label><br>
    <input type="checkbox" id="multiplicacao" name="multiplicacao" value="multiplicacao">
    <label for="multiplicacao">x</label><br>
    <input type="checkbox" id="divisao" name="divisao" value="divisao">
    <label for="divisao">\</label><br><br>
    
    <button type="submit">Calcular</button>
    <br>
</form>

<?php

$valor1=(float)$_POST['fname'];
$valor2=(float)$_POST['lname'];
$resultado;

//var_dump($valor1);
//var_dump($valor2);

if(isset($_POST['soma'])){
    $resultado=$valor1+$valor2;
}
if(isset($_POST['subtracao'])){
    $resultado=$valor1-$valor2;
}
if(isset($_POST['multiplicacao'])){
    $resultado=$valor1*$valor2;
}
if(isset($_POST['divisao'])){
    $resultado=$valor1/$valor2;
}

echo $resultado;