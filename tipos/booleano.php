<div class="titulo">Tipo Booleano</div>

<?php
echo "<p>True é convertido pra 1 no browser: </p>";
echo 'True: ';
echo TRUE;
echo '<br>';
echo 'False: ';
echo FALSE;
echo '<br>';
echo '<br>';

echo '1 ';
var_dump(true);
echo '2 ';
var_dump(TRUE);
echo '3 ';
var_dump(False);
echo '4 ';
var_dump('false');
echo '5 ';
echo is_bool(false);
echo '<br>';
echo '6 ';
echo is_bool('true');


echo '<p>Regras de Conversão:</p>';
echo 'a) ';
var_dump((bool) 0); //Apenas zero é false
echo 'b) ';
var_dump((bool) 20); //True
echo 'c) ';
var_dump((bool) -1); //True
echo 'd) ';
var_dump((bool) 0.0); //False
echo 'e) ';
var_dump((bool) 0.0000000001); //True
echo 'f) ';
var_dump((bool) ""); //False
echo 'g) ';
var_dump((bool) "0"); //False
echo 'h) ';
var_dump((bool) " "); //Todo resto é true
echo 'i) ';
var_dump((bool) "00"); //True
echo 'j) ';
var_dump((bool) "false"); //True
echo 'k) ';
var_dump(!!"false"); //True