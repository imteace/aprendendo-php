<?php

$height = 145;
$weight = 90;

if (is_integer($height)) {
  $height = $height / 100;
}

$imc = number_format($weight / ($height ** 2), 2);


if ($imc < 20) {
  print "Seu IMC é de $imc e está ABAIXO do recomendado.\n";
}

if ($imc > 20 && $imc < 24.9) {
  print "Seu IMC é de $imc e está DENTRO do recomendado.\n";
}

if ($imc > 25) {
  print "Seu IMC é de $imc e está ACIMA do recomendado.\n";
}
