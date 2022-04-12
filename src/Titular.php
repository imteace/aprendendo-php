<?php

class Titular extends Pessoa
{
  private $endereco;

  public function __construct(string $nomeTitular, CPF $cpfTitular, Endereco $endereco)
  {
    $this->nomeTitular = $nomeTitular;
    $this->validarNomeTitular($nomeTitular);
    $this->cpfTitular = $cpfTitular;
    $this->endereco = $endereco;
  }

  public function exibirNomeTitular(): string
  {
    return $this->nomeTitular;
  }

  public function exibirCpfTitular(): string
  {
    return $this->cpfTitular->exibirCpfTitular;
  }

  private function validarNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      print "\nO nome precisa ter no mínimo 5 caracteres.\n\n";
      exit();
    }
  }

  public function exibirEndereco(): Endereco
  {
    return $this->endereco;
  }
}
