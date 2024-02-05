<div class="titulo">Desafio Operadores Lógicos</div>

<?php
$resumo = 'Resumo do Exercício:<br>
Dois trabalhos - TERÇA e QUINTA<br>
<ul>
<li>Se os dois trabalhos forem executados -> TV 50 polegadas e Sorvete;</li>
<li>Se apenas um for executado -> TV 32 polegadas e Sorvete;</li>
<li>Se nenhum for executado -> Fica em casa e Sem Sorvete.</li>
</ul><br>';

echo $resumo;
?>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (TERÇA):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (QUINTA):</label>
        <select name="t2" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST['t1'];
echo $_POST['t2'];

?>