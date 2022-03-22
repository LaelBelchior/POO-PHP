<?php

require_once 'Conta.php';

$contaLael = new Conta();

var_dump($contaLael);

$contaLael -> defineNome('Lael Belchior');
$contaLael -> defineCpf('123.456.789-10');
$contaLael -> depositar(500);

var_dump($contaLael);

$contaGabrielle = new Conta();

var_dump($contaGabrielle);

$contaGabrielle -> defineNome('Gabrielle Ribeiro');
$contaGabrielle -> defineCpf('234.567.891-0');

$contaLael -> transferir(450, $contaGabrielle);

var_dump($contaLael);
var_dump($contaGabrielle);