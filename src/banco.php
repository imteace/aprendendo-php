<?php

require_once("Conta.php");

$contaUm = new Conta("Iris A C", "123.456.789-10");
$contaUm->depositar(600);

$contaDois = new Conta("Osvaldo G C", "123.456.789-11");
$contaDois->depositar(9000);

$contaTres = new Conta("Cleonice S A", "123.456.789-12");
$contaTres->depositar(5000);

$contaUm->sacar(150);
$contaDois->depositar(-1000);
$contaTres->transferir(3000, $contaUm);

new Conta("Sergio S C", "321.654.987-11");

var_dump($contaUm) . PHP_EOL;
var_dump($contaDois) . PHP_EOL;
var_dump($contaTres) . PHP_EOL;

print "Número total de contas: " . Conta::exibirNumContas() . PHP_EOL;
