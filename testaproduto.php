<?php
include_once 'produto.php';

$valor = new Produto();

$valor->Codigo = 4011;

$valor->Descricao = "Boneca Annabelle Usada";

$valor->Preco = "R$ -100,00";

echo $valor->Codigo." - ".$valor->Descricao;
?>