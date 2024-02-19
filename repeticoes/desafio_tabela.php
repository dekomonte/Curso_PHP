<div class="titulo">Desafio Tabela</div>

<p>Criar tabelas com os valores abaixo.</p>
<p>
[<br>
    ['01', '02', '03', '04', '05'],<br>
    ['06', '07', '08', '09', '10'],<br>
    ['11', '12', '13', '14', '15'],<br>
    ['16', '17', '18', '19', '20'],<br>
];
</p>

<?php 
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

foreach($matriz as $linha) {
    foreach($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}
?>

<table>
    <!--
        -tr define a linha em uma tabela
        -th cada item
        -td define a standard data cell in an HTML table
     -->
    <?php 
        foreach($matriz as $linha) {
            echo '<tr>';
            foreach($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<table>
    <?php 
        foreach($matriz as $index => $linha) {
            $style = $index % 2 === 0 ? 'background-color: lightblue;' : 'background-color: gray;';
            echo "<tr style='{$style}'>";
            foreach($linha as $valor) {
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>