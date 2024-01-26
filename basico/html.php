<div class="titulo">Integração HTML</div>

<h1> <?php echo "Olá Mundo!";?></h1>

<p>
<?php 
    echo "É possível colocar tags de formatação de HTML. Exemplos: <br>";
    echo '<br>';

    echo 'Marked text:';
    echo '<mark>';
    echo 'Olá Mundo! <br>';
    echo '</mark>';
    echo '<br>';

    echo 'Smaller text:';
    echo '<small>';
    echo 'Olá Mundo! <br>';
    echo '</small>';
    echo '<br>';

    echo 'Bold text:';
    echo '<b>';
    echo 'Olá Mundo! <br>';
    echo '</b>';
    echo '<br>';
    
?>
</p>

<?= "<div>Outra forma de me 'expressar'!</div>" ?>


<div><button><?= "Legal (sem função)" ?></button></div>

<a class="fcc-btn" href="index.php">
    <button><?= "Legal (volta pra página inicial)" ?></button>
</a>