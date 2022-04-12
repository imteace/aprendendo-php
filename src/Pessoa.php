<?php

class Pessoa
{
  public $nome;
  public $cpf;

  public function __construct(string $nome, CPF $cpf)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function exibirNome(): string
  {
    return $this->nome;
  }


  public function exibirCpf(): CPF
  {
    return $this->cpf;
  }
}
