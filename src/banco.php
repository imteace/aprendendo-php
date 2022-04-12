<?php

require_once("Conta.php");
require_once("Endereco.php");
require_once("Titular.php");
require_once("CPF.php");


$end = new Endereco("Acreuna", "Um bairro", "Uma rua", "123-B");
$contaUm = new Conta(new Titular("Iris A C", new CPF("123.456.789-10"), $end));
$contaUm->depositar(200);

$contaDois = new Conta(new Titular("Osvaldo G C", new CPF("123.456.789-11"), $end));
$contaDois->depositar(400);

$contaTres = new Conta(new Titular("Cleonice S A", new CPF("123.456.789-12"), $end));
$contaTres->depositar(500);

$contaUm->sacar(150);
$contaDois->depositar(-100);
$contaTres->transferir(300, $contaDois);

// new Conta(new Titular(("Sergio S C", "321.654.987-11"));

var_dump($contaUm) . PHP_EOL;
var_dump($contaDois) . PHP_EOL;
var_dump($contaTres) . PHP_EOL;

print "Número total de contas: " . Conta::exibirNumContas() . PHP_EOL;
