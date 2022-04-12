<?php

class Endereco
{
  private $cidade;
  private $bairro;
  private $rua;
  private $numero;

  public function __construct(string $cidade, string $bairro, string $rua, string $numero)
  {
    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;
  }

  public function exibirCidade()
  {
    return $this->cidade;
  }

  public function exibirBairro()
  {
    return $this->bairro;
  }

  public function exibirRua()
  {
    return $this->rua;
  }

  public function exibirNumero()
  {
    return $this->numero;
  }
}
