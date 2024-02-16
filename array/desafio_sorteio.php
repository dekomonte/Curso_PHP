<div class="titulo">Desafio Sorteio</div>

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
echo "<div center><h1>{$nomes[$index]}!</h1></div>"

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
        background-color: #483D8B;
        border-radius: 5px;
        border-style: double;
        margin-left: 200px;
        margin-right: 200px;
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
    }
</style>