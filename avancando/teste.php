<?php

$ar = [];

$ar['pessoa'] = [
  'nome' => 'João Paulo',
  'apelido' => 'João',
  'documento' => 285895
];

$nomePessoa = (object) $ar['pessoa'];

print "$nomePessoa->nome\n";
