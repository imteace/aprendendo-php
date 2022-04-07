<?php

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd',
  'qualquer_coisa' => 'teste'
];

foreach ($array as $valor) {
  print $valor . PHP_EOL;
}
