<?php

//USAR REQUIRE, REQUIRE_ONCE,  INCLUDE OU INCLUDE_ONCE PARA ADICIONAR ARQUIVOS NO CÓDIGO
include('onlyfunctions.php');

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

$contasCorrentes[12345678911] = sacar($contasCorrentes[12345678911], 500);
$contasCorrentes[12345678912] = depositar($contasCorrentes[12345678912], 500);

// REMOVENDO UMA CONTA DO ARRAY
// unset($contasCorrentes['123.456.789-12']);

// $contasCorrentes['123.456.789-12']['titular'] = deixarMaiusculo($contasCorrentes['123.456.789-12']); 

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aprendendo PHP</title>
</head>

<body>
  <h1>Contas Correntes</h1>
  <dl>
    <?php
    foreach ($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3><?= $conta['titular'] ?> - <?= str_replace(['.', '-'], "", $cpf) ?> </h3>
        <!-- <h3> $conta['titular'] ?> mask($cpf, '###.###.###-##') ?></h3> -->
      </dt>
      <dd>Saldo: <?= $conta['saldo'] ?></dd>
    <?php } ?>
  </dl>
</body>

</html>