<div class="titulo">Integração CSS</div>

<h1 center>
<?php 
echo 'Olá';
echo ' Mundo!';
?>
</h1>

<div center azul>Cuidado com isso de ficar misturando as coisas (HTML CSS PHP)!</div>
<br>
<div center>
    <a href="index.php">
        <button dobro><?= "Página Inicial" ?></button>
    </a>
</div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: royalblue;
        color: 	black;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #007cf9;
    }

    [dobro] {
        font-size: <?= 10 - 8 ?>rem;
    }
</style>