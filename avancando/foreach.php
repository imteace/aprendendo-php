<?php
$contasCorrentes = [
  12345678910 => [
    'titular' => 'Osvaldo G C',
    'saldo' => 1000
  ],
  12345678911 => [
    'titular' => 'Cleonice S A',
    'saldo' => 500
  ],
  12345678912 => [
    'titular' => 'Iris A C',
    'saldo' => 300
  ]
];

//PARA CADA (for each) conta corrente que recebe o nome de "$conta", mostra o titular

foreach ($contasCorrentes as $cpf => $conta) {
  //print $cpf . PHP_EOL;
  $ar = [
    'nome' => $conta['titular']
  ];
  print $ar['nome'] . PHP_EOL;
}
