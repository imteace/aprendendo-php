<?php

class CPF
{
  private $cpfTitular;

  public function __construct(string $cpfTitular)
  {

    $this->cpfTitular = $cpfTitular;
    // $cpfTitular = filter_var($cpfTitular, FILTER_VALIDATE_REGEXP [
    //   "options" => [
    //     "regexp" => "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/"
    //   ]
    // ]);

  }

  public function exibirCpfTitular(): string
  {
    return $this->cpfTitular;
  }
}
