<?php

class Conta
{
  private $titular;
  private $saldo;
  private static $numeroContas = 0;

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;

    self::$numeroContas++;
  }

  public function __destruct()
  {
    // if (self::$numeroContas > 2) {
    //   print "Há mais de uma conta ativa.";
    // }
    self::$numeroContas--;
  }

  public function sacar(float $valorSaque): void
  {
    $valorSaque > $this->saldo ? print "\nVocê não tem saldo suficiente para realizar essa ação.\n\n" : $this->saldo -= $valorSaque;
  }

  public function depositar(float $valorDeposito): void
  {
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

  public function exibirSaldo(): float
  {
    return $this->saldo;
  }

  public function exibirNomeTitular(): string
  {
    return $this->titular->exibirNomeTitular();
  }

  public function exibirCpfTitular(): string
  {
    return $this->titular->exibirCpfTitular();
  }

  public static function exibirNumContas(): int
  {
    return Conta::$numeroContas--;
  }
}
