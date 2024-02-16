<div class="titulo">Desafio Sorteio
    <ion-icon name="dice-outline"></ion-icon>
</div>

<p class="divisao">Candidatas:</p>


<?php
$nomes = [
    "Elza", 
    "Rapunzel", 
    "Branca de Neve", 
    "Cinderela",
    "Aurora",
    "Ariel",
    "Moana",
    "Mirabel",
    "Bela",
    "Jasmine",
    "Pocahontas",
    "Mulan",
    "Tiana",
    "Merida"
];

foreach ($nomes as $nome){
    echo "$nome <br>";
}


$index = array_rand($nomes);
echo "<div resultado>E a vencedora foi:</div>";
echo "<div center><h1>{$nomes[$index]}!</h1></div>";
?>

<div baloes>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
<ion-icon name="balloon-outline"></ion-icon>
<ion-icon name="ribbon-outline"></ion-icon>
</div>

<style>
    [center] {
        display: flex;
        justify-content: center;
        background-color: #483D8B;
        border-radius: 5px;
        border-style: double;
        margin-left: 300px;
        margin-right: 300px;
        margin-bottom: 50px;
    }
    [resultado] {
        display: flex;
        justify-content: center;
        background-color: yellowgreen;
        font-size: larger;
        margin-top: 40px;
        margin-bottom: 20px;
        margin-left: 500px;
        margin-right: 500px;
        padding: 10px;
        border-radius: 5px;
        border-style: double;
    }
    [baloes] {
        display: flex;
        justify-content: center;
    }
    ion-icon {
        font-size: 40px;
        color: #FF6347;
    }
</style>
