<div class="titulo">Constantes</div>

<?php
echo "<p>Não pode mudar seu valor.</p>";
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo "<br>";


const NOVA_TAXA = 2.5;
echo NOVA_TAXA;
echo "<br>";

$valorVariavel = 2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
echo NOVISSIMA_TAXA;
echo "<br>";

echo "Versão do PHP: ";
echo PHP_VERSION;
echo "<br>";
echo "O menor inteiro suportado nesta compilação do PHP: ";
echo PHP_INT_MAX;
echo "<br>";

echo 'Linha: ' . __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";