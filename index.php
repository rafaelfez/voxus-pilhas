<?php

require 'functions.php';

$pilha = new PilhaDeInteiros();
$pilha->push(34);
$pilha->push(55);
$pilha->push(76);
$pilha->push(88);
$pilha->push(99);
$pilha->push(11);
$pilha->push(22);

print_r("Pilha inicial com função push: <br />");
$pilha->imprime($pilha->getPilha());
print_r("------------------------------------------- <br />");

$pilha->pop();
print_r("Pilha depois da função pop(): <br />");
$pilha->imprime($pilha->getPilha());
print_r("------------------------------------------- <br />");

print_r("Menor elemento, função min(): <br />");
$pilha->min($pilha->getPilha());
?>