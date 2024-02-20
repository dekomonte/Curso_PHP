<div class="titulo">$_POST</div>

<p class="divisao">Definição do Manual PHP:</p>
<p>Um array associativo de variáveis passados para o script atual via método HTTP POST 
    quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor do cabeçalho HTTP Content-Type na requisição.</p>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
        <option value="DF">Distrito Federal</option>
        <option value="PA">Pará</option>
        <option value="TO">Tocantins</option>
        <option value="SP">São Paulo</option>
    </select>
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
    button {
        background-color: #7B68EE;
    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>' . count($_POST);