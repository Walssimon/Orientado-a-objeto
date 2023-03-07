<?php 

include_once 'produto.php';

$produto1 = new Produto();
$produto2 = new Produto();


$produto1 ->Codigo = 4001;
$produto1 ->Descricao = 'CD - The Best of Eric Clapton';
$produto1 ->Preco = 10;
$produto1 ->Porc = 10;
$produto1 ->Quantidade = 2;
$produto1 -> DescontarSub();

$produto2 ->Codigo = 4002;
$produto2 ->Descricao = 'CD - The Eric Hotel Clapton';
$produto2 ->Preco = 80;
$produto2 ->Porc = 50;
$produto2 ->Quantidade = 1;
$produto2 -> DescontarSub();



$produto1 ->ImprimeEtiqueta();
$produto2 ->ImprimeEtiqueta();

?>