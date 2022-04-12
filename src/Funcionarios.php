<?php

class Funcionarios extends Pessoa
{
  private $nome;
  private $cpf;
  private $cargo;


  public function __construct(string $nome, CPF $cpf, string $cargo)
  {
    $this->cargo = $cargo;
  }

  public function exibirCargo(): string
  {
    return $this->cargo;
  }
}
