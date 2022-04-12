<?php
class Foo
{
    public static $meu_estatico = 'foo';

    public function valorEstatico() {
        return self::$meu_estatico;
    }
}

class Bar extends Foo
{
    public function fooEstatico() {
        return parent::$meu_estatico;
    }
}


print Foo::$meu_estatico . "\n";

$foo = new Foo();
print $foo->valorEstatico() . "\n";
print $foo->$meu_estatico . "\n";      // "Propriedade" Indefinida $meu_estatico

print $foo::$meu_estatico . "\n";
$classname = 'Foo';
print $classname::$meu_estatico . "\n"; // No PHP 5.3.0

print Bar::$meu_estatico . "\n";
$bar = new Bar();
print $bar->fooEstatico() . "\n";
