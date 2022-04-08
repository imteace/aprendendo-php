<?php

function sacar(array $conta, float $valorSaque): array
{
  if ($valorSaque > $conta['saldo']) {
    print "Sinto muito, você não pode sacar.\n\n";
  } else {
    $conta['saldo'] -= $valorSaque;
  }
  return $conta;
}

function exibirMensagem(string $mensagem)
{
  print $mensagem . '</br>';
};

function depositar(array $conta, float $valorDeposito): array
{
  if ($valorDeposito > 0) {
    $conta['saldo'] += $valorDeposito;
  } else {
    print "O valor do depósito é inválido. Tente novamente.\n\n";
  }
  return $conta;
}

// function deixarMaiusculo(array $conta)
// {
//   return strtoupper($conta['titular']);
// }

// function exibeConta(array $conta)
// {
//   list('titular' => $titular, 'saldo' => $saldo) = $conta;
//   print "<li>Titular: $titular. Saldo: $saldo.</li>";
// }

// function mask($val, $mask)
// {
//   $maskared = '';
//   $k = 0;
//   for ($i = 0; $i <= strlen($mask) - 1; $i++) {
//     if ($mask[$i] == '#') {
//       if (isset($val[$k])) $maskared .= $val[$k++];
//     } else {
//       if (isset($mask[$i])) $maskared .= $mask[$i];
//     }
//   }
//   return $maskared;
// }
