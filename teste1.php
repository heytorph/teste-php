<?php

$produtos = array(
    array("nome" => "maça", "preco" => 3.99),
    array("nome" => "melancia", "preco" => 6.50),
    array("nome" => "uva", "preco" => 5.75),
);

foreach ($produtos as $produto) {
    echo $produto['nome'] . ": R$ " . number_format($produto['preco'], 2) . "\n";
}

?>
