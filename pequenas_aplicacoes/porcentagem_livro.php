<div class="titulo">Calculadora de Porcentagem Lida de Livros</div>

<form action="#" method="post">
    <label for="fname">Última Página Lida:</label>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Páginas no Total:</label>
    <input type="text" id="lname" name="lname">
    <button>Calcular</button>
</form>

<?php

$ultima=(float)$_POST['fname'];
$total=(float)$_POST['lname'];

//var_dump($porcent);
//var_dump($valor);
$num=($ultima/$total)*100;
$resposta=number_format($num,2,'.',",");
echo "Lido: $resposta %.";