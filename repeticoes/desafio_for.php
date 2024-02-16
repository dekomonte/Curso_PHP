<div class="titulo">Desafio For</div>

<p>
Precisa usar o FOR! <br>
# <br>
## <br>
### <br>
#### <br>
##### <br>
1) Pode usar incremento $i++ <br>
2) Não pode usar incremento $i++
</p>

<p class="divisao">
    1)
</p>

<?php
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';
?>

<p class="divisao">
    2)
</p>

<?php
for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
    echo "$impressao2 <br>";
}