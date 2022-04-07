<?php
$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Osvaldo G C',
    'saldo' => 1000
  ],
  '123.456.789-11' => [
    'titular' => 'Cleonice S A',
    'saldo' => 500
  ],
  '123.456.789-12' => [
    'titular' => 'Iris A C',
    'saldo' => 300
  ]
];

$contasCorrentes['123.456.789-10']['saldo'] -= 500;



foreach ($contasCorrentes as $cpf => $conta) {
  print $cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}
