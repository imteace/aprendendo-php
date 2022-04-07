<?php
/* ------ DESAFIO 2 ------ 

TABUADA DE 0 A 10 DE UM NÚMERO*/

$num = 5;
$result = 0;

print "TABUADA DO $num \n\n";

for ($i = 1; $i <= 10; $i++) {
  $result = $num * $i;
  print "$num x $i = $result \n";
}
