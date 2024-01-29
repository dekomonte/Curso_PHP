<div class="titulo">Tipo Nulo</div>

<?php
echo "<p>O Tipo nulo representa a ausência de valor. O exemplo abaixo destrói uma variável que antes era um inteiro. Observa-se que a função var_dump() indica que a variável é do tipo NULL após o processo.</p>";

$somaDosNumeros = 19;
echo $somaDosNumeros;
var_dump($somaDosNumeros);
var_dump(isset($somaDosNumeros));
unset($somaDosNumeros);
var_dump($somaDosNumeros);