<?php

require_once 'Conta.php';

$contaLael = new Conta('Lael Belchior', '123.456.789-10');

var_dump($contaLael);

$contaLael -> depositar(500);

var_dump($contaLael);

$contaGabrielle = new Conta('Gabrielle Ribeiro', '234.567.891-01');

var_dump($contaGabrielle);

$contaLael -> transferir(450, $contaGabrielle);

var_dump($contaLael);
var_dump($contaGabrielle);

$contaYuri = new Conta('Yuri Guerreiro', '345.678.910-12');

var_dump($contaYuri);

echo Conta::recuperaNumeroContas() . PHP_EOL;

unset($contaLael);

echo Conta::recuperaNumeroContas() . PHP_EOL;