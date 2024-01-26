<div class="titulo">Integração CSS</div>

<h1 center>
<?php 
echo 'Olá';
echo ' Mundo!';
?>
</h1>

<div center azul>Cuidado com isso de ficar misturando as coisas!</div>
<br>
<div center><button dobro><?= "X" ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: aqua;
        color: gray;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: blue;
    }

    [dobro] {
        font-size: <?= 10 - 8 ?>rem;
    }
</style>