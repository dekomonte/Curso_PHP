<div class="titulo">Arquivos- Geral</div>

<?php

$conteudo = '#include <nome do arquivo> - usa elementos de outros arquivos, indica erro caso não ache o arquivo mas continua executando <br>
#require <nome do arquivo> - informa que tem um erro e não executa a partir daí <br>
#require_once <nome do arquivo> - inclui caso o arquivo não tenha sido incluido antes <br>
#include_once <nome do arquivo> <br>';

echo $conteudo;