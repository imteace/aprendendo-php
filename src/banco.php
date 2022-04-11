<?php

require_once("Conta.php");

$contaUm = new Conta();
$contaUm->cpfTitular = "123.456.789-10";
$contaUm->nomeTitular = "Iris A C";
$contaUm->saldo = 600;

$contaDois = new Conta();
$contaDois->cpfTitular = "123.456.789-11";
$contaDois->nomeTitular = "Osvaldo G C";
$contaDois->saldo = 9000;

$contaUm->sacar(150);
$contaDois->depositar(-1000);
$contaDois->transferir(3000, $contaUm);

var_dump($contaUm) . PHP_EOL;
var_dump($contaDois) . PHP_EOL;
