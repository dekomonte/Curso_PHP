<div class="titulo">Tipo Booleano</div>

<?php
echo 'True:';
echo TRUE;
echo 'False:';
echo FALSE;

echo '<br> 1 ' . var_dump(true);
echo '<br> 2 ' . var_dump(TRUE);
echo '<br> 3 ' . var_dump(False);
echo '<br> 4 ' . var_dump('false');
echo '<br> 5 ' . is_bool(false);
echo '<br> 6 ' . is_bool('true');

// Fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // todo resto é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");