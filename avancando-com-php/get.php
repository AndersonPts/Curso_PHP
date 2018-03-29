<?php

// echo $_GET['planeta']; //$_GET => Retorna um array com chave e um índive(planeta)
// echo "<br>";
// echo $_GET['cor'];

// ?planeta=Marte&cor=azul = Query String é o valor passado na url qndo o método é get

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false; //isset => Verifica se a variável está definida(setada).


if($planeta != false) {
    echo $planeta;
} else {
    echo "Planeta não informado!";
}

// echo "<br>";

// $cor = $_GET['cor'] ?? "Cor não informada!";

// echo $cor;

//coalesce