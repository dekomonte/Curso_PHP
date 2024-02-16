<div class="titulo">Desafio Swith - Conversor de Distâncias</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Mi</option>
        <option value="milha-km">Mi > Km</option>
        <option value="metro-km">m > Km</option>
        <option value="km-metro">Km > m</option>
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

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$parametro = $_POST['param'] ?? 0;
$resultado = 0;
switch ($_POST['conversao']){
    case 'km-milha':
        $distancia = $parametro * FATOR_KM_MILHA;
        $mensagem = "$parametro Km = $distancia Mi";
        break;
    case 'milha-km':
        $distancia = $parametro / FATOR_KM_MILHA;
        $mensagem = "$parametro Mi = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $parametro / FATOR_METRO_KM;
        $mensagem = "$parametro m = $distancia Km";
        break;
    case 'km-metro':
        $distancia = $parametro * FATOR_METRO_KM;
        $mensagem = "$parametro Km = $distancia m";
        break;
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