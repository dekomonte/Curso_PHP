<div class="titulo">Desafio Swith - Conversor de Distâncias</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Mi</option>
        <option value="milha-km">Mi > Km</option>
        <option value="metro-km">m > Km</option>
        <option value="km-metro">Km > m</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
//echo $_POST['param'];
//echo $_POST['conversao'];

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$parametro = $_POST['param'] ?? 0;
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
    default:
        $mensagem = "Nenhum valor calculado";
        break;
}

echo $mensagem;