<?php

class Conta
{
    public string $cpf;
    public string $nome;
    public float $saldo;
}

$contaLael = new Conta();
var_dump($contaLael);

$contaLael -> cpf = '123.345.567-89';
$contaLael -> nome = 'Lael Belchior';
$contaLael -> saldo = 200;
var_dump($contaLael);

$contaClonada = $contaLael;
var_dump($contaClonada);

$contaClonada -> nome = 'Israel Belchior';
var_dump($contaClonada);
var_dump($contaLael);

