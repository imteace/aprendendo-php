<?php

//ARRAYS ASSOCIATIVOS PERMITEM QUE O DESENVOLVEDOR ATRIBUA UM VALOR PARA UMA CHAVE
$conta1 = [
  'titular' => 'Osvaldo G C',
  'saldo' => 1000
];

$conta2 = [
  'titular' => 'Cleonice S A',
  'saldo' => 500
];

$conta3 = [
  'titular' => 'Iris A C',
  'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];


//FAZENDO UM LOOP PARA VER OS TITULARES DE TODAS AS CONTAS

for ($i = 0; $i < count($contasCorrentes); $i++) {
  print $contasCorrentes[$i]['titular'] . PHP_EOL;
}
