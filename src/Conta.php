<?php

class Conta
{
  private $cpfTitular;
  private $nomeTitular;
  private $saldo = 0;

  public function sacar(float $valorSaque): void
  {
    // if ($valorSaque > $this->saldo) {
    //   print "Você não tem saldo suficiente para realizar essa ação.\n\n";
    //   return;
    // }
    // $this->saldo -= $valorSaque;

    $valorSaque > $this->saldo ? print "\nVocê não tem saldo suficiente para realizar essa ação.\n\n" : $this->saldo -= $valorSaque;
  }

  public function depositar(float $valorDeposito): void
  {
    //   if ($valorDeposito < 0) {
    //     print "O valor do saque tem que ser positivo.\n\n";
    //     return;
    //   }
    //   $this->saldo += $valorDeposito;

    $valorDeposito < 0 ? print "\nO valor do depósito tem que ser positivo.\n\n" : $this->saldo += $valorDeposito;
  }


  public function transferir(float $valorTransferencia, Conta $contaDestino): void
  {
    if ($valorTransferencia > $this->saldo) {
      print "\nVocê não tem saldo o suficiente para realizar essa ação.\n\n";
      return;
    }
    $this->sacar($valorTransferencia);
    $contaDestino->depositar($valorTransferencia);
  }

  public function recuperarSaldo(): float
  {
    return $this->saldo;
  }
}
