<div class="titulo">Desafio Swith 2 - Conversor de Temeperaturas</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="kelvin-celsius">Kelvin > Celsius</option>
        <option value="kelvin-fahrenheit">Kelvin > Fahrenheit</option>
        <option value="celsius-kelvin">Celsius > Kelvin</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
        <option value="fahrenheit-kelvin">Fahrenheit > Kelvin</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>


<?php

$parametro = $_POST['param'];
$resultado = 0;
switch ($_POST['conversao']){
    case 'kelvin-celsius':
        $resultado=$parametro-273.15;
        $mensagem = "$parametro K = $resultado °C";
        break;
    case 'kelvin-fahrenheit':
        $resultado = ($parametro-273.15)*1.8+32;
        $mensagem = "$parametro K = $resultado F";
        break;
    case 'celsius-kelvin':
        $resultado=$parametro+273.15;
        $mensagem = "$parametro °C = $resultado K";
        break;
    case 'celsius-fahrenheit':
        $resultado=$parametro*1.8+32;
        $mensagem = "$parametro °C = $resultado F";
        break;
    case 'fahrenheit-celsius':
        $resultado=($parametro-32)/1.8;
        $mensagem = "$parametro F = $resultado °C";
        break;
    case 'fahrenheit-kelvin':
        $resultado=($parametro-32)*(5/9)+273.15;
        $mensagem = "$parametro K = $resultado F";
        break;
    default:
        $mensagem = "Nenhum valor calculado";
        break;
}

echo $mensagem;