<div class="titulo">Interpolação</div>

<?php

echo 'Interpolação refere-se ao ato de interpretar o valor de uma variável dentro de um contexto de string.';
echo '<p>Aspas simples x Aspas duplas 
            <ul>
                <li>Quando você coloca entre "", o PHP considera uma variável dentro da string;</li>
                <li>Entre aspas simples, o PHP interpreta como uma string apenas;</li>
                <li>Pode colocar a variável entre {} ou não.</li>
            </ul>
</p><br>';

$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto";
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";