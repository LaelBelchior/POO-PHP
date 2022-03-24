<?php

class Titular{

    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this -> cpf = $cpf;
        $this -> validaNome($nome);
        $this -> nome = $nome;
    }

    private function validaNome(string $nome)
    {
        if(strlen($nome) <= 5){
            echo 'Nome deve ter mais de cinco caracteres.';
            exit();
        }
    }

    public function recuperaNome(): string
    {
        return $this -> nome;
    }

    public function recuperaCpf(): string
    {
        return $this -> cpf;
    }

}