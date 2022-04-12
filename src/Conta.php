<?php

class Conta
{
  private $nomeTitular;
  private $cpfTitular;
  private $saldo;
  private static $numeroContas = 0;

  public function __construct(string $nomeTitular, string $cpfTitular)
  {
    $this->nomeTitular = $nomeTitular;
    // $this->validarNomeTitular($nomeTitular);
    $this->cpfTitular = $cpfTitular;
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

  public function exibirSaldo(): float
  {
    return $this->saldo;
  }

  public function exibirNomeTitular(): string
  {
    return $this->nomeTitular;
  }

  public function exibirCpfTitular(): string
  {
    return $this->cpfTitular;
  }

  //   public function exibirConta(Conta $conta)
  //   {
  //     print "Titular: ${conta['nomeTitular']}\n
  //           CPF: ${conta['cpfTitular']}\n
  //           Saldo:R$${conta['saldo']}\n\n";
  //   }

  // private function validarNomeTitular(string $nomeTitular)
  // {
  //   if (strlen($nomeTitular < 5)) {
  //     print "\nO nome precisa ter no mínimo 5 caracteres.\n\n";
  //     exit();
  //   }
  // }

  public static function exibirNumContas(): int
  {
    return Conta::$numeroContas--;
  }
}
